<div class="col-lg-8 pb-5">
    <form class="row">


        
        <div class="col-md-6">
            <div class="form-group">
                <label for="account-pass">New Password</label>
                <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" id="account-pass">

                @if ($errors->has('password'))
                    <div class="invalid-feedback"> <strong>{{ $errors->first('password') }}</strong></div>                                                
                @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="account-confirm-pass">Confirm Password</label>

                <input class="form-control" type="password" name="password_confirmation" id="account-confirm-pass">


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