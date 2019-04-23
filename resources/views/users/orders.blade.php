<div class="col-lg-8 pb-5">
    <div class="d-flex justify-content-end pb-3">

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

    </div>

    <div class="table-responsive">
    
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Order #</th>
                    <th>Date Purchased</th>
                    <th>Status</th>
                    <th>Total</th>
                </tr>
            </thead>
           
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        
                            <td><a class="navi-link" href="#order-details" data-toggle="modal">{{ $order->id }}</a></td>
                            <td>{{$order->created_at}}</td>
                            <td><span class="badge badge-danger m-0">Canceled</span></td>
                            <td>৳ <span>{{$order->getPriceAttribute()}}</span></td>
                        
                    </tr>
                @endforeach
            </tbody>
           
        </table>
    </div>
</div>