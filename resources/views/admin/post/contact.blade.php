@extends('layout.home')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Leads Page</h3>
           </div>
        <div class="card-body" >
          <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>

               @foreach ($list as $item)

        
             <tr>
                    <td>{{$item->id}}</td>

                    <td>
                        {{ $item->name }}
                    </td>
                
                    <td>
                        {{ $item->email }}
                    </td>                
                    <td>
                        {{ $item->phone }}
                    </td>   
                    
                    <td>
                        {{ $item->subject }}
                    </td>

                    <td>
                        {{ $item->message }}
                    </td>
                </tr>   

                @endforeach
            </tbody>
          </table>
          </div>
        </div>
    </div>
@endsection