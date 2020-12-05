@extends('layouts.master')

@section('content')
    


<!-- Page Content-->
    <div class="container corporate-order mb-2 mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="wizard pb-3 pt-4">

                    @if (session()->has('message'))
                        <div class="alert alert-info col-md-6 col-sm-4 text-center" role="alert" style="padding:15px; margin:0 auto;">
                           <strong> {{ session('message') }} </strong>
                        </div>                        
                    @endif

                    <div class="corporate-order-inner text-center pt-3 pb-3">
                        <h2 class="text-capitalize h4 block-title">Get your customized and Bulk orders from Boibhandar</h2>
                        <p>If you are the owner or representative of any institution like School, College, University,
                            Library, Bank, Insurance, Corporate Office, Business Farm, Hospital, Restaurant, Defence etc.,
                            you can contact with our corporate sales team to get the best price and service of BOIBHANDAR
                        </p>
                    </div>
                    <hr>
                    <h4 class="h5 text-center pb-2 pt-4">Corporate Sales: <i class="fe-icon-phone text-muted"></i>
                        <a class="navi-link ml-1" href="tel:+8801307883288">+880 1307 88 32 88</a>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="container corporate-order mb-2 mt-4">
      <div class="row">
      <div class="col-md-12">
        <div class="wizard p-4">
          <h2 class="text-capitalize h4 block-title text-center">Why Us?</h2>
          <div class="row pt-4">

            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="icon-box text-center">
                <div class="icon-box-icon">
                  <i class="fe-icon-book"></i>
                </div>
                <h3 class="icon-box-title">Huge Collection</h3>
                <p class="icon-box-text">Definitely Boibhandar has a vast collection of books and magazines. We can ensure that our collection of books will fulfill your any type of reading thirst. So, don't get late to arrange your bookshelf with the huge collection of our books.</p>
              </div>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="icon-box text-center">
                <div class="icon-box-icon">
                  <i class="fe-icon-percent"></i>
                </div>
                <h3 class="icon-box-title">Handsome Discount</h3>
                <p class="icon-box-text">Reading thirst should fit in your budget and Boibhandar offers discounts by considering it. For corporate orders, we discount more than the ordinary clients. You may try getting a quote for your desired books.</p>
              </div>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="icon-box text-center">
                <div class="icon-box-icon">
                  <i class="fe-icon-truck"></i>
                </div>
                <h3 class="icon-box-title">At Your Doorstep</h3>
                <p class="icon-box-text">Boibhandar team will reach to you with your orders without any hassle. Such delivery will save both of your time and money. So, sit back and order from boibhandar now.</p>
              </div>
            </div>


        </div>
      </div>
      </div>
    </div>
    </div>

    

    
    <!-- Contact Form-->
    <section class="container mt-4 pb-3">
        <div class="wizard">
            <div class="wizard-body pt-3">
                <h2 class="h4 text-center block-title text-capitalize">Get a quote</h2>
                <p class="text-muted text-center">We will get back to you as soon as possible</p>
                <form class="needs-validation" method="POST" action="{{ route('corporates.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row pt-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="quote-name">Your Name <span
                                        class='text-danger font-weight-medium'>*</span></label>
                                <input value="{{ old('c_name') }}"  class="form-control {{ $errors->has('c_name') ? ' is-invalid' : '' }}"  type="text" id="quote-name" max="30" min="3" name="c_name" required>
                                @if ($errors->has('c_name'))
                                    <div class="invalid-feedback">{{ $errors->first('c_name') }}</div>

                                @endif


                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="quote-email">Your Email <span
                                        class='text-danger font-weight-medium'>*</span></label>
                                <input value="{{ old('email') }}"  class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"  type="email" id="quote-email" name="email" required>
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>

                                @endif


                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="quote-organization">Organization Name <span
                                        class='text-danger font-weight-medium'>*</span></label>
                                <input value="{{ old('org_name') }}"  class="form-control {{ $errors->has('org_name') ? ' is-invalid' : '' }}"  type="text" id="quote-organization" max="60" min="3" name="org_name" required>
                                @if ($errors->has('org_name'))
                                        <div class="invalid-feedback">{{ $errors->first('org_name') }}</div>

                                @endif

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="quote-address">Organization Address <span
                                        class='text-danger font-weight-medium'>*</span></label>
                                
                                <input value="{{ old('org_address') }}"  class="form-control {{ $errors->has('org_address') ? ' is-invalid' : '' }}"  type="text" id="quote-address" max="60" min="10" name="org_address" required>

                                @if ($errors->has('org_address'))
                                    <div class="invalid-feedback">{{ $errors->first('org_address') }}</div>

                                @endif

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="quote-phone">Your Phone<span
                                        class='text-danger font-weight-medium'>*</span></label>
                                <input value="{{ old('phone') }}"  class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}"  type="text" id="quote-phone"  name="phone" required>
                                
                                @if ($errors->has('phone'))
                                        <div class="invalid-feedback">{{ $errors->first('phone') }}</div>

                                @endif

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="quote-file">Attachment (optional)</label>
                                <div class="custom-file">

                                    <input class="custom-file-input {{ $errors->has('c_name') ? ' is-invalid' : '' }}"  type="file" accept=".doc,.docx,.xls,.xlsx" id="quote-file" name="c_file" onchange="readURL(this)">

                                    @if($errors->has('c_file'))
                                            <div class="invalid-feedback">{{ $errors->first('c_file') }}</div>

                                    @endif

                                    <label class="custom-file-label" id="file-label-to-change" for="quote-file">Choose file...</label>

                                    
                                </div>
                            </div>
                        </div>
                    
                    </div>

                    <div class="form-group">
                        <label for="quote-message">Message <span class='text-danger font-weight-medium'>*</span></label>

                        <textarea class="form-control {{ $errors->has('c_message') ? ' is-invalid' : '' }}" rows="7" id="quote-message" value="{{ old('c_message') }}" placeholder="Please write details to us.." name="c_message" required></textarea>

                        @if ($errors->has('c_message'))
                            <div class="invalid-feedback">{{ $errors->first('c_message') }}</div>

                        @endif
                            
                    </div>
                    <div class="form-group">
                        @captcha('en')
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Get a quote</button>
                    </div>

                </form>
            </div>
        </div>
    </section>



@endsection

@section('js')

<script>
    function readURL(input) {

        if (input.files && input.files[0]) 
        {
            var fileName = input.files[0].name;
            console.log(input.files[0]);
            // use fileName however fits your app best, i.e. add it into a div
            document.getElementById('file-label-to-change').innerText = fileName;
        }
    }        

</script>

@endsection