@extends("layout.inc.home")
@section("content")
<h1>Add Teacher</h1>
<form method="POST" action="{{ route('creg') }}" enctype="multipart/form-data" class="p-3">
    
    @csrf
    <div class="text-center carousel-item d-block" style="min-height: 450px;background: url('/images/our-story.jpg')"><div style="background-color: rgba(0,0,0,.7);">
  <h1 class="text-white p-5 " style="padding-top:  15rem!important;padding-bottom:  15rem!important;font-size: 80px;
    font-weight: 400;"><b>Blog</b> </h1>
    </div>
</div>
    <!-- OUR SERVICES -->
    <div class="container">
        <div class="py-5 text-center">
            <h2> <u>#</u> </h2>                    
            <!-- <img src="{{url('/')}}/images/{{ $b->image }}" style="width: 100%"> -->
        </div>
        <p class="m-3">#</p>    
    </div>
    <!-- END out -->

    <!-- Latest From Our Blog -->
    <div class="container text-center py-5">
        <div class="my-5 ">

            <h1>Latest From Our Blog</h1> 


        </div>
        <div class="row my-4">
            <!-- @foreach ($list  as $b) -->
                <div class="col-sm-4 my-2">
                    <div class="card " >
                        <p class="m-3"><b>#</b></p>
                        <img class="card-img pl-2 pr-2" src="{{ url('/') }}/images/{{ $b->image }}" alt="Card image cap" width="auto" height="150px">
                        
                        <div class="card-body">
                        <p>#</p>
                        <p class="card-text" style="color: #6b7c93;">#</p>
                        <a href="#" class="m-2"><b>Read more</b></a>
                        </div>
                    </div>
                </div>
            <!-- @endforeach      -->
        </div> 
    </div>

</form>
@endsection