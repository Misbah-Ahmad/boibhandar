@extends('layouts.master')

@section('content')


    <ul class="nav nav-tabs nav-tabs-style-4" role="tablist">

        <li class="nav-item">
            <a class="nav-link {{ $login_tab }}" href="#logIn" data-toggle="tab" role="tab" id="loginTabBtn"><i class="fe-icon-user"></i>&nbsp;Login</a>
        </li>
    
        <li class="nav-item">
            <a class="nav-link {{ $register_tab }}" href="#registerIn" data-toggle="tab" role="tab" id="registerTabBtn"><i class="fe-icon-edit"></i>&nbsp;Register</a>
        </li>
    
    </ul>



    <div class="tab-content">


        <div class="tab-pane fade {{ $login_show . ' ' . $login_tab }}" id="logIn" role="tabpanel">
            <!-- Page Content-->
            <div class="container mb-3">
                <div class="login-tab-custom">
                    <div class="col-md-12 wizard">
                        <h3 class="text-center h4 pt-3 pb-2">Login to Your Account</h3>

                        <form class="needs-validation" action="/login" method="POST">
                            @csrf
                            <input type="hidden" name="form" value="login">
                            <div class="wizard-body pt-2">

                                <div class="input-group form-group">
                                    
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fe-icon-mail"> </i> </span>
                                    </div>

                                    <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" value="{{ old('email') }}" placeholder="Email" name="email" required>

                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </div>
                                    @endif

                                </div>

                                <div class="input-group form-group">
                                    
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fe-icon-lock"></i></span>
                                    </div>

                                    <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password" min="6" required>

                                    @if ($errors->has('password'))
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </div>
                                    @endif

                                
                                </div>
                                
                                <div class="d-flex flex-wrap justify-content-between">

                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="remember-me">
                                        <label class="custom-control-label" for="remember-me">Remember me</label>
                                    </div>
                                    
                                    <a class="nav-link" href="{{ route('password.request') }}">Forgot password?</a>
                                
                                </div>

                                <div class="text-right">
                                    <button class="btn btn-primary" type="submit">Login</button>
                                </div>

                                <hr class="mt-3">
                                
                                {{-- <h3 class="text-center h5 pt-3 pb-2">Or, Login Using Social Accounts</h3> --}}
                                
                                {{-- <div class="d-sm-flex justify-content-between pb-2">
                                    <a class="btn btn-secondary btn-lg btn-block my-2 mr-3" href="#"><img src="img/social/fb.svg">&nbsp;Login</a>
                                    <a class="btn btn-secondary btn-lg btn-block my-2 mr-3" href="#"><img src="img/social/tt.svg">&nbsp;Login</a>
                                </div> --}}

                                <hr class="mt-3">

                                <p class="text-center h5 pt-3">Don’t have an account? <a href="#" onclick="toggleTabColor();"> Register Now!</a></p>
                                <script>
                                    function toggleTabColor()
                                    {
                                        var registerBtn = document.getElementById('registerTabBtn');
                                        var loginBtn = document.getElementById('loginTabBtn');
                                        var registerTab = document.getElementById('registerIn');
                                        var loginTab = document.getElementById('logIn');

                                        if(loginBtn.classList.contains('active'))
                                        {
                                            loginBtn.classList.remove('active');
                                            loginBtn.classList.remove('show');
                                            registerBtn.classList.add('active');
                                            registerBtn.classList.add('show');
                                            
                                            loginTab.classList.remove('active');
                                            loginTab.classList.remove('show');
                                            registerTab.classList.add('active');
                                            registerTab.classList.add('show');
                                            
                                        } else {
                                            loginBtn.classList.add('active');
                                            loginBtn.classList.add('show');
                                            registerBtn.classList.remove('active');
                                            registerBtn.classList.remove('show');
                                            
                                            loginTab.classList.add('active');
                                            loginTab.classList.add('show');
                                            registerTab.classList.remove('active');
                                            registerTab.classList.remove('show');

                                        }
                                        
                                        

                                    }
                                </script>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="tab-pane fade {{ $register_show . ' ' . $register_tab }}" id="registerIn" role="tabpanel">

            <div class="container mb-3">

                <div class="login-tab-custom">
                    <div class="col-md-12 wizard">
                        <div class="wizard-body pt-2">
                            <h3 class="h4 pt-3 pb-2">Don't Have An Account? Register</h3>
                            <p>Registration takes less than a minute but gives you full control over your orders.</p>

                            <form class="needs-validation" method="POST" action="/register">

                                @csrf
                                <input type="hidden" name="form" value="register">
                                <div class="row">
                                    

                                    <div class="col-sm-2">
                                        <div class="form-group">
                                        
                                            <label for="reg-title">Title</label>
                                            <input class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" type="text" value="{{ old('title') }}" name="title" required id="reg-title" placeholder="Mr or Ms">

                                            @if ($errors->has('title'))
                                                <div class="invalid-feedback"> <strong>{{ $errors->first('title') }}</strong></div>                                                
                                            @endif


                                        
                                        </div>
                                    </div>

                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="reg-fn">First Name</label>
                                            <input class="form-control {{ $errors->has('fname') ? ' is-invalid' : '' }}" type="text" value="{{ old('fname') }}" name="fname" required id="reg-fn">

                                            @if ($errors->has('fname'))
                                                <div class="invalid-feedback"> <strong>{{ $errors->first('fname') }}</strong></div>                                                
                                            @endif


                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="reg-ln">Last Name</label>
                                        <input class="form-control {{ $errors->has('sname') ? ' is-invalid' : '' }}" value="{{ old('sname') }}" type="text" name="sname" required id="reg-ln">

                                            @if ($errors->has('sname'))
                                                <div class="invalid-feedback"> <strong>{{ $errors->first('sname') }}</strong></div>                                                
                                            @endif


                                        </div>

                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="reg-email">E-mail Address</label>
                                            <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" type="email" name="email" required id="reg-email">

                                            @if ($errors->has('email'))
                                                <div class="invalid-feedback"> <strong>{{ $errors->first('email') }}</strong></div>                                                
                                            @endif

                                    
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="reg-phone">Phone Number</label>
                                            <input class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" value="{{ old('phone') }}" type="text" name="phone" required id="reg-phone">

                                            @if ($errors->has('phone'))
                                                <div class="invalid-feedback"> <strong>{{ $errors->first('phone') }}</strong></div>                                                
                                            @endif

                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="reg-password">Password</label>
                                            <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required id="reg-password">

                                            @if ($errors->has('password'))
                                                <div class="invalid-feedback"> <strong>{{ $errors->first('password') }}</strong></div>                                                
                                            @endif


                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="reg-password-confirm">Confirm Password</label>
                                            <input class="form-control" type="password" name="password_confirmation" required id="reg-password-confirm">
                                            <div class="invalid-feedback">Passwords do not match!</div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            @captcha('en')
                                        </div>
                                    </div>

                                </div>

                                <div class="text-right">
                                    <button class="btn btn-primary" type="submit">Register</button>
                                </div>

                            </form>

                            <hr class="mt-3">
                       
                        </div>
                    </div>
                </div>

            </div>
    
        </div>
    </div>
    


@endsection