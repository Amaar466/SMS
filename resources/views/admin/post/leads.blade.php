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
                    <th> ID </th>
                    <th> Name </th>
                    <th> Email </th>
                    <th> Phone </th>
                    <th> Q1 </th>
                    <th> Q2 </th>
                </tr>
            </thead>
            <tbody>

               @foreach ($lead as $item)
                    <?php 
                        $i = json_decode($item->lead); 
                        $q1 = json_decode($i->q1); 
                        $q2 = json_decode($i->q2); 
                    ?>  
                        <tr>
                            <td>{{ $item->id }}</td>

                            <td>
                                {{ $i->name }}
                            </td>
                        
                            <td>
                                {{ $i->email }}
                            </td>                
                            <td>
                                {{ $i->phone }}
                            </td>   
                            
                            <td>
                                <strong>{{ $q1->q }}</strong> <br/> {{ $q1->value }}
                            </td>

                            <td>
                                <strong>{{ $q2->q }}</strong> <br/> {{ $q2->value }}
                            </td>
                        </tr>   

                @endforeach
            </tbody>
          </table>
          </div>
        </div>
    </div>
@endsection