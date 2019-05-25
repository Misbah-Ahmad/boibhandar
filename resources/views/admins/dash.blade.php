@extends('admin_layouts.master')

@section('main-content')

<section class="content">

    <div class="row">

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3> {{ $users['today'] }} </h3>

                    <p>Todays Users</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href=" {{ route('admins.users', ['_segment' => 'today']) }} " class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>


        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3> {{ $users['total'] }} </h3>

                    <p>Total Users</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href=" {{ route('admins.users', ['_segment' => 'total']) }} " class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>



        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3> {{ $orders['today'] }} </h3>

                    <p>Todays Orders</p>
                </div>
                <div class="icon">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <a href=" {{ route('admins.orders', ['_segment' => 'today']) }} " class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3> {{ $orders['total'] }} </h3>

                    <p>Total Orders</p>
                </div>
                <div class="icon">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <a href=" {{ route('admins.orders', ['_segment' => 'total']) }} " class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

    </div>

</section>


@endsection