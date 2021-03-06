    <div class="product-card mx-auto mb-5">
        
        <div class="product-head d-flex justify-content-between align-items-center">
            
            {{-- @if($book->hasDiscount)

                <span class="badge badge-danger" style="background-color:#ff0000;">{{ 'Sale ' . $book->discountPercent . '%' }}</span>
            @endif --}}

            @include('books.rating', ['score' => $book->starScore])

        </div>

        <a class="product-thumb" href="{{ route('books.show', $book->id) }}">
            <img class="lazy" data-src="{{ asset($book->thumb) }}"  alt="{{ $book->title }}" title=" {{ $book->title }} "> 
        </a>
        
        <div class="product-card-body" style="font-size:12px;">
        
            <h5 class="product-title" style="font-size:14px;">
                <a href="{{ route('books.show', $book->id) }}">{{ $book->shortTitle  }}</a>
            </h5>

            {{-- @php
             $authorsTwo = $book->authorList();
             if(is_array($authorsTwo) && count($authorsTwo) > 2)
             {
                 $authorsTwo = [$authorsTwo[0], $authorsTwo[1]];
             }   
            @endphp --}}

            {{-- {!! implode(', ', $authorsTwo) !!} --}}
            {{  $book->shortAuthor  }}
        
            <span class="product-price">

                @include('books.price')

            </span>
        
        </div>

        <div class="product-buttons-wrap">

            <div class="product-buttons">

                <div class="product-button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">

                    <a href="" onclick="event.preventDefault(); addToWishlist({{ $book->id }})">
                        <i class="fe-icon-heart"></i>
                    </a>
                </div>

                <div class="product-button" data-toggle="tooltip" data-placement="top" title="" data-original-title="See Details">
                    <a href="{{ route('books.show', $book->id) }}"><i class="fe-icon-eye"></i></a>
                </div>

                <div class="product-button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">

                    <a href="" onclick="event.preventDefault(); addToCart({{ $book->id }})">
                        <i class="fe-icon-shopping-cart"></i></a>
                </div>


            </div>

        </div>

    </div>