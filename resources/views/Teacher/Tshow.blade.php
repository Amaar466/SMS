@extends("layout.inc.home")
@section("content")
<a class="btn btn-success" type="button" href="{{url('/tadd')}}">Add New Teacher</a>
<table class="table">
    <h1>Show Teachers</h1>
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Father Name</th>
        <th scope="col">Qualification</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
       <th scope="col">Email</th>
        <th scope="col">Manage</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($emp as $data)
      <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->fname}}</td>
        <td>{{$data->qualification}}</td>
        <td>{{$data->address}}</td>
        <td>{{$data->phone}}</td>
        <td>{{$data->email}}</td>
        <td><a href="{{ url('tdelete/'.$data->id )}}"class="btn btn-danger">Delete</a>
        <a href="{{url ('tedit/'.$data->id) }}"class="btn btn-warning">Edit</a></td>
            
      @endforeach  
      </tr>
      
    </tbody>
  </table>
@endsection