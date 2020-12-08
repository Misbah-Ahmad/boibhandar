                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="text-muted" for="checkout-fn">First Name</label>
                                    <input class="form-control {{ $errors->has('fname') ? ' is-invalid' : '' }}" type="text" id="checkout-fn" name="fname" value="{{ old('fname') ? old('fname') : $user->fname }}" required>
                                        @if ($errors->has('fname'))
                                            <div class="invalid-feedback"> <strong>{{ $errors->first('fname') }}</strong></div>                                                
                                        @endif                                    
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="text-muted" for="checkout-ln">Last Name</label>
                                    <input class="form-control {{ $errors->has('sname') ? ' is-invalid' : '' }}" type="text" id="checkout-ln" name="sname" value="{{ old('sname') ? old('sname') : $user->sname }}" required>
                                        @if ($errors->has('sname'))
                                            <div class="invalid-feedback"> <strong>{{ $errors->first('sname') }}</strong></div>                                                
                                        @endif
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="text-muted" for="checkout-phone">Phone Number</label>
                                    <input class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" type="text" id="checkout-phone" name="phone" value="{{ old('phone') ? old('phone') : $user->phone }}" required>

                                        @if ($errors->has('phone'))
                                            <div class="invalid-feedback"> <strong>{{ $errors->first('phone') }}</strong></div>                                                
                                        @endif
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <p style="display: none;" id="districts_data">{{ $districts_data }}</p>
                                    <label class="text-muted" for="district">District</label>
                                    <select class="form-control {{ $errors->has('district') ? ' is-invalid' : '' }}" id="district" name="district" required>
                                        <option selected disabled value="">Select District</option>
                                    </select>
                                    @if ($errors->has('district'))
                                        <div class="invalid-feedback"> <strong>{{ $errors->first('district') }}</strong></div>                                                
                                    @endif                                    

                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="text-muted" for="checkout-pickup">Area</label>
                                    <select class="form-control {{ $errors->has('checkout_pickup') ? ' is-invalid' : '' }}" id="checkout-pickup" name="checkout_pickup" required>
                                        <option selected disabled value="">Choose An Area</option>
                                    </select>
                                        @if ($errors->has('checkout_pickup'))
                                            <div class="invalid-feedback"> <strong>{{ $errors->first('checkout_pickup') }}</strong></div>                                                
                                        @endif                                    
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="text-muted" for="checkout-address">Detail Address</label>
                                    <input class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" type="text" id="checkout-address" placeholder="House No, Road No etc." name="address" value="{{ old('address') }}" required>
                                        @if ($errors->has('address'))
                                            <div class="invalid-feedback"> <strong>{{ $errors->first('address') }}</strong></div>                
                                        @endif
                                </div>
                            </div>

                        </div>