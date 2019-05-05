<form action="{{ route('carts.delete', $book->id) }}" method="post" id="c_rm{{ $book->id }}" style="display:none;">@csrf</form>
<div class="cart-item"><span class="remove-item" onclick="event.preventDefault(); document.getElementById('c_rm{{ $book->id }}').submit();"><i class="fe-icon-x"></i></span>

    <div class="row">
    
        <div class="col-md-5">
            <div class="px-3 my-3">
                
                <a class="cart-item-product" href="shop-single.html">
                
                    <div class="cart-item-product-thumb">
                        <img src="{{ $book->image }}" alt="Product">
                    </div>
                
                    <div class="cart-item-product-info">
                        <h4 class="cart-item-product-title">{{ $book->title }}</h4>
                        <span>{!! implode(', ', $book->anchoredAuthors()) !!}</span>
                    </div>
                
                </a>

            </div>
        </div>
    
        <div class="col-md-4">
            <div class="px-3 my-3 text-center">
                <div class="cart-item-label">Quantity</div>
                
              <div class="input-group">

                <span class="input-group-btn">
                  <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant{{ $loop->index }}">
                    <i class="fa fa-minus"></i>
                  </button>
                </span>

                <input type="text" data-id="{{ $book->id }}" name="quant{{ $loop->index }}" class="form-control input-number book-quantity-id" value="1" min="1" max="9">
                
                <span class="input-group-btn">
                  <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant{{ $loop->index }}">
                    <i class="fa fa-plus"></i>
                  </button>
                </span>
              
            </div>

            </div>
        </div>

        <div class="col-md-3">
            <div class="px-3 my-3 text-center">
        
            <div class="cart-item-label">Subtotal</div>৳ <span class="text-xl font-weight-medium" id="subPrice{{ $loop->index }}"> {{ $book->hasDiscount ? $book->discountedPrice : $book->price }} </span>
                <div id="unitHidden{{$loop->index}}" style="display:none;">{{ $book->hasDiscount ? $book->discountedPrice : $book->price }}</div>
            </div>
        
        </div>

    </div>
</div>