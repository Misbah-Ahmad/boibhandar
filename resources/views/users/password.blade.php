<div class="col-lg-8 pb-5">

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

                <input class="form-control {{ $errors->has('current-password') ? ' is-invalid' : '' }}" type="password" name="current-password" id="current-password">

                @if ($errors->has('current-password'))
                    <div class="invalid-feedback"> <strong>{{ $errors->first('current-password') }} </strong> </div>
                @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="account-pass">New Password</label>
                <input class="form-control {{ $errors->has('new-password') ? ' is-invalid' : '' }}" type="password" name="new-password" id="new-password">

                @if ($errors->has('new-password'))
                    <div class="invalid-feedback"> <strong>{{ $errors->first('new-password') }}</strong></div>                                                
                @endif
            </div>
        </div>


        <div class="col-md-6">
            <div class="form-group">
                <label for="account-confirm-pass">Confirm Password</label>

                <input class="form-control" type="password" name="password-confirmation" id="password-confirmation">


            </div>
        </div>



        <div class="col-12">
            <hr class="mt-2 mb-3">
            <div class="d-flex flex-wrap justify-content-between align-items-center">

                <button class="btn btn-primary" type="submit" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle"
                    data-toast-title="Success!" data-toast-message="Your password is updated successfuly.">Change Password</button>
            </div>
        </div>
    </form>
</div>