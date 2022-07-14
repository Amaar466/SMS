@extends("layout.inc.home")
@section("content")
<h1>Add Subjects</h1>
<form method="POST"action="{{ url('supdate/'.$sub->id) }}" enctype="multipart/form-data" class="p-3">
    
    @csrf
    <label>Name</label>
    <input type="text"class="form-control"name="name"value="{{$sub->name}}">
    <label>credit-hour</label>
    <input type="text"class="form-control"name="credit"value="{{$sub->credit}}">
    <input type="submit"class="btn btn-primary"value="update">
</form>
@endsection