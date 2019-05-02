@extends('layouts.master')




@section('content')


<!-- Page Title-->
<div class="shop-page-title d-flex" aria-label="Page title"
    style="background-image: url(img/components/others/03.jpg);">
    <div class="container text-left align-self-center">
        <h3 class="shop-page-title-inner block-title pt-3">Publisher</h3>
    </div>
</div>




<!-- Page Content-->
<div class="container pb-4 mb-1 categories-grid">
    <div class="col-lg-12">

        <!-- Categories Grid-->
        <div class="row pt-3">


            @foreach ($publishers as $publisher)

            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <a class="d-block text-decoration-none mb-4" href="{{ route('publishers.show', $publisher->id) }}">

                    <figure class="figure"><img class="figure-img" src="images/components/others/01.jpg" alt="">
                        <figcaption class="figure-caption text-lg text-center mb-2"> {{ $publisher->name }} </figcaption>
                    </figure>

                </a>
            </div>


            @endforeach



        </div>

        <div> {{ $publishers->links() }} </div>




    </div>
</div>
@endsection