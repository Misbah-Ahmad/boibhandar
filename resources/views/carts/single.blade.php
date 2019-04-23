<div class="cart-item"><span class="remove-item"><i class="fe-icon-x"></i></span>
    
    <div class="row">
    
        <div class="col-md-4">
            <div class="px-3 my-3">
                
                <a class="cart-item-product" href="shop-single.html">
                
                    <div class="cart-item-product-thumb">
                        <img src="{{ $book->image }}" alt="Product">
                    </div>
                
                    <div class="cart-item-product-info">
                        <h4 class="cart-item-product-title">{{ $book->title }}</h4>
                        <span>{{ $book->author->name }}</span>
                    </div>
                
                </a>

            </div>
        </div>
    
        <div class="col-md-4">
            <div class="px-3 my-3 text-center">
                <div class="cart-item-label">Quantity</div>
                
                <div class="count-input">
                    
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select>

                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="px-3 my-3 text-center">
        
                <div class="cart-item-label">Subtotal</div>৳ <span class="text-xl font-weight-medium"> {{ $book->maxPrice }} </span>
        
            </div>
        
        </div>

    </div>
</div>