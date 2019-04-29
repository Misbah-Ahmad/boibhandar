                        <h3 class="h5 block-title pb-2 mb-4">Choose Payment Method</h3>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="cod" name="payment_method" value="cod" checked>
                            <label class="custom-control-label" for="cod"><h6><i class="fe-icon-package"></i> Cash on Delivery</h6></label><br>
                            <span class="text-muted text-sm">Receive your parcel and pay to our supplier in cash.</span>
                        </div>

                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="bkash" name="payment_method" value="bkash">
                            <label class="custom-control-label" for="bkash"><h6><i class="fe-icon-package"></i> bkash</h6></label><br>
                            
                            <div class="bg-dark-faded p-4">
                                <h6 class="block-title">Step-1:</h6>
                                <p class="pl-4">Send money to <span class="font-weight-bold">01726833399 (Use "Send Money" Option)</span></p>
    
                                <h6 class="block-title">Step-2:</h6>
                                <p class="pl-4">Use <span class="font-weight-bold">{{ $reference }}</span> as reference.</p>
    
                                <h6 class="block-title">Step-3:</h6>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group pl-4">
                                            <label class="text-muted" for="tel-input">Your bkash number (from where you did the transaction)</label>
                                            <input class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" type="tel" id="tel-input" name="bkash_phone" value="{{ old('bkash_phone') }}">
                                            @if ($errors->has('bkash_phone'))
                                                <div class="invalid-feedback"> <strong>{{ $errors->first('bkash_phone') }}</strong></div>                                                
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>