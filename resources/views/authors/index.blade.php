@extends('layouts.master')


@section('content')

    <!-- Page Title-->
    <div class="shop-page-title d-flex" aria-label="Page title"
        style="background-image: url(images/components/others/03.jpg);">
        <div class="container text-left align-self-center">
            <h3 class="shop-page-title-inner block-title pt-3">Publishers</h3>
        </div>
    </div>



    <!-- Page Content-->
    <div class="container pb-4 mb-1 authors-grid">
        <div class="col-lg-12">
            <!-- Categories Grid-->
            <div class="row pt-3">

                @foreach ($authors as $author)

                    <!-- Authors-->
                    <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                        <div class="shop-authors mx-auto">
                            <a class="shop-authors-thumb" href=" {{ route('authors.show', $author->id) }} ">
                                <img src="{{ $author->image }}" alt=" {{ $author->name }} " />
                                <p class="shop-authors-title"> {{ $author->name }} </p>
                            </a>
                        </div>
                    </div>
                

                @endforeach


            </div>

            {{ $authors->links() }}

        </div>
    </div>


@endsection