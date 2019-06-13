@extends('layouts.master')



@section('content')


<section class="shop-page-title-bg">

    <!-- Page Title-->
    <div class="shop-page-title d-flex" aria-label="Page title"
        style="background-image: url(/images/bg/bg-11.png);">
        <div class="container text-left align-self-center">
            <h3 class="shop-page-title-inner block-title pt-3">Categories</h3>
        </div>
    </div>


</section>




<!-- Page Content-->
<div class="container pb-4 mb-1 categories-grid">
    <div class="col-lg-12">

        <!-- Categories Grid-->
        <div class="row pt-3">


            @foreach ($categories as $category)

                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <a class="d-block text-decoration-none mb-4" href="{{ route('categories.show', $category->name) }}">

                        <figure class="figure"><img class="figure-img" src="images/components/others/01.jpg" alt="">
                            <figcaption class="figure-caption text-lg text-center mb-2"> {{ $category->name }} </figcaption>
                        </figure>

                    </a>
                </div>
            

            @endforeach



        </div>

        <div> {{ $categories->links() }} </div>




    </div>
</div>

@endsection