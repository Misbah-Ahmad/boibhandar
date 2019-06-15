<div class="col-md-4">
    <div class="cart-calculator">
        <div class="col-md-12">
            <h4 class="widget-title">Checkout Summary</h4>
            <div class="table-responsive cart-calculator-table">
                <table class="table">
                    <thead class="thead-dark">

                        <tr>
                            <th>Book</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>

                    </thead>

                    <tbody>
                        
                        @php
                            $total = 0; $count = 0;
                        @endphp

                        @foreach ($books as $book)
                            @php

                                $price  = intval($book->hasDiscount ? $book->discountedPrice : $book->price);
                                $total += $price;
                                $count++;
                            
                            @endphp

                            <tr>
                                <td>{{  $book->title }}</td>
                                <td id="cartSumQuant{{ $loop->index }}">1</td>
                                <td id="cartSumPrice{{ $loop->index }}">{{  $price }}</td>
                                                        
                            </tr>                            
                        @endforeach

                        <tr>
                            <td class="font-weight-bold">Subtotal</td>
                            <td class="font-weight-bold" id="cartSumSubTotalQuant">{{ $count }}</td>
                            <td class="font-weight-bold" id="cartSumSubTotalPrice">{{ $total }}</td>
                        </tr>

                        <tr>
                            <td class="font-weight-bold">Shipping</td>
                            <td class="font-weight-bold"></td>
                            <td class="font-weight-bold" id="cartSumShipping"> {{ env('SHIPPING_CHARGE') }} </td>    
                        </tr>

                        <tr>
                            <td class="font-weight-bold">Gift Wrap</td>
                            <td class="font-weight-bold"></td>
                            <td class="font-weight-bold" id="cartSumGiftWrap" data-charge="{{ env('GIFT_WRAP_CHARGE') }}"> 0 </td>    
                        </tr>

                        <tr>
                            <td class="font-weight-bold">Total</td>
                            <td class="font-weight-bold"></td>
                            <td class="font-weight-bold" id="cartSumTotal">{{ $total + intval(env('SHIPPING_CHARGE')) }}</td>
                        </tr>

                    </tbody>

                </table>

                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="ex-check-1">
                    <label class="custom-control-label" for="ex-check-1">Gift Wrap for Tk. {{ env('GIFT_WRAP_CHARGE') }} </label>
                </div>
            </div>


            <!-- <form class="form-inline">
            <label class="h4 pb-2 mt-3" for="promo-input">Apply Gift Voucher or Promo Code</label>
            <input class="form-control mb-3 mr-sm-4" type="text" placeholder="">
            <button class="btn btn-primary mb-3" type="submit">Submit</button>
          </form> -->

            <div class="col-md-12 mb-3 mt-3">
                <a class="btn btn-primary btn-block" id="submitCart" onclick="event.preventDefault()">
                    <i class="fe-icon-credit-card"></i>&nbsp;Checkout
                </a>
                @if (auth()->user()->hasPendingOrder)
                    <p style="color:#ff0000;" >You've pending order(s) in your order list. Please, confirm them to order new books!</p>
                @endif

            </div>


            <form action=" {{ route('checkout') }}" method="GET" id="cartSubmitForm">




            </form>


        </div>
    </div>
</div>