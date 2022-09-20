<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>EDIT DATA</title>
  </head>
  <body>
    <form action="update/{{$project->project_id}}" method="post">
        @method('put')  
        @csrf
          
        <table align="center">
          <tbody>
            <tr>
              <td>
                  <label for="projectName">Project Name</label>
              </td>
              <td>
                <input type="text" name="project_name" id="projectName" value="{{ $project->project_name }}">
                <input type="hidden" name="id" id="id" value="{{ $project->project_id }}">
              </td>
            </tr>
            <tr>
              <td>
                <label for="client">Client</label>
              </td>
              <td>
                <select name="client_id">
                  <option value="{{ $project->dClient['client_id'] }}">{{ $project->dClient['client_name'] }}</option>

                    @if ($project->client_id == true)
                        @foreach ($dataClient as $item)
                            <option value="{{$item->dClient['client_id']}}">{{$item->dClient['client_name']}}</option>
                        @endforeach
                    @endif

                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label for="projectStart">Project Start</label>
              </td>
              <td>
                <input type="date" name="project_start" id="projectStart" value="{{$project->project_start}}">
              </td>
            </tr>
            <tr>
              <td>
                <label for="projectEnd">Project End</label>
              </td>
              <td>
                <input type="date" name="project_end" id="projectEnd" value="{{$project->project_end}}">
              </td>
            </tr>
            <tr>
              <td>
                <label for="Status">Status</label>
              </td>
              <td>
                <select name="project_status">
                 <option value="{{$project->project_status}}">{{$project->project_status}}</option>
                 
                 @if ($project->project_status == 'DONE')
                    <option value="OPEN">OPEN</option>
                    <option value="DOING">DOING</option>
                 
                 @elseif ( $project->project_status == "OPEN" )
                    <option value="DOING">DOING</option>
                    <option value="DONE">DONE</option>
                
                 @elseif ( $project->project_status == "DOING" )
                    <option value="DONE">DONE</option>
                    <option value="OPEN">OPEN</option>
                 @endif

                </select>
              </td>
            </tr>
          </tbody>
        </table>
    </div>
    <div class="modal-footer mx-2 my-2">
        <a class="btn btn-secondary mx-2" href="{{asset('dashboard')}}">Back</a>
        <input type="submit" name="submit" class="btn btn-primary" value="Update">
    </div>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>