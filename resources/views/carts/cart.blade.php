@extends('layouts.master')


@section('content')
    



<!-- Page Content-->
<div class="container pb-5 mb-2 mt-5">

    <div class="row">
        
        <div class="col-md-8">    

            <div class="delete-all-from-cart mb-3 bg-white shadow">
                <div class="d-flex align-items-center justify-content-between p-2">
                    <h6 class="m-0 text-gray-dark"><small class="">Remove All Items</small></h6>
                    <form method="POST" action="{{ route('carts.delete_all') }}">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger">Remove All</button>
                    </form>
                </div>
            </div>
            @foreach ($books as $book)
                @include('carts.single', ['book' => $book])
            @endforeach

        </div>

        @include('carts.summary')

    </div>

</div>

@endsection

@section('js')
<script src="{{ mix('/js/ops/cart_button.js') }}"></script>
<script src="{{ mix('/js/ops/submit_cart.js') }}"></script>

@endsection