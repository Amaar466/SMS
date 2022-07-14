@extends("layout.inc.home")
@section("content")
<h1>Add Classes</h1>
<form method="POST"action="{{ url('store') }}" enctype="multipart/form-data" class="p-3">
    
    @csrf
    <label>Name</label>
    <input type="text"class="form-control"name="name">
    <label>Section</label>
    <input type="text"class="form-control"name="section">
    <label>Strength</label>
    <input type="text"class="form-control"name="strength">
    <input type="submit"class="btn btn-primary">
</form>
@endsection