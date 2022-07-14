@extends('layout.home')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>All Page</h3>
           </div>
        <div class="card-body" >
          <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Bolgs</th>
                    <th>Type</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($post as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td><a href="{{ url('/') }}/{{ $item->type }}/{{ $item->slug }}" target="_blank">{{ $item->title }}</a></td>
                        <td>{{ \Illuminate\Support\Str::limit(strip_tags($item->content), 100, $end='...') }}</td>
                        <td>
                            {{ strtoupper($item->type) }}
                        </td>
                        <td>
                        <a href="{{ url('admin/edit-blog/'.$item->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ url('admin/delete-blog/'.$item->id) }}" class="btn btn-warning">Delete</a>    
                        </td>    
                    </tr>      
                    <br>
                @endforeach
            </tbody>
          </table>
          </div>
        </div>
    </div>
@endsection