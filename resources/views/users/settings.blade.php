        <div class="col-lg-8 pb-5">
          <form class="row" @method('post') action="{{ route('user.profile.update') }}">
            
            @csrf

            <div class="col-md-6">
              <div class="form-group">

                  <label for="account-fn">First Name</label>
                  <input class="form-control {{ $errors->has('fname') ? ' is-invalid' : '' }}" type="text" id="account-fn" name="fname" value="{{ $user->fname }}" required>
              
                    @if ($errors->has('fname'))
                        <div class="invalid-feedback"> <strong>{{ $errors->first('fname') }}</strong></div>                                                
                    @endif              
                
                  </div>
            
              </div>
            
            
            <div class="col-md-6">
              
              <div class="form-group">
              
                  <label for="account-ln">Last Name</label>
                  <input class="form-control {{ $errors->has('sname') ? ' is-invalid' : '' }}" type="text" id="account-ln" name="sname" value="{{ $user->sname }}" required>

                  @if ($errors->has('sname'))
                      <div class="invalid-feedback"> <strong>{{ $errors->first('sname') }}</strong></div>                                                
                  @endif              

              </div>

            </div>
            



            <div class="col-md-6">
              <div class="form-group">

                  <label for="account-phone">Phone Number</label>
                  <input class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" type="text" id="account-phone" name="phone" value="{{ $user->phone }}" required>

                  @if ($errors->has('phone'))
                      <div class="invalid-feedback"> <strong>{{ $errors->first('phone') }}</strong></div>                                                
                  @endif              

              </div>
            </div>



            <div class="col-12">
        
              <hr class="mt-2 mb-3">
        
              <div class="d-flex flex-wrap justify-content-between align-items-center">

                <button class="btn btn-primary" type="submit" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Success!" data-toast-message="Your profile is updated successfuly.">Update Profile</button>
              
              </div>

            </div>

          </form>
        
        </div>