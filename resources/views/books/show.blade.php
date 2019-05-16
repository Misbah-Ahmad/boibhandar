@extends('layouts.master')

@section('content')
    


    <!-- Page Content-->

    @include('books.single_book')
      
    <!-- Product Details-->
      <div class="bg-secondary pt-2" id="details">
        <div class="container">

          <div class="shop-single-lower">

            <h2 class="h4 block-title text-left ml-3 pt-3">Book Specification & Author Details</h2>
            <div class="row">
              

              @include('books.summary')


              @include('books.author_details')


            </div>


          </div>

        </div>
      </div>




    <!--Related Products-->

    @include('books.review_rating')


    @if($related_books->count() > 1)
      @include('books.book_carousel', ['carousel_headline' => 'You May Also Like'])
    @endif



@endsection