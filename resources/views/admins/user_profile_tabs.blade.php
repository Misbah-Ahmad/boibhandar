<div class="col-md-9">

    @php($tab = 'orders')
    @if(session()->has('tab') && session('tab') == 'operations')
        @php($tab = 'operations')        
    @endif

    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="{{ $tab == 'orders' ? 'active' : '' }}"><a href="#ordersTab" data-toggle="tab"
                    aria-expanded="true">Orders</a></li>

            @role('super-admin')
                <li class="{{ $tab == 'operations' ? 'active' : '' }}"><a href="#operationsTab" data-toggle="tab"
                    aria-expanded="false">Operations</a></li>
            @endrole
        </ul>


        <div class="tab-content">


            <div class="tab-pane {{ $tab == 'orders' ? ' active' : '' }}" id="ordersTab">



                <div class="box">

                    <div class="box-header">
                        <h3 class="box-title">List of Orders by {{ $user->fullName }}</h3>

                        {{-- <div class="box-tools">
                            {{ $paginatedReservations->links() }}
                        </div>

                        <script>
                            var x = document.getElementsByClassName("pagination");
                            for (i = 0; i < x.length; i++) { x[i].className += " pagination-sm no-margin pull-right"; }
                        </script> --}}

                    </div>
                    <!-- /.box-header -->

                    @include('admins.order_list_box_body')
                
                </div>
    
            </div>
            <!-- /.tab-pane -->

            @role('super-admin')
                <div class="tab-pane {{ $tab == 'operations' ? ' active' : '' }}" id="operationsTab">

                    @if(session()->has('message'))
                    <div class="alert alert-primary" role="alert">
                        {{ session()->get('message') }}
                    </div>
                    @endif



                    <h5>Assign a Role</h5>

                    <form class="form-horizontal" method="post" action="{{ route('admins.attach.role', $user->id) }}">
                        @csrf

                        <div class="form-group">
                            <label for="role_id" class="col-sm-2 control-label">Select a role</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="role_id">
                                    @foreach($roles as $role)
                                    @if($user->hasRole($role->name) == false)
                                    <option value="{{ $role->id }}"> {{ ucwords($role->name) }} </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">Admin Password</label>

                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" placeholder=""
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </div>
                    </form>


                    <h5>Detach a Role</h5>

                    <form class="form-horizontal" method="post" action="{{ route('admins.detach.role', $user->id) }}">
                        @csrf

                        <div class="form-group">
                            <label for="role_id" class="col-sm-2 control-label">Select a role</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="role_id">
                                    @foreach($user->roles as $role)
                                    @if($role->name != 'customer')
                                    <option value="{{ $role->id }}"> {{ ucwords($role->name) }} </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">Admin Password</label>

                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" placeholder=""
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>

            @endrole



        </div>
        <!-- /.tab-content -->

    </div>
    <!-- /.nav-tabs-custom -->

</div>