<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body>
@include('layouts.nav')


@yield('content')



@include('layouts.footer')

@include('layouts.script')

@yield('js')

</body>

</html>