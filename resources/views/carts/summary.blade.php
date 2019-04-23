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
                            $total = 0.0; $count = 0;
                        @endphp

                        @foreach ($books as $book)
                            <tr>
                                <td>{{  $book->title }}</td>
                                <td>1</td>
                                <td>{{  $book->maxPrice }}</td>
                            
                                @php
                                    $total += $book->maxPrice;
                                    $count++;
                                @endphp
                            
                            </tr>                            
                        @endforeach

                        <tr>
                            <td class="font-weight-bold">Subtotal</td>
                            <td class="font-weight-bold">{{ $count }}</td>
                            <td class="font-weight-bold">{{ $total }}</td>
                        </tr>

                        <tr>
                            <td class="font-weight-bold">Shipping</td>
                            <td class="font-weight-bold"></td>
                            <td class="font-weight-bold">20</td>
                        </tr>

                        <tr>
                            <td class="font-weight-bold">Total</td>
                            <td class="font-weight-bold"></td>
                            <td class="font-weight-bold">{{ $total + 20.0 }}</td>
                        </tr>

                    </tbody>

                </table>

                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="ex-check-1">
                    <label class="custom-control-label" for="ex-check-1">Gift Wrap for Tk. 30</label>
                </div>
            </div>


            <!-- <form class="form-inline">
            <label class="h4 pb-2 mt-3" for="promo-input">Apply Gift Voucher or Promo Code</label>
            <input class="form-control mb-3 mr-sm-4" type="text" placeholder="">
            <button class="btn btn-primary mb-3" type="submit">Submit</button>
          </form> -->

            <div class="col-md-12 mb-3 mt-3"><a class="btn btn-primary btn-block" href="checkout-address.html"><i class="fe-icon-credit-card"></i>&nbsp;Checkout</a></div>





        </div>
    </div>
</div>