@extends("layout.inc.home")
@section("content")
<h1>Edit Teacher</h1>
<form method="POST" action="{{ url('tupdate/'.$emp->id) }}" enctype="multipart/form-data" class="p-3">
    
    @csrf
    <label>Name</label>
    <input type="text"class="form-control"name="name"value="{{$emp->name}}">
    <label>FatherName</label>
    <input type="text"class="form-control"name="fname"value="{{$emp->fname}}">
    <label>Qualification</label>
    <input type="text"class="form-control"name="qualification"value="{{$emp->qualification}}">
    <label>Address</label>
    <input type="text"class="form-control"name="address"value="{{$emp->address}}">
    <label>Phone</label>
    <input type="text"class="form-control"name="phone"value="{{$emp->phone}}">
    <label>Assign Class</label>
    <input type="text"class="form-control"name="class"value="{{$emp->class}}">
    <label>Email</label>
    <input type="text"class="form-control"name="email"value="{{$emp->email}}">
    <input type="submit"class="btn btn-primary"value="update">
</form>
@endsection