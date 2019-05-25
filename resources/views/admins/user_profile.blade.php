@extends('admin_layouts.master')
@section('main-content')


<!-- Main content -->
<section class="content">


    <div class="row">

        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">

                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="/images/dummy_user.png"
                        alt="User profile picture">

                    <h3 class="profile-username text-center"> {{ $user->fullName }} </h3>

                    <p class="text-muted text-center">{{ $user->email }}</p>
                    <p class="text-muted text-center">{{ $user->phone }}</p>

                    <ul class="list-group list-group-unbordered">


                        <li class="list-group-item">
                            <b>Total Orders</b> <a class="pull-right">{{ $user->orders->count() }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Total Spent</b> <a
                                class="pull-right">{{ $user->orderDetails()->sum('price') }}</a>
                        </li>


                    </ul>

                    <a href="#" class="btn btn-primary btn-block"><b>Dummy Button</b></a>
                </div>

            </div>
            <!-- /.box -->



            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Other Info.</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">

                    <strong><i class="fa fa-user-o margin-r-5"></i> Roles</strong>

                    <p>

                        @foreach($user->roles as $role)

                        <span class="label label-info"> {{ ucwords($role->name) }}</span>

                        @endforeach

                    </p>


                </div>
                <!-- /.box-body -->
            </div>



        </div>

        @include('admins.user_profile_tabs')

    </div>







</section>
@endsection