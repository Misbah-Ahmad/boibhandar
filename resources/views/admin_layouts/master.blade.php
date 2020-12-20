@include('admin_layouts.header')

@include('admin_layouts.nav_and_sidebar')


<div class="content-wrapper" style="background-image: url('/admin/admin_img/bg.jpg'); background-size: cover;">


    @yield('main-content')


</div>


@include('admin_layouts.footer')