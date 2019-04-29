@extends('layouts.master')

@section('content')
    

    <!-- Page Content-->
    <div class="container pb-5 mb-3 mt-5">
      <!-- Checkout: Complete-->
      <div class="wizard pb-5 pt-5">
        <div class="wizard-body pt-2 text-center">
          <h3 class="h4 pb-3">Thank you for your order!</h3>
          <p class="mb-2">Your order has been placed and will be processed as soon as possible.</p>
          <p class="mb-2">Make sure you make note of your order number, which is <strong>{{ session('order_id') }}.</strong></p>
          <p>You will be receiving an email shortly with confirmation of your order.</p>
          <a class="btn btn-primary mt-3 mr-3" href="/">Go Back  Shopping</a>
          <!-- <a class="btn btn-primary mt-3" href="#"><i class="fe-icon-map-pin"></i>&nbsp;Track Order</a> -->
        </div>
      </div>
    </div>



@endsection