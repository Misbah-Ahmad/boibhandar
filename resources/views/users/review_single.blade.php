<div class="col-md-12">

    <div class="blockquote comment mb-4">

        <div class="d-sm-flex mb-2">
            <h6 class="review-title text-lg mb-0"> {{ $review->title }} </h6>            
            <span class="d-none d-sm-inline mx-3 text-muted opacity-50">|</span>

            @include('books.rating')
    
        </div>


        <p> {{ $review->text }} </p>
        
        <hr class="mt-4">
        
        <footer class="testimonial-footer">

            <div class="pl-2">
                <div class="testimonial-book">Book: <a href="{{ route('books.show', $review->book->id) }}"> {{ $review->book->title }} </a></div>
                <div class="testimonial-author">Author:<a href="{{ route('authors.show', $review->book->author->id) }}"> {{ $review->book->author->name }} </a></div>
            </div>

        </footer>

    </div>
</div>