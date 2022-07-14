@extends('public.layout.app')

@section('title',$b->title)
@section('keyword',$b->keyword)
@section('description',$b->description)

@section('content')
<div class="text-center carousel-item d-block" style="min-height: 450px;background: url('/images/our-story.jpg')"><div style="background-color: rgba(0,0,0,.7);">
  <h1 class="text-white p-5 " style="padding-top:  15rem!important;padding-bottom:  15rem!important;font-size: 80px;
    font-weight: 400;"><b>Blog</b> </h1>
    </div>
</div>
    <!-- OUR SERVICES -->
    <div class="container">
        <div class="py-5 text-center">
            <h2> <u>{{ $b->title }}</u> </h2>                    
            <img src="{{url('/')}}/images/{{ $b->image }}" style="width: 100%">
        </div>
        <p class="m-3">{!! $b->content !!}</p>    
    </div>
    <!-- END out -->

    <!-- Latest From Our Blog -->
    <div class="container text-center py-5">
        <div class="my-5 ">

            <h1>Latest From Our Blog</h1> 


        </div>
        <div class="row my-4">
            @foreach ($list  as $b)
                <div class="col-sm-4 my-2">
                    <div class="card " >
                        <p class="m-3"><b>{{ \Illuminate\Support\Str::limit($b->title, 35, $end='') }}</b></p>
                        <img class="card-img pl-2 pr-2" src="{{ url('/') }}/images/{{ $b->image }}" alt="Card image cap" width="auto" height="150px">
                        
                        <div class="card-body">
                        <p>{{$b->created_at}}</p>
                        <p class="card-text" style="color: #6b7c93;">{{ \Illuminate\Support\Str::limit(strip_tags($b->content), 140, $end='...') }}</p>
                        <a href="{{ url('/') }}/blog/{{$b->slug}}" class="m-2"><b>Read more</b></a>
                        </div>
                    </div>
                </div>
            @endforeach     
        </div> 
    </div>


   



@endsection