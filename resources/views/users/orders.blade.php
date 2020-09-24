<div class="col-lg-8 pb-5">
    <div class="account-orders">
    <h3 class="h6 block-title mb-4">My Orders</h3>
{{-- <div class="d-flex justify-content-end pb-3">
    
        <div class="form-inline">
            <label class="text-muted mr-3" for="order-sort">Sort Orders</label>
    
            <select class="form-control" id="order-sort">
                    <option>All</option>
                    <option>Delivered</option>
                    <option>In Progress</option>
                    <option>Delayed</option>
                    <option>Canceled</option>
                  </select>
        </div>
    
    </div> --}}
    
    <div class="table-responsive">
    
        <table class="table table-hover mb-0">
            <thead class="thead-dark">
                <tr>
                    <th>Order #</th>
                    <th>Date Purchased</th>
                    <th>Status</th>
                    <th>Total</th>
                </tr>
            </thead>
    
            <tbody>
    
                @foreach($vars as $order)
                <tr>
    
                    <td><a class="navi-link" href="{{ route('orders.show', $order->id) }}" data-toggle="modal" target="_blank">{{ ($order->id+177) . $order->id }}</a></td>
    
                    <td>{{ date('M d, Y', strtotime($order->created_at)) }}</td>
    
                    <td><span class="badge badge-{{ $order->statusBadge }} m-0">{{ $order->status }}</span></td>
    
                    <td>৳ <span>{{ intval($order->totalPrice) + $order->shipping_charge }}</span></td>
    
                </tr>
                @endforeach
    
            </tbody>
    
        </table>
    </div>

    </div>

</div>