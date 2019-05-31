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

    </script>

@endsection