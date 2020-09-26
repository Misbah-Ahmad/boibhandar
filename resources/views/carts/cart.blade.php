@extends('layouts.master')


@section('content')
    



<!-- Page Content-->
<div class="container pb-5 mb-2 mt-5">

    <div class="row">
        
        <div class="col-md-8">    

            <div class="delete-all-from-cart mb-3 bg-white shadow">
                <div class="d-flex align-items-center justify-content-between p-2">
                    <h6 class="m-0 text-gray-dark"><small class="">Remove All Items</small></h6>
                    <form method="POST" id="cartRemoveAllForm" action="{{ route('carts.delete_all') }}">
                        @csrf
                        <button type="button" data-toggle="modal" data-target="#confirmationModal" class="btn btn-sm btn-danger">Remove All</button>
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

@include('layouts.confirmation_modal', ['title' => __('cart.remove_all_modal_title'), 'message' => __('cart.remove_all_modal_message'),  'callback' => 'deleteAllFromCart'])

@endsection

@section('js')
<script src="{{ mix('/js/ops/cart_button.js') }}"></script>
<script src="{{ mix('/js/ops/submit_cart.js') }}"></script>

<script>

function deleteAllFromCart() {

    document.querySelector('#cartRemoveAllForm').submit();

}

</script>

@endsection