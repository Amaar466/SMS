@extends('public.layout.app')

@section('content')
<div class="text-center carousel-item d-block" style="min-height: 450px;background: url('images/contact-us.jpg')">
    <div style="background-color: rgba(0,0,0,.7);">
        <h1 class="text-white p-5 " style="padding-top:  15rem!important;padding-bottom:  15rem!important;font-size: 80px;
    font-weight: 400;"><b>Contact us</b> </h1>
    </div>
</div>
<!-- contact us foam -->
<section class="contact-page-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-info">
                    <div class="contact-info-item" style="width: auto; height: 250px;">
                        <div class="contact-info-icon">
                            <i class="fas fa-map-marked"></i>
                        </div>
                        <div class="contact-info-text">
                            <h2>address</h2>
                            <span> MS solution 2nd floor chudhary center near yateem khana , Lahore </span>
                            <span>Lahore , Pakistan</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info">
                    <div class="contact-info-item" style="width: auto; height: 250px;">
                        <div class="contact-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-info-text">
                            <h2>E-mail</h2>
                            <span>admin@mssolution.pk</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info">
                    <div class="contact-info-item" style="width: auto; height: 250px;">
                        <div class="contact-info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-info-text">
                            <h2>office time</h2>
                            <span>Mon - Fri 10:00 am - 7.00 pm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="contact-page-form" method="post">
                    <h2>Get in Touch</h2>

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{url('/contact')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-input-field">
                                    <input type="text" placeholder="Your Name" name="name" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-input-field">
                                    <input type="email" placeholder="E-mail" name="email" required />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-input-field">
                                    <input type="text" placeholder="Phone Number" name="phone" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-input-field">
                                    <input type="text" placeholder="Subject" name="subject" />
                                </div>
                            </div>
                            <div class="col-md-12 message-input">
                                <div class="single-input-field">
                                    <textarea placeholder="Write Your Message" name="message"></textarea>
                                </div>
                            </div>
                            <div class="single-input-fieldsbtn">
                                <input type="submit" value="Send Now" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-page-map">
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109741.02912911311!2d76.69348873658222!3d30.73506264436677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed0be66ec96b%3A0xa5ff67f9527319fe!2sChandigarh!5e0!3m2!1sen!2sin!4v1553497921355" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                    <div class="mapouter container ">
                        <div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no"
                                marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=mssolution chudhary center yateem khana choke&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                                href="https://www.fridaynightfunkin.net/friday-night-funkin-mods-fnf-play-online/"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact us foam end -->

<div class="container text-center py-5">
    <div class="my-3 ">

        <h1>Latest From Our Blog</h1>

    </div>
    <div class="row my-4">
        @foreach ($list as $b)
        <div class="col-sm-4 my-2">
            <div class="card ">
                <p class="m-3"><b>{{ \Illuminate\Support\Str::limit($b->title, 35, $end='') }}</b></p>
                <img class="card-img pl-2 pr-2" src="{{ url('/') }}/images/{{ $b->image }}" alt="Card image cap"
                    width="auto" height="150px">

                <div class="card-body">
                    <p>{{$b->created_at}}</p>
                    <p class="card-text" style="color: #6b7c93;">{{
                        \Illuminate\Support\Str::limit(strip_tags($b->content), 140, $end='...') }}</p>
                    <a href="{{ url('/') }}/blog/{{$b->slug}}" class="m-2"><b>Read more</b></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection