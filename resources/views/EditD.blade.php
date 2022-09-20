<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <form action="update/{{$project->project_id}}" method="post">
      @method('put')  
      @csrf
        
      <table>
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
      <a class="btn btn-secondary mx-2" href="{{asset('/')}}">Back</a>
      <input type="submit" name="submit" class="btn btn-primary" value="update">
  </div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>