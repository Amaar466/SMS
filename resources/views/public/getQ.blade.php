
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
        <i class="fa fa-times" aria-hidden="true"></i>
      </button>
      </div>
      <div class="row no-gutters">
      <div class="col-md-6 d-flex">
      <div class="modal-body p-5 img d-flex" style="background-image: url({{ url('/') }}/images/modal.jpg);    background-size: cover;">
      </div>
      </div>
      <div class="col-md-6 d-flex">
      <div class="modal-body p-5 d-flex align-items-center">
              <form action="{{url('/insert')}}"  method="POST" id="form1" enctype="multipart/form-data">
                <div class="alert alert-primary sucess d-none">
                  Our Sale Team Contact you soon.
                </div>
                <div class="alert alert-danger error d-none">
                  Plz fill data corretly.
                </div>
                  @csrf            
                  <div class="form-group">
                          <select class="browser-default custom-select custom-select-md" name="q1">
                              <option value="" selected>How early do you need a developer?</option>
                              <option value='{"q": "How early do you need a developer?" , "value": "With in a week"}'>With in a week</option>
                              <option value='{"q": "How early do you need a developer?" , "value": "one week plus"}'>one week plus</option>
                              <option value='{"q": "How early do you need a developer?" , "value": "As early as possible"}'>As early as possible</option>                            
                            </select>
                  </div>
                  <div class="form-group">
                          <select class="browser-default custom-select custom-select-md" name="q2">
                              <option value="">Duration</option>
                              <option value='{"q": "Duration" , "value": "1-3 Months"}'>1-3 Months</option>
                              <option value='{"q": "Duration" , "value": "3-6 Months"}'>3-6 Months</option>
                              <option value='{"q": "Duration" , "value": "6-10"}'>6-10</option>
                              <option value='{"q": "Duration" , "value": "10+ Months"}'>10+ Months</option>                            
                            </select>
                  </div>            
                  <div class="form-group"> 
                      <input type="text" class="form-control" name="name" placeholder="Name">
                  </div>               
                  <div class="form-group">
                      <input type="text"  class="form-control" name="email" placeholder="E-Mail" >
                  </div>
                  <div class="form-group">
                      <input type="int"  class="form-control" name="phone" placeholder="Phone">
                  </div>
                  <div class="form-group">
                      <a class="btn btn-light btn-outline-primary" id="btn1">Send A Resuest</a>
                  </div>
              </form>            
          </div>
          {{-- <div class="modal-footer">
            <button type="button" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div> --}}
        </div>
      </div>
    </div>
  </div>
</div>


{{-- 2nd qutation --}}

<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
      <i class="fa fa-times" aria-hidden="true"></i>
    </button>
    </div>
    <div class="row no-gutters">
    <div class="col-md-6 d-flex">
    <div class="modal-body p-5 img d-flex" style="background-image: url({{ url('/') }}/images/products.jpg);    background-size: cover;">
    </div>
    </div>
    <div class="col-md-6 d-flex">
    <div class="modal-body p-5 d-flex align-items-center">
            <form action="{{url('/insert')}}"   id="form2" method="POST" enctype="multipart/form-data">
              <div class="alert alert-primary sucess d-none">
                Our Sale Team Contact you soon.
              </div>
              <div class="alert alert-danger error d-none">
                Plz fill data corretly.
              </div>
                @csrf            
                <div class="form-group">
                        <select class="browser-default custom-select custom-select-md" name="q1">
                            <option value="" selected>Complete Product Development</option>
                            <option value='{"q": "Complete Product Development" , "value": "Ui/UX Design"}'>Ui/UX Design</option>
                            <option value='{"q": "Complete Product Development" , "value": "Working Prototype"}'>Working Prototype</option>
                            <option value='{"q": "Complete Product Development" , "value": "something Else"}'>something Else</option>                            
                          </select>
                </div>
                <div class="form-group">
                        <select class="browser-default custom-select custom-select-md" name="q2">
                            <option  value="">For which platform?</option>
                            <option  value='{"q": "For which platform?" , "value": "Web"}'>Web</option>
                            <option  value='{"q": "For which platform?" , "value": "Mobile"}'>Mobile</option>
                            <option  value='{"q": "For which platform?" , "value": "Desktop"}'>Desktop</option>
                            <option  value='{"q": "For which platform?" , "value": "All of them"}'>All of them</option>                            
                          </select>
                </div>            
                <div class="form-group"> 
                    <input type="text" class="form-control" name="name" placeholder="Name" >
                </div>               
                <div class="form-group">
                    <input type="text"  class="form-control" name="email" placeholder="E-Mail" >
                </div>
                <div class="form-group">
                    <input type="int"  class="form-control" name="phone" placeholder="Phone" >
                </div>
                <div class="form-group">
                    <a class="btn btn-light btn-outline-primary"  id="btn2">Send A Resuest</a>
                </div>
            </form>            
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div> --}}
      </div>
    </div>
  </div>
</div>
</div>



{{-- 3rd qutation --}}

<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
      <i class="fa fa-times" aria-hidden="true"></i>
    </button>
    </div>
    <div class="row no-gutters">
    <div class="col-md-6 d-flex">
    <div class="modal-body p-5 img d-flex" style="background-image: url({{ url('/') }}/images/developer.jpg);    background-size: cover;">
    </div>
    </div>
    <div class="col-md-6 d-flex">
    <div class="modal-body p-5 d-flex align-items-center">\

          

            <form action="{{url('/insert')}}"  method="POST" enctype="multipart/form-data" id="form3">


              <div class="alert alert-primary sucess d-none">
                Our Sale Team Contact you soon.
              </div>
              <div class="alert alert-danger error d-none">
                Plz fill data corretly.
              </div>
                @csrf            
                <div class="form-group">
                        <select class="browser-default custom-select custom-select-md" name="q1">
                            <option value="" selected>How many developers do you need?</option>
                            <option value='{"q": "How many developers do you need?" , "value": "2-6 Developers"}'>2-6 Developers</option>
                            <option value='{"q": "How many developers do you need?" , "value": "6-10 Developers"}'>6-10 Developers</option>
                            <option value='{"q": "How many developers do you need?" , "value": "10+ Developers"}'>10+ Developers</option>                            
                          </select>
                </div>
                <div class="form-group">
                        <select class="browser-default custom-select custom-select-md" name="q2">
                            <option value="">For how long?</option>
                            <option value='{"q": "For how long?" , "value": "1-3 Months"}'>1-3 Months</option>
                            <option value='{"q": "For how long?" , "value": "3-6 Months"}'>3-6 Months</option>
                            <option value='{"q": "For how long?" , "value": "6-10 Months"}'>6-10 Months</option>
                            <option value='{"q": "For how long?" , "value": "10+ Months"}'>10+ Months</option>                            
                          </select>
                </div>            
                <div class="form-group"> 
                    <input type="text" class="form-control" name="name" placeholder="Name" >
                </div>               
                <div class="form-group">
                    <input type="text"  class="form-control" name="email" placeholder="E-Mail" >
                </div>
                <div class="form-group">
                    <input type="int"  class="form-control" name="phone" placeholder="Phone">
                </div>
                <div class="form-group">
                    <a class="btn btn-light btn-outline-primary"  id="btn3">Send A Resuest</a>
                </div>
            </form>            
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div> --}}
      </div>
    </div>
  </div>
</div>
</div>

<script>  

  $(function () {
  $("#btn1").click(function() {
    sendData(document.getElementById("form1"));
  });

  $("#btn2").click(function() {
    sendData(document.getElementById("form2"));
  });

  $("#btn3").click(function() {
    sendData(document.getElementById("form3"));
  });
  });


  function sendData(form){;
      var fd = new FormData(form);
      $.ajax({
          url: "{{ url('/') }}/get-quotation/insert",
          data: fd,
          cache: false,
          processData: false,
          contentType: false,
          type: 'POST',
          success: function (dataofconfirm) {
            if(!$(".error").hasClass( "d-none"))
              $(".error").addClass('d-none');
            $(".sucess").removeClass('d-none');
            },
          error: function (dataofconfirm) {
              $(".error").removeClass('d-none');
          }
      });

  }

</script>


