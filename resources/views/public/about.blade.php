@extends('public.layout.app')

@section('content')
<div class="text-center carousel-item d-block" style="min-height: 450px;background: url('/images/our-story.jpg')">           
    <div style="background-color: rgba(0,0,0,.7);">
  <h1 class="text-white p-5 " style="padding-top:  15rem!important;padding-bottom:  15rem!important;font-size: 80px;
    font-weight: 400;"><b>About us</b> </h1>
    </div>
</div>
    <!-- About us -->
    <div class="container my-5 text-center ">    
        <div class="my-4">

            <p class="spacing">
                For more than 7 years, we have worked with many companies and helped some of the most prominent organizations build a competitive advantage through website development and digital marketing.
               </p>
                <h2>Having MS Solution is similar to success knocking at your door.</h2>
        </div>

        
    </div>

    <!-- second row img with tax  -->


    <div class="row section-who-we-are">
        <div class="col-md-6 col-12 pr-0">
            <!-- <img src="https://www.folio3.com/wp-content/themes/folio3/page_templates/images/about/who-we-are.jpg" alt=""  width="100%" height="470px"> -->

        </div>
        <div class="col-md-6 col-12  pl-0 shadow">
            <div class=" m-5">
                <h1 >WHO WE ARE ?</h1>
                <h4>Our Purpose</h4>
                <p class="mt-5">MS Solution is an exuberant, highly talented, dynamic, and vigilant company with a team of experts, just 7+ years old but vastly experienced. </p>
                <p class="mt-5">Based in Pakistan, we work from onshore and off-shore offices in the UK, USA, Australia, Canada, Germany, and many more. </p>
                <p class="mt-5">MS Solution exists to meet the latest and unique requirements of the Developing, IT, and social platforms. Whether your company is small or large, we have the perfect solution for you!</p>
                <p class="mt-5">So, explore the world and get your <b>successful business</b>  on your hand.</p>
            </div>
        </div>
    </div>


    <!-- 3rd row   -->

    <div class="container ">

        <div class="row my-5">
            <div class="col-sm-6 mt-5">
                <h1>Why did we start MS Solution?</h1>
                <p class="mt-3">We have started analyzing the demand of the market. And when we got known that we have all our public needs, we began introducing our services. </p>
                <P class="mt-4">Now, after completing 50,000+ projects in the past 7+ years, we have become the solution to our client's problems and needs.</P>
                
            </div>
            <div class="col-sm-6 float-right">
                <img src="images/Untitled-3.png" alt="" width="100%" height="100%">
            </div>
        </div>
        
    </div>


    <!-- what we do -->

    <div class="py-5" style="background-color: rgb(17,23,35);">
        <div class="container">
        

            <div class=" text-light  text-center">
                <h1>WHAT WE DO ?</h1>
                <p class="mt-5">We believe trust and reliability are two factors that come with time, but if a company has these two features, no one can compete with them. </p>
                    <h3 class="m-4">We offer the best website development services, marketing services, digital platforms, development services, mobile app development services, and many more.</h3>
                    <p>Our strength is in the hard-working of our team. Our expert team handles projects with superior efficiency. Every client is different from others and also their expectations. 
                    </p>
                        <h1 class="m-3">We consistently deliver quality work, affordable packages, and a cooperative environment to them.</h1>
                        <img class="mt-5" src="{{ url('/') }}/images/Untitled-4.jpg" alt=""  width="100%" height="400px" >

            </div>
        
        </div>

    </div>
    <!-- OUR STRENGTH -->
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="mt-4 container text-center">
                <h1>Why MS Solution?</h1>
                <h4>THE MOBILE ENTERPRISE</h4>
                <p class="mt-4">Do you know what matters in the way of success? Experience! What if you get a website but can't do a successful business? What if you will not get profit from your company?</p>
                <p class="mt-4">We know how to tackle the market competition. By providing a user-friendly website, quality marketing services, targeting audiences, and offering mobile applications, we provide a noticeable and visible profit to our clients. </p>
                <div class="mt-4">No chance for regret, as MS Solution is the best!</div>
            </div>
        </div>
        <div class="col-12 col-md-6 bg-primary" style="overflow-x: hidden">
            <img src="{{ url('/')}}/images/MockUp3.png" alt=""  class=""  width="100%" height="400px"  >

        </div>
    </div>
    <!-- WHAT DO WE HAVE TO SHOW FOR IT ALL? -->
    <div class="section-folio3">
        <div class="container text-center">
            <div class="py-5 ">     
            <h1>WHAT DO WE HAVE TO SHOW FOR IT ALL?</h1>   
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <h1 style="color:#228DE9;" >500+</h1>
                    <p>
                        Clients (banks, booksellers, software
                        giants, game start-ups) that trust and
                        value us enough to be our best
                        spokespersons.
                    </p>

                </div>
                <div class="col-sm-4">
                    <h1 style="color:#228DE9;" >1K+</h1>
                    <p>
                        Web and mobile solutions
                        made with love, integrity and
                        lots of caffeine.
                    </p>

                </div>
                <div class="col-sm-4">

                    <h1 style="color:#228DE9;" >100+</h1>
                    <p>
                        Employees who understand the dual
                        commitment at MS Solution: Customers
                        first, Employees foreve
                    </p>

                </div>
            </div>
            {{-- <div class="row">
                <div class="col-sm-3">
                    <img src="https://www.folio3.com/wp-content/themes/folio3/page_templates/images/about/logos/true-fruit-logo.png" alt="">
                    <img src="https://www.folio3.com/wp-content/themes/folio3/page_templates/images/about/logos/cerius-logo.png" alt="">
                </div>
                <div class="col-sm-2">
                    <img src="https://www.folio3.com/wp-content/themes/folio3/page_templates/images/about/logos/twin-strata-logo.png" alt="">
                    <img src="https://www.folio3.com/wp-content/themes/folio3/page_templates/images/about/logos/growers-logo.png" alt="">
                </div>
                <div class="col-sm-2">
                    <img src="https://www.folio3.com/wp-content/themes/folio3/page_templates/images/about/logos/zoetis-logo.png" alt="">
                    <img src="https://www.folio3.com/wp-content/themes/folio3/page_templates/images/about/logos/hiplink-logo.png" alt="">
                </div>
                <div class="col-sm-2">
                    <img src="https://www.folio3.com/wp-content/themes/folio3/page_templates/images/about/logos/barnes-logo.png" alt="">
                    <img src="https://www.folio3.com/wp-content/themes/folio3/page_templates/images/about/logos/scb-logo.png" alt="">
                </div>
                <div class="col-sm-3">
                    <img src="https://www.folio3.com/wp-content/themes/folio3/page_templates/images/about/logos/colgate-logo.png" alt="">
                    <img src="https://www.folio3.com/wp-content/themes/folio3/page_templates/images/about/logos/square-trade-logo.png" alt="">
                </div>
            </div> --}}
        </div>
    </div>

    <!-- purple row start -->
    <div  class="py-4" style="background-color: #3F82D8;">
        <div class="container  text-white text-center">
            <div class="row mt-5 ">
                <div class="col-md-12">
                    <h5>If you have any queries regarding our working process or our services, don't hesitate to contact us. </h5>
                
            
                    <a class="btn btn-light  btn-outline-light  mt-5 " style="min-width: 140px;"
                        href="#"> <b> Start Your Project </b>
                    </a>
                </div>
            
            </div>
        </div>
    </div>

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