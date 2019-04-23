@extends('layouts.master')


@section('content')
    
    <div class="page-title d-flex" aria-label="Page title">

        <div class="container text-left align-self-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Cart</a>
                    </li>
                </ol>
            </nav>
        </div>

    </div>







<!-- Page Content-->
<div class="container pb-5 mb-2">

    <div class="row">
        
        <div class="col-md-8">    

            @each('carts.single', $books, 'book')

        </div>

        @include('carts.summary')

    </div>

</div>

@endsection