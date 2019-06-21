@extends('layouts.master')

@if (request()->is('books/*'))

  @section('og-meta')
      
      <meta property="og:url" content="{{ env('APP_URL') . '/' . request()->path() }}" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="{{ $book->title }}" />
      <meta property="og:description" content="Buy & Rent Books Online" />
      <meta property="og:image" content="{{ asset($book->image) }}" />

  <script>
        const title = "{!! $book->title !!}";
        document.title = title;
  </script>
  @endsection

@endif



@section('content')
    


    <!-- Page Content-->

    @include('books.single_book')
      
    <!-- Product Details-->
      <div class="bg-secondary pt-2" id="details">
        <div class="container">

          <div class="shop-single-lower">

            <h2 class="h4 block-title text-left ml-3 pt-3">Book & Author Details</h2>
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

@section('js')
    
<script>

$(function() {
  var stars = [];
  var sum = 0;
  var width = [];

  for ( var i = 1; i < 6; i++ ) {
    stars.push(parseInt($('.reviews_'+i+'star').val()));
  }     

  for ( var i = 0; i < stars.length; i++ ) {
    sum += stars[i];       
  }     

  for ( var i = 0; i < stars.length; i++ ) {
    w = ((stars[i]) / sum * 100).toFixed(0);
    width.push(w);
    $('.rating-bar-container[data-id='+(i+1)+'] .bar').css('width', w+'%' ); 
  }

  if (sum > 0) {
    for ( var i = 0; i < stars.length; i++ ) {
      $('.rating-bar-container[data-id='+(i+1)+'] .bar-number').html(width[i]+'%'); 
    }
  } else{
    $(".rating-bar-container .bar-number").html('0%')
  }
});



</script>

@endsection