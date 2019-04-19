<div class="col-lg-3 col-md-4 col-sm-6 mb-30">

    <div class="product-card mx-auto mb-3">
        
        <div class="product-head d-flex justify-content-between align-items-center">
            
            @if($book->hasSale)
                <span class="badge badge-danger">Sale</span>
            @endif

            <div class="rating-stars">
                
                @for ($i = 0; $i < 5; $i++)
                    <i class="fe-icon-star {{ $book->starScore > $i ? 'active' : '' }}"></i>   
                @endfor
         
            </div>
        
        </div>

        <a class="product-thumb" href="{{ route('books.show') }}">
            <img src="{{ public_path($book->thumb_link). }}" "="" alt="Product Thumbnail">
        </a>
        
        <div class="product-card-body">
        
            <h5 class="product-title">
                <a href="{{ route('books.show', $book->id) }}">{{ $book->name }}</a>
            </h5>
        
            <a class="product-meta" href="{{ route('authors.show', $book->author->id) }}">{{ $book->author->name }}</a>
        
            <span class="product-price">{{ 'BDT ' . $book->bookDetails()->min('price') . ' to ' . $book->bookDetails()->max('price') }}</span>
        
        </div>

        <div class="product-buttons-wrap">

            <div class="product-buttons">

                <div class="product-button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">

                    <a href="" onclick="event.preventDefault(); addToWishlist({{ $book->id }})" data-toast="" data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                        data-toast-message="added to your wishlist!">
                        <i class="fe-icon-heart"></i>
                    </a>
                </div>

                <div class="product-button" data-toggle="tooltip" data-placement="top" title="" data-original-title="See Details">
                    <a href="{{ route('books.show', $book->id) }}"><i class="fe-icon-eye"></i></a>
                </div>

                <div class="product-button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">

                    <a href="" onclick="event.preventDefault(); addToCart({{ $book->id }})" data-toast="" data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle"
                        data-toast-title="Product" data-toast-message="added to cart successfuly!">
                        <i class="fe-icon-shopping-cart"></i></a>
                </div>


            </div>

        </div>

    </div>

</div>

