@extends('admin_layouts.master')


@section('main-content')


<section class="content">


    <div class="row">
        <div class="col-xs-12">

            <div class="box box-info">
                <div class="box-header">
                    <h2 class="box-title"><strong>Order List</strong></h2>
                </div>


                @include('admins.order_list_box_body')

            </div>

        </div>


    </div>



</section>





@endsection