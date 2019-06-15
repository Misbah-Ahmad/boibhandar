@extends('layouts.master')


@section('content')
    
    <div class="container pb-4 mb-2 mt-5">
        <div class="row">


            <div class="col-xl-9 col-lg-8 pb-5">
                <div class="wizard">

                    <form method="POST" action="{{ route('orders.confirm') }}" id="checkoutForm">

                        @csrf
                        <input type="hidden" name="reference" value="{{ $reference }}">
                        <input type="hidden" name="_b_g" value="{{ $is_gift }}">

                        <div class="wizard-body">
                            <h3 class="h5 block-title pb-2">Billing Address</h3>


                                @include('orders.address')

                                <hr class="mb-4">

                                @include('orders.payment')

        
                        </div>

                        <div class="wizard-footer d-flex justify-content-between">
                            <a class="btn btn-secondary my-2" href="{{ route('carts.show') }}"><i class="fe-icon-arrow-left"></i><span class="d-none d-sm-inline-block">Back to cart</span></a>

                            <a class="btn btn-primary my-2" id="submitButton" onclick="event.preventDefault();"><span class="d-none d-sm-inline-block">Confirm</span><i class="fe-icon-arrow-right"></i></a>
                        </div>
                    
                    </form>

                </div>
            </div>


            {{-- <aside class="col-xl-3 col-lg-4 pb-4 mb-2">
                <div class="account-sidebar">

                    <div class="widget account-summary">
                        <h4 class="widget-title mt-2">Order Summary</h4>
                        <div class="d-flex justify-content-between pb-2">
                            <div>Cart subtotal:</div>
                            <div class="font-weight-medium"><span>৳</span>2,500</div>
                        </div>
                        <hr>
                        <div class="pt-3 text-right text-lg font-weight-medium"><span>৳</span>2,500.00</div>
                    </div>



                </div>
            </aside> --}}

        </div>
    </div>

@endsection

@section('js')
    
    <script src="{{ mix('/js/ops/checkout.js') }}"></script>

@endsection