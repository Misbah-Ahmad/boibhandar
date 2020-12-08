<body class="hold-transition skin-purple sidebar-mini">
    <div class="wrapper">

        <header class="main-header">

            <!-- Logo -->
            <a href="/" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><img src="/admin/admin_img/logo.png" style="height: 50px; width: 50px;"></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Boibhandar</b>Admin</span>
            </a>

            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
            </nav>


        </header>



        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <section class="sidebar">


                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="/admin/admin_img/admin.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p> {{ ucwords($admin->fullName) }} </p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- Sidebar search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>


                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active treeview menu-open">

                        <ul style="font-weight: 700;" class="treeview-menu">
                            <li class="active"><a href="/admin/dash"><i class="fa fa-circle-o"></i>Dashboard</a></li>
                            <li class="active"><a href="{{ route('uploads.create') }}"><i class="fa fa-circle-o"></i>Uploads</a></li>
                            <li class="active"><a href="{{ route('admins.users') }}"><i class="fa fa-circle-o"></i>Customers</a></li>
                            <li class="active"><a href="{{ route('admins.orders') }}"><i class="fa fa-circle-o"></i>Orders</a></li>
                            <li class="active"><a href="{{ route('admins.creator') }}"><i class="fa fa-circle-o"></i>Creators</a></li>
                            <li class="active"><a href="{{ route('admins.deliveryvendor.index') }}"><i class="fa fa-circle-o"></i>Delivery Vendors</a></li>


                        </ul>
                    </li>
                </ul>


            </section>

        </aside>