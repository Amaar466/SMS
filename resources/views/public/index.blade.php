@extends('public.layout.app')

@section('title', 'Home')

@section('content')


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  
    <div class="carousel-inner ">
        <div class="carousel-item active" style="background-image:url('{{url('/')}}/images/web-design- (1).jpg')">
                      <div class="carousel-caption d-none d-block">
                <h5>Web design and development services </h5>
                <p>Boost your business with MS Solution. We offer the best website development services to our clients.</p>
                <a href="https://calendly.com/mssolution/get-quotation" class="btn btn-light">Schedule a Call</a>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('{{url('/')}}/images/web-development.jpg')">
        
            <div class="carousel-caption d-none d-block">
                <h5>Web development services </h5>
                <p>We build your website and rank your website on Google first page. </p>
                <a href="https://calendly.com/mssolution/get-quotation" class="btn btn-light">Schedule a Call</a>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('{{url('/')}}/images/our-story.jpg')">
           
            <div class="carousel-caption d-none d-block">
                <h5>Our story</h5>
                <p>MS Solution is a brave digital website Development Company for you. We design, 
                    develop, test, improve, and market your business. We rule the development world 
                    by having 7+ years of experience in this field.</p>
                <a href="https://calendly.com/mssolution/get-quotation" class="btn btn-light">Schedule a Call</a>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

      <!-- first row -->
      <div class="container my-5 text-center" data-aos="fade-right">    
        {{-- animate__animated animate__flash --}}

        <h4 class="px-2" style="font-weight: 700;"><u>Website development with some perks</u></h4>
        <div class="my-4 text-justify">
            <p class="mt-2">We aim to market, boost, and grow the online presence of your business/services.We are a professional custom website development and design company. Our creative website development helps people to publicize their business.
                There are more than 50+ types of websites that we have developed. At this point, all business pioneers & merchants demand website designs & development services that we offer!</p>
        </div>
        <div class="row">
            <div class="col-sm-4 my-2">
                <b>Web development</b> <br>
                <a class="btn btn-light  btn-outline-primary my-3" href="#" style="min-width: 140px;">Click Here</a>
            </div>
            <div class="col-sm-4 my-2">
                <b>Mobile App development </b>  <br>
                <a class="btn btn-light  btn-outline-primary my-3" href="#" style="min-width: 140px;">Click Here</a>
            </div>
            <div class="col-sm-4 my-2">
                <b>Digital Marketing </b>  <br>
                <a class="btn btn-light  btn-outline-primary my-3" href="#" style="min-width: 140px;">Click Here</a>
            </div>
        </div>    
    </div>

    <!-- second row -->
    <div style="background-color: #F2F4F7; " >
        <div class="container py-5 text-center" data-aos="fade-left">            
            <div class="my-4">
                <h4>HOW WE WORK</h4>
                <p>WE BRING THE LEAN STARTUP APPROACH TO INNOVATION IN COMPANIES OF ALL SIZES</p> 
                <img src="{{ url('')}}/images/work.png"
                alt="space for image" width="90%;height:auto">
                <div class="my-2">
                <a class="btn btn-light  btn-outline-primary my-3" href="#" style="min-width: 140px;">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- third row -->
    <div  style="background-color: #3F82D8;"  data-aos="fade-right">
        <div class="container py-5 text-white">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h5>We help you to achieve your goals & to grow your business by using AI Solutions!</h5>
                </div>
                <div class="col-md-5 text-right">
                    <a class="btn btn-light  btn-outline-light " style="height: 40px; width: 150px;  border-radius: 16px "
                        href="#"> <b> Learn more</b></a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- fourth Row  slider-->

    <div class="Modern-Slider">
        <!-- Item -->
        <div class="item">
          <div class="img-fill">
            <img src=" https://images.pexels.com/photos/302769/pexels-photo-302769.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
            <div class="info">
              <div>
                <h3>Our website Development Lifecycle</h3>
                <h5>We gain information & requirement from our clients, to proceed according to our customer satisfaction.<br></h5>
              </div>
            </div>
          </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item">
          <div class="img-fill">
            <img src="https://images.pexels.com/photos/7679589/pexels-photo-7679589.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
            <div class="info">
              <div>
                <h3>We convert your visitors to customers – SEO Company.</h3>
                <h5>Introduce your business in the form of the best website. MS Solution provides the best web development services.</h5>
              </div>
            </div>
          </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item">
          <div class="img-fill">
            <img src="https://images.pexels.com/photos/2041627/pexels-photo-2041627.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
            <div class="info">
              <div>
                <h3>Make your business rank no. 1 on Google from <br> MS Solution – Digital marketing company.</h3>
                <h5 class="text-align-center">Digital marketing services are the need of every online business. We at MS Solution have expert developers.</h5>
              </div>
            </div>
          </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item">
          <div class="img-fill">
            <img src="https://images.pexels.com/photos/3184357/pexels-photo-3184357.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
            <div class="info">
              <div>
                <h3>Mobile app development services</h3>
                <h5>We offer mobile app development services to enhance and vast your business.
                    Come and get the best mobile app development services!</h5>
              </div>
            </div>
          </div>
        </div>
        <!-- // Item -->
    </div>

    <div style="background-color: #F2F4F7;" data-aos="fade-left">
        <div class="container py-5 text-center ">            
            <div class="my-4">
                <h4>WHAT OUR CLIENTS SAY</h4>
                <p>This company has given me amazing website development and design work done. Due to this, I can generate my brand name in the market. I thank MS Solution team that is very cooperative, and congratulate them on completing their biggest leading project with me. The very comfortable and respectful environment I have experienced there
    
                </p> 
                <p>
                    Professionalism and affordability are all that we want from a marketing team. After finalizing some companies for our business development, we found MS Solution one of the best among them. I am curious to know about the SEO and marketing services they use to make my business double within 4 months. Well, highly thankful to you for this support.
                </p>
               
            </div>
        </div>
    </div>

    <!-- second bg primary -->
    <div  style="background-color: #3F82D8;"  data-aos="fade-right">
        <div class="container py-5 text-white">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h5>We will help you in developing, marketing, and boosting your business with its digital presence. </h5>
                </div>
                <div class="col-md-5 text-right">
                    <a class="btn btn-light  btn-outline-light " style="min-width: 140px; border-radius: 16px;"
                        href="#generic_price_table"> <b> Start Your Project </b></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Price us -->

    <div  data-aos="fade-left">
            <div class="my-4">
                <div id="generic_price_table">
                    <section style="padding: 0;min-height: unset;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <!--PRICE HEADING START-->
                                    <div class="price-heading clearfix">
                                        <h1>Our Pricing</h1>
                                    </div>
                                    <!--//PRICE HEADING END-->
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <!--BLOCK ROW START-->
                            <div class="row">
                                <div class="col-md-4">
                                    <!--PRICE CONTENT START-->
                                    <div class="generic_content clearfix border border-gray">
                                        <!--HEAD PRICE DETAIL START-->
                                        <div class="generic_head_price clearfix">
                                            <!--HEAD CONTENT START-->
                                            <div class="generic_head_content clearfix">
                                                <!--HEAD START-->
                                                <div class="head_bg"></div>
                                                <div class="head">
                                                    <span>Staff/Resource Augmentation</span>
                                                </div>
                                                <!--//HEAD END-->
                                            </div>
                                            <!--//HEAD CONTENT END-->
                                            <!--PRICE START-->
                                            {{-- <div class="generic_price_tag clearfix">	
                                                <span class="price">
                                                <span class="sign"></span>
                                                <span class="currency"></span>
                                                <span class="cent">Hire top talent at a fraction of the cost</span>
                                                <span class="month"></span>
                                                </span>
                                            </div> --}}
                                            <!--//PRICE END-->
                                        </div>
                                        <!--//HEAD PRICE DETAIL END-->
                                        <!--FEATURE LIST START-->
                                        <div class="generic_feature_list">
                                            <h6>Staff/Resource Augmentation</h6>
                                            <ul>
                                                <li>Vetted developer profiles in 48 hours</li>
                                                <li>
                                                    Staffing within 1-2 weeks
                                                    </li>
                                                <li>Availability of developers in every tech stack

                                                </li>
                                                <li>No hiring and retention stress

                                                </li>
                                                <li>Management and payroll freedom

                                                </li>
                                            </ul>
                                        </div>
                                        <!--//FEATURE LIST END-->
                                        <!--BUTTON START-->
                                        <div class="generic_price_btn clearfix">
                                            <a class="" href="#"  data-toggle="modal" data-target="#exampleModalCenter">Get Qutation</a>
                                        </div>
                                        <!--//BUTTON END-->
                                    </div>
                                    <!--//PRICE CONTENT END-->
                                </div>
                                <div class="col-md-4">
                                    <!--PRICE CONTENT START-->
                                    <div class="generic_content  clearfix active">
                                        <!--HEAD PRICE DETAIL START-->
                                        <div class="generic_head_price clearfix">
                                            <!--HEAD CONTENT START-->
                                            <div class="generic_head_content clearfix">
                                                <!--HEAD START-->
                                                <div class="head_bg"></div>
                                                <div class="head ">
                                                    <span>Product <br/> Development</span>
                                                </div>
                                                <!--//HEAD END-->
                                            </div>
                                            <!--//HEAD CONTENT END-->
                                            <!--PRICE START-->
                                            {{-- <div class="generic_price_tag clearfix">	
                                                <span class="price">
                                                <span class="sign">$</span>
                                                <span class="currency">199</span>
                                                <span class="cent">.99</span>
                                                <span class="month">/MON</span>
                                                </span>
                                            </div> --}}
                                            <!--//PRICE END-->
                                        </div>
                                        <!--//HEAD PRICE DETAIL END-->
                                        <!--FEATURE LIST START-->
                                        <div class="generic_feature_list">
                                            <h6>Product Development</h6>
                                            <ul>
                                                <li>
                                                    Free Cost estimation</li>
                                                <li>Expert UI/UX design</li>
                                                <li>Prototype and wireframing</li>
                                                <li>Premium code quality</li>
                                                <li>Free dedicated project management</li>
                                                <li>
                                                    Free dedicated quality assurance</li>
                                                <li>
                                                    Timely deliveryt</li>
                                                    <li>
                                                        Weekly sprints</li>
                                            </ul>
                                        </div>
                                        <!--//FEATURE LIST END-->
                                        <!--BUTTON START-->
                                        <div class="generic_price_btn clearfix">
                                            <a class="" href="#" data-toggle="modal" data-target="#exampleModalCenter2" >Get Qutation</a>
                                        </div>
                                        <!--//BUTTON END-->
                                    </div>
                                    <!--//PRICE CONTENT END-->
                                </div>
                                <div class="col-md-4">
                                    <!--PRICE CONTENT START-->
                                    <div class="generic_content clearfix border border-gray">
                                        <!--HEAD PRICE DETAIL START-->
                                        <div class="generic_head_price clearfix">
                                            <!--HEAD CONTENT START-->
                                            <div class="generic_head_content clearfix">
                                                <!--HEAD START-->
                                                <div class="head_bg"></div>
                                                <div class="head">
                                                    <span>Dedicated <br />  Team</span>
                                                </div>
                                                <!--//HEAD END-->
                                            </div>
                                            <!--//HEAD CONTENT END-->
                                            <!--PRICE START-->
                                            {{-- <div class="generic_price_tag clearfix">	
                                                <span class="price">
                                                <span class="sign">$</span>
                                                <span class="currency">299</span>
                                                <span class="cent">.99</span>
                                                <span class="month">/MON</span>
                                                </span>
                                            </div> --}}
                                            <!--//PRICE END-->
                                        </div>
                                        <!--//HEAD PRICE DETAIL END-->
                                        <!--FEATURE LIST START-->
                                        <div class="generic_feature_list">
                                            <h6>Dedicated Team</h6>
                                            <ul>
                                                <li>Transparent pricing system</li>
                                                <li>Personal extended team exclusively working on your project</li>
                                                <li>Access to a wide range of IT experts from multiple domains

                                                </li>
                                                <li>Project manager allocated by MS Solution

                                                </li>
                                                <li>Team flexibility and scalability

                                                </li>
                                                <li>Direct communication with developers

                                                </li>
                                                <li>Extend and reduce team according to your requirements

                                                </li>
                                            </ul>
                                        </div>
                                        <!--//FEATURE LIST END-->
                                        <!--BUTTON START-->
                                        <div class="generic_price_btn clearfix">
                                            <a class="" href="#" data-toggle="modal" data-target="#exampleModalCenter3">Get Qutation</a>
                                        </div>
                                        <!--//BUTTON END-->
                                    </div>
                                    <!--//PRICE CONTENT END-->
                                </div>
                            </div>
                            <!--//BLOCK ROW END-->
                        </div>
                    </section>
                </div>
            </div>
    </div>

    <!-- About us -->

    <div style="background-color: #F2F4F7;"  data-aos="fade-right">
        <div class="container py-5 text-center ">            
            <div class="my-4">
                <h4>About US</h4>
                <p>MS Solution is a professional Website Development Company with experience of 7+ years in the developing industry.</p> 
                    {{-- <p>Above all, we are people who have been  <b>in your shoes.</b></p> --}}
            </div>
        </div>
    </div>

   
    <!-- contact us -->7
    <div class="py-5 "  data-aos="fade-left" style="background-color: #FFFFFF">

        <div class="container my-5 text-center ">    
            <div class=" row my-4">
                <div class="col-sm-4 my-2">
                    <img src="https://www.folio3.com/wp-content/themes/folio3/page_templates/images/call-icon.png" alt="" width="50px" height="60">
                    <p class="text-primary m-2">Call</p>
                    <p> <b class="text-primary">PK</b> +92-42-37-481-119 </p>
                </div>
                <div class="col-sm-4 my-2">
                    <img src="https://www.folio3.com/wp-content/themes/folio3/page_templates/images/email-icon.png" alt="" width="50px" height="60">
                    <p class="text-primary m-2 ">Email</p>
                    <p> admin@mssolution.pk </p>
                </div>
                <div class="col-sm-4 my-2">
                    <img src="https://www.folio3.com/wp-content/themes/folio3/page_templates/images/visit-icon.png" alt="" width="50px" height="60">
                    <p class="text-primary m-2">Visit</p>
                    <p> 1301 Yateem khana, chudhary center, second floor ,MS solution software house, Lahore </p>
                </div>
            </div>
            <div class="my-5">

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
    </div>

    @include("public.getQ")

@endsection