<div class="cart-item d-md-flex justify-content-between">
    <div class="col-md-6">
        <div class="px-3 my-3">

            <a class="cart-item-product" href=" {{ route('books.show', $book->id) }} ">
            
                <div class="cart-item-product-thumb"><img src="{{ asset($book->image) }}" alt="{{ $book->title }}"></div>
            
                <div class="cart-item-product-info">
                    <h4 class="cart-item-product-title"> {{ $book->title }} </h4>
                    
                    <span> {!! implode('<br>', $book->authorList()) !!}</span>
                    
                    <div class="text-lg text-body font-weight-medium pb-1"> 
                        @include('books.price')
                    </div>
                    {{-- <span>Category: </span> --}}
                
                </div>
            </a>

        </div>
    </div>

    <div class="col-md-6">
        <div class="text-center wishlist-shift">
            
            <div class="row">
                
                <div class="col-md-6">
                    <a class="btn btn-style-4 btn-success btn-sm" onclick="event.preventDefault(); addToCart( {{ $book->id }} );"><i
                            class="fe-icon-shopping-cart mr-1"></i>Add to cart</a>
                </div>
            
                <form action="{{ route('wishlist.delete', $book->id) }}" method="post" id="wishremove{{ $book->id }}">@csrf</form>
    
                <div class="col-md-6">
                <a class="btn btn-style-4 btn-secondary btn-block mr-3 mb-3 btn-sm" href="" onclick="event.preventDefault(); document.getElementById('wishremove{{ $book->id }}').submit();"><i
                            class="fe-icon-x mr-1"></i>Remove</a>
                
                    </div>

            
            </div>

        </div>
    </div>
</div>