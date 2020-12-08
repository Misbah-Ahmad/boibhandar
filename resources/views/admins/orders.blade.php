@extends('admin_layouts.master')


@section('main-content')


<section class="content">


    <div class="row">
        <div class="col-xs-12">

            <div class="box box-info">
                <div class="box-header">
                    <h2 class="box-title"><strong>Order List</strong></h2>

                    @if(session()->has('message'))
                        <div class="alert alert-info alert-dismissible" style="margin:8px;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            {{ session('message') }}
                        </div>                
                    @endif

                </div>


                @include('admins.order_list_box_body')

            </div>

        </div>


    </div>

    <form style="display:none;" method="POST" action="{{ route('admins.orders.change_status') }}" id="chageOrderStatusForm">
        
    </form>


<div class="modal fade in" id="vendorAssignModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" id="vendorAssignModalDismissBtn" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">{{ "Assign a delivery vendor to order" }}</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
    
                        <div class="col-md-12">
    
                                <form onsubmit="document.querySelector('#vendorAssignModalDismissBtn').click();" role="form" id="assignDeliveryVendorForm" method="POST" action="{{ route('admins.deliveryvendor.assign') }}">
                                    @csrf
                                    <input type="hidden" name="order_id" required>                                    
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label class="control-label" for="vendorAssign">Vendor</label>
                                            <select class="form-control" name="vendor_id" id="vendorAssign" required>
                                                <option selected disabled value="">Choose Vendor</option>
                                                @foreach ($deliveryVendors as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
    
                                    </div>
    
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                    </div>
                                </form>
    
                            </div>
    
                        </div>
                    </div>
                </div>
                {{--<div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>--}}
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</section>





@endsection

@section('js')

    <script>

        function change_order_status(order_id, status)
        {

            const form = document.querySelector('#chageOrderStatusForm');
            form.innerHTML = '';

            let input = document.createElement('input');
            input.type = 'hidden';
            input.name = '_token';
            input.value = document.querySelector('head > meta[name=csrf-token]').content;
            form.appendChild(input);

            input = document.createElement('input');            
            input.type = 'hidden';
            input.name = '_id';
            input.value = order_id;
            form.appendChild(input);

            input = document.createElement('input');            
            input.type = 'hidden';
            input.name = '_status';
            input.value = status;
            form.appendChild(input);
            
            form.submit();

        }

        function setOrderIdToAssignDeliveryVendor(orderId)
        {
            document.querySelector('#vendorAssignModal #assignDeliveryVendorForm input[name=order_id]').value = orderId;
        }

    </script>

@endsection