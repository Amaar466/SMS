@extends("layout.inc.home")
@section("content")
<table class="table">
    <h1>Show Subjects</h1>
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Credit-hour</th>
        <th scope="col">Manage</th>

        
      </tr>
    </thead>
    <tbody>
        @foreach ($sub as $data)
      <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->credit}}</td>
       
        <td><a href="{{ url('sdelete/'.$data->id )}}"class="btn btn-danger">Delete</a>
        <a href="{{url ('sedit/'.$data->id) }}"class="btn btn-warning">Edit</a></td>
            
      @endforeach  
      </tr>
      
    </tbody>
  </table>
@endsection