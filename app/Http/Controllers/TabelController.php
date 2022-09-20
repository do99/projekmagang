<?php

namespace App\Http\Controllers;
use App\Models\DataTabel;
use App\models\Client;
use App\Models\Projek;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class TabelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["data"]=DataTabel::with('dClient')->get();
        $dataClient = Client::all();
        return view('dtable',$data, \compact('dataClient'));
    }


    public function tambah() {
        $data["data"]=DataTabel::with('dClient')->get();
        $dataClient = Client::all();
        return view('Create',$data, \compact('dataClient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // return view('create');
        $project = new Projek;
        $project->project_name = $request->projectName;
        $project->client_id = $request->client_id;
        $project->project_start = $request->projectStart;
        $project->project_end = $request->projectEnd;
        $project->project_status = $request->project_status;
        $project->save();

        return redirect('/dashboard')->with('Success', 'Data Telah Tersimpan!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $project_id)
    {
        $data["data"]=DataTabel::with('dClient')->get();
        $project = Projek::with('dClient')->findOrFail($project_id);
        $dataClient = Client::where('project_id', '!=', $project->client_id);
        // dd($project);
        return view('edit',$data, compact('project', 'dataClient'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $project_id)
    {
        $update = Projek::where('project_id', $request->id)->update($request->except('_method', '_token','id','submit'));

        return redirect('dashboard')->with('Success', 'Data telah di Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
