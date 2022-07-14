@extends('public.layout.app')

@section('content')
<div class="text-center carousel-item d-block" style="min-height: 450px;background: url('/images/our-story.jpg')">
    <div style="background-color: rgba(0,0,0,.7);">
        <h1 class="text-white p-5 " style="padding-top:  15rem!important;padding-bottom:  15rem!important;font-size: 80px;
    font-weight: 400;"><b>Career</b> </h1>
    </div>
</div>
<!-- dropdown starts -->
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3><u>CURRENT VACANCIES</u></h3>
            <p>We currently have following vacancies in our Pakistan offices. <br>
                Feel free to email us your resume/CV at <a href="mailto:hr@mssolution.pk">hr@mssolution.pk</a> </p>
        </div>
        <div class="col-sm-12">
            <div class='faq'>
                <div class="global-label">
                    <div class="global-label-text">
                        <!-- Mrequently asked question -->
                    </div>

                </div>

                @foreach ($list2 as $b)



                <div class="faq-container">
                    <div class="faq-label">
                        <div class="faq-label-text">
                            <h5>{{ $b->title }}</h5>
                        </div>
                        <div class="faq-label-icon">
                            <span class="material-icons">
                                <i class="fa fa-arrow-down" aria-hidden="true"></i>
                            </span>
                        </div>

                    </div>
                    <div class="faq-answer ">
                        <div class="faq-answer-content">
                            <b> Job Role:</b> <br>

                            {!! $b->content !!}

                        </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>
</div>
<!-- dropdown End -->


<div class="container">
    <div class="py-5 text-justify">
        <div class="text-center">
            <h2> <u>Perks and Privileges</u> </h2>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="text-center">
                    <button class="rounded-circle p-3 mb-3 bg-primary text-white"><i class="fa fa-money fa-2x"
                            aria-hidden="true"></i></button> <br>
                    <b class="mt-2">Advance salary</b>
                    <p>Need some money urgently? You can enjoy your salary in advance in the time of need.</p>
                </div>


            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <button class="rounded-circle p-3 mb-3 bg-primary text-white"><i class="fa fa-certificate fa-2x"
                            aria-hidden="true"></i></button> <br>
                    <b>Certifications</b>
                    <p>We appreciate your hard work.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <button class="rounded-circle p-3 mb-3 bg-primary text-white"><i class="fa fa-bed fa-2x"
                            aria-hidden="true"></i></button> <br>

                    <b>Hostel</b>
                    <p>A place for living.</p>
                </div>

            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="text-center">
                    <button class="rounded-circle p-3 mb-3 bg-primary text-white"><i class="fa fa-life-ring fa-2x"
                            aria-hidden="true"></i></button> <br>

                    <b>Marriage Allowance </b>
                    <p>Start your married life with a special allowance from MS Solution.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <button class="rounded-circle p-3 mb-3 bg-primary text-white"><i class="fa fa-calendar fa-2x"
                            aria-hidden="true"></i></button> <br>

                    <b>20 Annual Leaves</b>
                    <p>Enjoy vacations, fulfill personal responsibilities, or just take some rest by availing paid
                        leaves.</p>
                </div>
            </div>
            <div class="col-md-4">

                <div class="text-center">
                    <button class="rounded-circle p-3 mb-3 bg-primary text-white"><i class="fa fa-credit-card fa-2x"
                            aria-hidden="true"></i></button> <br>

                    <b>Personal Loan</b>
                    <p>A loan to fulfill your needs.</p>
                </div>

            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="text-center">
                    <button class="rounded-circle p-3 mb-3 bg-primary text-white"><i class="fa fa-plus fa-2x"
                            aria-hidden="true"></i></button> <br>

                    <b>Annual Increment</b>
                    <p>If you value us and the work you do, we will value the time you gave us!.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <button class="rounded-circle p-3 mb-3 bg-primary text-white"><i class="fa fa-home fa-2x"
                            aria-hidden="true"></i></button> <br>

                    <b>Work From Home</b>
                    <p>We provide flexibility to work from home 3-days a month.</p>
                </div>
            </div>
            <div class="col-md-4">

                <div class="text-center">
                    <button class="rounded-circle p-3 mb-3 bg-primary text-white"><i class="fa fa-plus-circle fa-2x"
                            aria-hidden="true"></i></button> <br>

                    <b>Performance-Based Bonuses</b>
                    <p>We appreciate our hardworking and top-performing employees with bonuses.</p>
                </div>

            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="text-center">
                    <button class="rounded-circle p-3 mb-3 bg-primary text-white"><i class="fa fa-car fa-2x"
                            aria-hidden="true"></i></button> <br>

                    <b>Annual Recreational Trips</b>
                    <p>MS Solutions arranges annual leisure and recreational trips for employees.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <button class="rounded-circle p-3 mb-3 bg-primary text-white"><i class="fa fa-cutlery fa-2x"
                            aria-hidden="true"></i></button> <br>

                    <b>Team And Company-Wide Dinners</b>
                    <p>Connect with other teams, make new friends, and enjoy food with company-sponsored dinners.</p>
                </div>
            </div>          
        </div>
    </div>
</div>

<!-- Latest From Our Blog -->
<div class="container text-center pb-5">
    <div class="my-5 ">
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


<script>
    let faqLabel=document.querySelectorAll(".faq-label");

    faqLabel.forEach(item=>item.onclick=()=>{
    //selektuje Answer
        item.nextElementSibling.classList.toggle('active');
    
    
            let labelIcon=item.lastElementChild;
            let icons=labelIcon.lastElementChild;
            icons.classList.toggle('rotate');
    })
</script>

@endsection