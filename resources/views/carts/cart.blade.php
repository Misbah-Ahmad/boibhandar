@extends('layouts.master')


@section('content')
    



<!-- Page Content-->
<div class="container pb-5 mb-2 mt-5">

    <div class="row">
        
        <div class="col-md-8">    

            @foreach ($books as $book)
                @include('carts.single', ['book' => $book])
            @endforeach

        </div>

        @include('carts.summary')

    </div>

</div>

@endsection

@section('js')
<script src="/js/ops/cart_button.js"></script>
<script src="/js/ops/submit_cart.js"></script>

@endsection