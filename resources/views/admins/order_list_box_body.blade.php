<div class="box-body">
    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
            {{-- <div class="col-sm-6">
                                <div class="dataTables_length" id="example1_length"><label>Show <select
                                            name="example1_length" aria-controls="example1"
                                            class="form-control input-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                            </div> --}}

            <div class="col-sm-6">
                <div id="example1_filter" class="dataTables_filter"><label>Search: <input type="search"
                            class="form-control input-sm" placeholder="" aria-controls="example1"></label></div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">

                @if (count($orders) > 0)
                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
                        aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th>#</th>
                                <th>ID</th>
                                <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending" aria-sort="descending">Customer
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Rendering engine: activate to sort column ascending">Recipient
                                </th>
                                <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending" aria-sort="descending">Phone
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Platform(s): activate to sort column ascending">
                                    Gift</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Platform(s): activate to sort column ascending">
                                    Payment</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Engine version: activate to sort column ascending">Status</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending">Ref.</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending">Ordered On</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending">Total</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending">Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($orders as $order)

                            <tr role="row" class=" {{ $loop->iteration&1 ? 'odd' : 'even'}} ">
                                <td> {{ $loop->iteration }}</td>
                                <td> <a href="{{ route('admins.orders.show', $order->id) }}">{{ 'BOID' . $order->id }}</a></td>
                                <td class=""> <a href="{{ route ('admins.user_profile', $order->user->id) }}"> {{ $order->user->fullName }} </a> </td>
                                <td class="sorting_1"> {{ $order->name }} </td>
                                <td> {{ $order->phone }} </td>
                                <td> {{ $order->is_gift ? 'Yes' : 'No' }} </td>
                                <td> {{ $order->transaction->pay_type }} </td>
                                <td> <span class="label label-{{ $order->statusBadge }}">{{ ucwords($order->status) }}</span></td>
                                <td> {{ $order->reference }} </td>
                                <td> {{ date('M d, Y', strtotime($order->created_at)) }} </td>
                                <td> {{ $order->transaction->total_price }} </td>
                                <td> 
                                    @php($status = strtolower($order->status))
                                    @if($status == 'pending')
                                        
                                        <span><button onclick="change_order_status({{ $order->id }}, 'Approved')" class="btn btn-sm btn-primary">Approve</button></span> <span><button onclick="change_order_status({{ $order->id }}, 'Cancelled')" class="btn btn-sm btn-danger">Cancel</button></span>
                                        
                                    @elseif($status == 'cancelled')
                                    
                                        <span><button onclick="change_order_status({{ $order->id }}, 'Pending')" class="btn btn-sm btn-primary">Pending</button></span>
                                    
                                    @elseif($status == 'approved')
                                    
                                        <span><button onclick="change_order_status({{ $order->id }}, 'Delivered')" class="btn btn-sm btn-success">Delivered</button></span> <span><button onclick="change_order_status({{ $order->id }}, 'Cancelled')" class="btn btn-sm btn-danger">Cancel</button></span>
                                    
                                    @else
                                        <span>N/A</span>
                                    @endif
                                </td>                                
                            </tr>

                            @endforeach


                        </tbody>



                    </table>
                    
                @else
                    <h4 class="text-center" style="color:red;">No order was found!</h4>                    
                @endif


            </div>
        </div>


        <div class="row">
            {{-- <div class="col-sm-5">
                                <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing
                                    1 to 10 of 57 entries</div>
                            </div> --}}

            <div class="col-sm-7">


                {{-- <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button previous disabled" id="example1_previous"><a href="#"
                                                aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li>
                                        <li class="paginate_button active"><a href="#" aria-controls="example1"
                                                data-dt-idx="1" tabindex="0">1</a></li>
                                        <li class="paginate_button "><a href="#" aria-controls="example1"
                                                data-dt-idx="2" tabindex="0">2</a></li>
                                        <li class="paginate_button "><a href="#" aria-controls="example1"
                                                data-dt-idx="3" tabindex="0">3</a></li>
                                        <li class="paginate_button "><a href="#" aria-controls="example1"
                                                data-dt-idx="4" tabindex="0">4</a></li>
                                        <li class="paginate_button "><a href="#" aria-controls="example1"
                                                data-dt-idx="5" tabindex="0">5</a></li>
                                        <li class="paginate_button "><a href="#" aria-controls="example1"
                                                data-dt-idx="6" tabindex="0">6</a></li>
                                        <li class="paginate_button next" id="example1_next"><a href="#"
                                                aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li>
                                    </ul>
                                </div> --}}
            </div>

        </div>


    </div>
</div>