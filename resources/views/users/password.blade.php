<div class="col-lg-8 pb-5">



    <div class="account-details">    

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form class="row" method="post" action="{{ route('user.profile.changePassword')}}">

            @csrf
            
            

            <div class="col-md-6">
                <div class="form-group">
                    <label for="account-current-password">Current Password</label>

                    <input class="form-control {{ $errors->has('current_password') ? ' is-invalid' : '' }}" type="password" name="current_password" id="current_password" placeholder="Current Password">

                    @if ($errors->has('current_password'))
                        <div class="invalid-feedback"> <strong>{{ $errors->first('current_password') }} </strong> </div>
                    @endif
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">New Password</label>
                    <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" id="password" placeholder="Strong Password">

                    @if ($errors->has('password'))
                        <div class="invalid-feedback"> <strong>{{ $errors->first('password') }}</strong></div>                                                
                    @endif
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>

                    <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="Re-type Password">


                </div>
            </div>



            <div class="col-12">
                <hr class="mt-2 mb-3">
                <div class="d-flex flex-wrap justify-content-between align-items-center">

                    <button class="btn btn-primary" type="submit">Change Password</button>
                </div>
            </div>
        </form>
    </div>
</div>