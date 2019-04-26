@extends('layouts.master')

@section('content')
    
    <!-- Page Title-->
    <div class="page-title d-flex" aria-label="Page title">
      <div class="container text-left align-self-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="#">Single</a>
            </li>            
          </ol>
        </nav>
      </div>
    </div>

    <!-- Page Content-->

    @include('books.single_book')
      
    <!-- Product Details-->
      <div class="bg-secondary pt-2" id="details">
        <div class="container">
          <h2 class="h4 block-title text-left">Product Specification & Summary</h2>
          <div class="row">
            

            @include('books.summary')


            @include('books.author_details')


          </div>
        </div>
      </div>




    <!--Related Products-->
    @if($related_books->count() > 0)
      @include('books.book_carousel', ['carousel_headline' => 'You May Also Like'])
    @endif



    <!-- Reviews-->
    {{-- <div class="container bg-secondary" id="review-call">
      <h2 class="h4 block-title text-left pt-4">Reviews and Ratings</h2>
      
      @include('review_rating')

    </div> --}}




@endsection