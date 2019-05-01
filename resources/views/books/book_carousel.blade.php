    <div class="container pt-3 pb-2">
    
      <div class="related-prod mt-4 pt-3">
        <h3 class="h4 text-center pb-2 block-title mt-3 mb-4"> {{ $carousel_headline }} </h3>
        <div class="owl-carousel carousel-flush" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: false,&quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
      
            @each('books.carousel_item', $related_books, 'book')
      
        </div>


      </div>
    
    </div>