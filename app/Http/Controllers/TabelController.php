<?php

namespace App\Http\Controllers;
use App\Models\DataTabel;
use App\Models\Client;
use Illuminate\Http\Request;

class TabelController extends Controller
{
    public function index()
    {
        $data['data']=DataTabel::with('dClient')->get();
        $dataClient = Client::all();
        return view('dtable',$data, compact($dataClient));
    }
    public function input()
    {
        return view('input');
    }
}
