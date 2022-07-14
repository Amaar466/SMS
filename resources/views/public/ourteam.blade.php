@extends('public.layout.app')

@section('content')

<div class="text-center carousel-item d-block" style="min-height: 450px;background: url('images/our-team.jpg')">
  <div style="background-color: rgba(0,0,0,.7);">
    <h1 class="text-white p-5 " style="padding-top:  15rem!important;padding-bottom:  15rem!important;font-size: 80px;
      font-weight: 400;"><b>Meet Our Team</b>
       </h1>
  </div>
</div>

<div class="p-4">
    <div class="text-center">
        <p> <h5 style="color:#64709F;"> Here you will find people who are the reason behind our success and <br> who have transformed countless ideas into realities </h5></p>
    </div>
</div>

<div class="container my-5">
  <div class="row">
  <div class="col-md-12 col-12">
    <div class="tabbable-panel">
      <div class="tabbable-line nav-center">
        <ul class="nav nav-tabs nav-pills  ">
          <li>
            <a href="#tab_default_1" class="p-3 active" data-toggle="tab">
              Tech & Developers </a>
          </li>
          <li>
            <a href="#tab_default_2" class="p-3" data-toggle="tab">
              Sales & Marketing </a>
          </li>
          <li   >
            <a href="#tab_default_3" class="p-3 " data-toggle="tab">
              Product & Design	 </a>
          </li>
        </ul>
        <div class="tab-content pt-3">
          <div class="tab-pane active" id="tab_default_1">
            <p class="m-4">
              <h4 class="text-primary">Tech & Developers</h4>
            </p>
            <p style="color: #7A7A7A">
              These folks make the designs come to real life they’re real tech-savvy and <br> always looking for the best possible solutions
            </p>
            <div class="row mt-4">
              <div class="col-md-4  my-2">
                <img src="{{ url('/') }}/images/arsalan.png" alt=""  style="width: 100%;">
                <h3 class="m-2 text-primary ">Arslan Anjum</h3>
                <small>Laravel Developer</small>
                <h4 class="m-1" >GCUF</h4>
              </div>
              <div class="col-md-4 my-2">
                <img  src="{{ url('/') }}/images/hamza.png" alt="" style="width: 100%;">
                <h3 class="m-2 text-primary "> Hamza sarwar</h3>
                <small>Laravel Developer</small>
                <h4 class="m-1" >GCUF</h4>
              </div>
              <div class="col-md-4">
                <img src="{{ url('/') }}/images/ajmal.png" alt=""  style="width: 100%;">
                <h3 class="m-2 text-primary ">Muhammad Ajmal</h3>
                <small>Laravel Developer</small>
                <h4 class="m-1" >University of Gujrat </h4>
              </div>
            </div>
             
            <div class="row mt-4">
              
             
              <div class="col-md-4  my-2">
                <img src="{{ url('/') }}/images/ahsan.png" alt=""  style="width: 100%;">
                <h3 class="m-2 text-primary ">Ahsan Nawaz</h3>
                <small>WordPress Developer</small>
                <h4 class="m-1" >Fast University </h4>
              </div>
            </div>
            <div class="row mt-4  my-2">
             

            </div>
            
          </div>
          <div class="tab-pane" id="tab_default_2">
            <p class="m-4">
              <h4 class="text-primary">Sales & Marketing</h4>
            </p>
            <p style="color: #7A7A7A">
              These folks make the designs come to real life they’re real tech-savvy and <br> always looking for the best possible solutions
            </p>
            <div class="row mt-4">

              <div class="col-md-4 my-2">
                <img src="{{ url('/') }}/images/wajid.png" alt=""  style="width: 100%;">
                <h3 class="m-2 text-primary ">Wajid Ali</h3>
                <small>Marketing Manager</small>
                <h4 class="m-1" >PUCIT</h4>
              </div>
              <div class="col-md-4  my-2">
                <img src="{{ url('/') }}/images/azeem.png" alt=""  style="width: 100%;">
                <h3 class="m-2 text-primary ">Muhammad Azeem</h3>
                <small>SEO Off Page Expert</small>
                <h4 class="m-1" >PU</h4>
              </div>
              <div class="col-md-4  my-2">
                <img src="{{ url('/') }}/images/wasif.png" alt=""  style="width: 100%;">
                <h3 class="m-2 text-primary ">Wasif Khan</h3>
                <small>SEO Off Page Exp ert</small>
                <h4 class="m-1" >UMT</h4>
              </div>            
              <div class="col-md-4  my-2 text-center">
                <img src="{{ url('/') }}/images/maryam.png" alt=""  style="width: 100%;">
                <h3 class="m-2 text-primary ">Maryam Ishfaq</h3>
                <small>Bussiness Development</small>
                <h4 class="m-1" >UMT</h4>
              </div>
              <div class="col-md-4  my-2">
                <img src="{{ url('/') }}/images/ardil.png" alt=""  style="width: 100%;">
                <h3 class="m-2 text-primary ">Ardil Bin Mansoor</h3>
                <small>Bussiness Development</small>
                <h4 class="m-1" >Lahore Garrison University</h4>
              </div>
              <div class="col-md-4  my-2">
                <img src="{{ url('/') }}/images/ansab.png" alt=""  style="width: 100%;">
                <h3 class="m-2 text-primary ">Ansab Imam</h3>
                <small>Bussiness Development</small>
                <h4 class="m-1" >PTUT</h4>
              </div>
              <div class="col-md-4  my-2">
                <img src="{{ url('/') }}/images/noman.png" alt=""  style="width: 100%;">
                <h3 class="m-2 text-primary ">Nouman Ali</h3>
                <small>Bussiness Development</small>
                <h4 class="m-1" >VU</h4>
              </div>
              <div class="col-md-4  my-2">
                <img src="{{ url('/') }}/images/waseem.png" alt=""  style=" width:100%;">
                <h3 class="m-2 text-primary ">Muhammad Waseem</h3>
                <small>Customer Services ( Manager ) </small>
                <h4 class="m-1" >PU</h4>
              </div>
              <div class="col-md-4  my-2">
                <img src="{{ url('/') }}/images/mugheera.png" alt=""  style=" width:100%;">
                <h3 class="m-2 text-primary ">Mugheera sarwar</h3>
                <small>Customer Services</small>
                <h4 class="m-1" >PU</h4>
              </div>
            </div>
            {{-- <div class="row">

              <div class="col-md-4 text-center">
                <img src="https://tse2.mm.bing.net/th?id=OIP.1yUeaSzLvNrTqKnTr-r44QHaFP&pid=Api&P=0&w=248&h=175" alt=""  style="height:200px; width:100%;">
                <h3 class="m-3 text-primary "></h3>
                <h4 class="m-3" >GCUF</h4>
              </div>
              <div class="col-md-4">
                <img src="https://tse2.mm.bing.net/th?id=OIP.1yUeaSzLvNrTqKnTr-r44QHaFP&pid=Api&P=0&w=248&h=175" alt=""  style="height:200px; width:100%;">
                <h3 class="m-3 text-primary "></h3>
                <h4 class="m-3" >GCUF</h4>
              </div>
              <div class="col-md-4">
                <img src="https://tse2.mm.bing.net/th?id=OIP.1yUeaSzLvNrTqKnTr-r44QHaFP&pid=Api&P=0&w=248&h=175" alt=""  style="height:200px; width:100%;">
                <h3 class="m-3 text-primary "></h3>
                <h4 class="m-3" >GCUF</h4>
              </div>
             
            
            </div> --}}
          </div>
          <div class="tab-pane" id="tab_default_3">
            <p class="m-4">
              <h4 class="text-primary">Product & Design</h4>
            </p>
            <p style="color: #7A7A7A">
              These folks make the designs come to real life they’re real tech-savvy and <br> always looking for the best possible solutions
            </p>
            <div class="row">
              
              <div class="col-md-4 text-center">
                <img src="{{ url('/') }}/images/asar.png" alt=""  style="width: 100%;">
                <h3 class="m-2 text-primary ">Asar Rehman</h3>
                <small>Graphic Designer</small>
                <h4 class="m-1" >Numal University</h4>
              </div>
              <div class="col-md-4 text-center">
                <img src="{{ url('/') }}/images/hr.png" alt=""  style="width: 100%;">
                <h3 class="m-2 text-primary ">Anam Salamat</h3>
                <small>HR</small>
                <h4 class="m-1" >University of Punjab</h4>
              </div>
              
              <div class="col-md-4">
                <img src="{{ url('/') }}/images/emaan.png" alt=""  style="width: 100%;">
                <h3 class="m-2 text-primary ">Emaan Chaudhary</h3>
                <small>Content Writer</small>
                <h4 class="m-1" >Virtual University</h4>
              </div>
            </div>
            <div class="row mt-4">

              <div class="col-md-4">
                <img src="{{ url('/') }}/images/saba.png" alt=""  style="width: 100%;">
                <h3 class="m-2 text-primary ">Saba Shahzad</h3>
                <small>Content Writer</small>
                <h4 class="m-1" >FJMC</h4>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection

