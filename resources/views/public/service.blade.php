@extends('public.layout.app')

@section('content')
<div class="text-center carousel-item d-block" style="min-height: 450px;background: url('images/services.jpg')">
<div style="background-color: rgba(0,0,0,.7);">
  <h1 class="text-white p-5 " style="padding-top:  15rem!important;padding-bottom:  15rem!important;font-size: 80px;
    font-weight: 400;"><b>Our Services</b> </h1>
    </div>
</div>
    <!-- OUR SERVICES -->
    <div class="container text-center mt-5">
        <h4>Ideal Solutions With Full-Cycle Software Development Services</h4>
        <div class="py-5 text-justify">
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="text-center">
                    <button class="rounded-circle p-3 mb-3 bg-primary text-white"><i class="fa fa-android fa-2x" aria-hidden="true"></i></button> <br>
                     <b class="mt-2">App development</b>
                     </div>
                    
                    <p>We offer the creation of computer applications for use on mobile devices such as tablets, smart phones and smart watches. Mobile applications are designed and built for different operating systems..</p>
                        <a href="https://mssolution.pk/blog/mobile-app-development-company-uq10mYFdq2" class="m-2"><b>Read more</b></a>

                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <button class="rounded-circle p-3 mb-3 bg-primary text-white"><i class="fa fa-edge fa-2x" aria-hidden="true"></i></button> <br>
                    <b>Web Development</b>
                     </div>
                     <p>We offer the work involved in developing a website for the Internet or an intranet. Web development can range from developing a simple single static page of plain text to complex web applications, electronic businesses, and social network services.</p>
                      <a href="https://mssolution.pk/blog/website-designing-XP58QWMchw" class="m-2"><b>Read more</b></a>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <button class="rounded-circle p-3 mb-3 bg-primary text-white"><i class="fa fa-desktop fa-2x" aria-hidden="true"></i></button> <br>

                    <b>Desktop Development</b>
                     </div>
                     <p>We create software applications that perform on computers. We write code for software applications that (1) run natively on operating systems like macOS, Windows, and Linux, and (2) don't need to be connected to the internet.</p>
                      <a href="https://mssolution.pk/service/desktop-development-lgawRSpi9r" class="m-2"><b>Read more</b></a>

                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="text-center">
                        <button class="rounded-circle p-3 mb-3 bg-primary text-white"><i class="fa fa-link fa-2x" aria-hidden="true"></i></button> <br>

                    <b>Block chain </b>
                     </div>
                     <p>We by using block chain increase trust, security, transparency, and the traceability of data shared across a business network — and deliver cost savings with new efficiencies.</p>
                      <a href="{{ url('/') }}/service/digital-marketing-services-DH0EN65NdX" class="m-2"><b>Read more</b></a>
                </div>
                <div class="col-md-4">              
                    <div class="text-center">
                        <button class="rounded-circle p-3 mb-3 bg-primary text-white"><i class="fa fa-handshake-o fa-2x" aria-hidden="true"></i></button> <br>

                    <b>Digital marketing</b>
                     </div>
                     <p>We by digital marketing, also called online marketing, promote  brands to connect with potential customers using the internet and other forms of digital communication including email, social media, and web-based advertising. Besides that text and multimedia messages are also used as a marketing channel.</p>
                      <a href="https://mssolution.pk/service/digital-marketing-services-WrNtppXrMV" class="m-2"><b>Read more</b></a>
                </div>
                <div class="col-md-4">

                    <div class="text-center">
                        <button class="rounded-circle p-3 mb-3 bg-primary text-white"><i class="fa fa-code fa-2x" aria-hidden="true"></i></button> <br>

                    <b>Artificial intelligence</b>
                     </div>
                     <p>Artificial intelligence (AI) is the ability of a computer or a robot controlled by a computer to do tasks that are usually done by humans because they require human intelligence and discernment. We have a high expertise in this field.</p>
                      <a href="{{ url('/') }}/service/digital-marketing-services-DH0EN65NdX" class="m-2"><b>Read more</b></a>

                </div>
            </div>
        </div>
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