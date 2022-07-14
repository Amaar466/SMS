@extends("layout.inc.home")
@section("content")
<h1>Add Classes</h1>
<form method="POST"action="{{ url('cupdate/'.$cls->id) }}"enctype="multipart/form-data"class="p-3">
    
    @csrf
    
    <label>Name</label>
    <input type="text"class="form-control"name="name"value="{{$cls->name}}">
    <label>Section</label>
    <input type="text"class="form-control"name="section"value="{{$cls->section}}">
    <label>Strength</label>
    <input type="text"class="form-control"name="strength"value="{{$cls->strength}}">
    <input type="submit"class="btn btn-primary"value="update">
</form>
@endsection