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
                                    <label class="text-muted" for="checkout-address">Address</label>
                                    <input class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" type="text" id="checkout-address" name="address" value="{{ old('address') }}" required>
                                        @if ($errors->has('address'))
                                            <div class="invalid-feedback"> <strong>{{ $errors->first('address') }}</strong></div>                                                
                                        @endif
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="text-muted" for="checkout-phone">Phone Number</label>
                                    <input class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" type="text" id="checkout-phone" name="phone" value="{{ old('phone') ? old('phone') : $user->phone }}" required>

                                        @if ($errors->has('phone'))
                                            <div class="invalid-feedback"> <strong>{{ $errors->first('phone') }}</strong></div>                                                
                                        @endif
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="text-muted" for="checkout-district">District</label>
                                    <input class="form-control" type="text" id="checkout-district" placeholder="Chattogram" readonly>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="text-muted" for="checkout-pickup">Pick Up Point</label>
                                    <select class="form-control" id="checkout-pickup" name="checkout_pickup" required>
                                        <option hidden>Choose Pick Up Point</option>
                                        <option>Chawkbazar</option>
                                        <option>GEC</option>
                                        <option>New Market</option>
                                        <option>Muradpur</option>
                                        <option>Agrabad</option>
                                    </select>
                                </div>
                            </div>
                        </div>