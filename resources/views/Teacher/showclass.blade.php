@extends("layout.inc.home")
@section("content")
<table class="table">
    <h1>Show Classes</h1>
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Section</th>
        <th scope="col">strength</th>
        <th scope="col">Manage</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($cls as $data)
      <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->section}}</td>
       <td>{{$data->strength}}</td>
        <td><a href="{{ url('cdelete/'.$data->id )}}"class="btn btn-danger">Delete</a>
        <a href="{{url ('cedit/'.$data->id) }}"class="btn btn-warning">Edit</a></td>
            
      @endforeach  
      </tr>
      
    </tbody>
  </table>
@endsection