<div class="container">
  <div class="shop-single-review mt-4 mb-4" id="review-call">
    <h2 class="h4 block-title text-left pt-3 ml-3">Reviews and Ratings</h2>
    <div class="col-md-12">
      <div class="row pt-3">
        <div class="col-md-4 pb-5 mb-3">
          <div class="card border-default">
            <div class="card-body">
              
              <div class="text-center">

                <div class="d-inline align-baseline display-4 mr-1">{{ $book->starScore }} </div>

                <div class="d-inline align-baseline text-sm text-warning mr-2">

                  @include('books.rating', ['score' => $book->starScore])

                </div>

              </div>
              
              <div class="pt-3">
                  @php($review_count = $book->reviews()->count())
                  <span class="progress-label">5 stars <span class='text-muted'>-  {{ $book->getStarCount(5.0) }}</span></span>                
                  <div class="progress progress-style-3 mb-3">
                    
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="{{ $book->getStarCount(5.0) }}"
                      aria-valuemin="0" aria-valuemax="{{ $review_count }}"> 
                    </div>
                  </div>
                                    
                  <span class="progress-label">4 stars <span class='text-muted'>- {{ $book->getStarCount(4.0) }}</span></span>
                  <div class="progress progress-style-3 mb-3">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%;;" aria-valuenow="{{ $book->getStarCount(4.0) }}"
                      aria-valuemin="0" aria-valuemax="{{ $review_count }}">
                    </div>
                  </div>
                    
                  <span class="progress-label">3 stars <span class='text-muted'>- {{ $book->getStarCount(3.0) }}</span></span>                
                  <div class="progress progress-style-3 mb-3">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 7%;" aria-valuenow="{{ $book->getStarCount(3.0) }}"
                      aria-valuemin="0" aria-valuemax="{{ $review_count }}">
                    </div>
                  </div>
                  
                  <span class="progress-label">2 stars <span class='text-muted'>- {{ $book->getStarCount(2.0) }}</span></span>
                  <div class="progress progress-style-3 mb-3">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 3%;" aria-valuenow="{{ $book->getStarCount(2.0) }}"
                      aria-valuemin="0" aria-valuemax="{{ $review_count }}">
                    </div>
                  </div>
                  
                  <span class="progress-label">1 star <span class='text-muted'>- {{ $book->getStarCount(1.0) }}</span></span>
                  <div class="progress progress-style-3 mb-3">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0;" aria-valuenow="{{ $book->getStarCount(1.0) }}"
                      aria-valuemin="0" aria-valuemax="{{ $review_count }}">
                    </div>
                  </div>

              </div>

            </div>

          </div>
        </div>





        <div class="col-md-8 pb-5 mb-3">

          @if (auth()->check())
            
            @include('books.review_form')
          

          @endif

          @if ($reviews->count() > 0)
            <div class="d-flex flex-wrap justify-content-between pb-2">
                <h3 class="h5 block-title mt-3">Latest Reviews</h3>

            </div>
              
          @endif


          

          @foreach ($reviews as $review)
              
            <div class="blockquote comment mb-4">
              <div class="d-sm-flex mb-2">
                <h6 class="review-title text-lg mb-0"> {{ $review->title }} </h6><span
                  class="d-none d-sm-inline mx-3 text-muted opacity-50">|</span>

                  @include('books.rating', ['score' => $review->score])

              </div>

              <p> {{ $review->text }} </p>
              <footer class="testimonial-footer">
                <div class="testimonial-avatar">
                  <img src="/images/users/profile_dummy.jpg" alt="{{ $review->user->fullName }}" />
                </div>

                <div class="d-table-cell align-middle pl-2">
                  <div class="blockquote-footer"> {{ $review->user->fullName }}
                    <cite> {{ strtolower($review->created_at->diffForHumans()) }} </cite>
                  </div>
                </div>

              </footer>
            </div>

          @endforeach



        </div>
      </div>
    </div>
  </div>
</div>