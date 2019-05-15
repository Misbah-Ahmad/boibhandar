    <div class="product-card mx-auto mb-5">
        
        <div class="product-head d-flex justify-content-between align-items-center">
            
            @if($book->hasSale)
                <span class="badge badge-danger">Sale</span>
            @endif

            @include('books.rating', ['score' => $book->starScore])

        </div>

        <a class="product-thumb" href="{{ route('books.show', $book->id) }}">
            <img src="{{ asset($book->thumb) }}"  alt="Product Thumbnail">
        </a>
        
        <div class="product-card-body">
        
            <h5 class="product-title">
                <a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a>
            </h5>

            {!! implode('<br>', $book->authorList()) !!}
            
        
            <span class="product-price">

                @include('books.price')

            </span>
        
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