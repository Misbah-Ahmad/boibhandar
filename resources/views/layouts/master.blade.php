<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body>
<script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=2494939823871266&autoLogAppEvents=1">
</script>

@include('layouts.nav')


@yield('content')



@include('layouts.footer')

@include('layouts.script')

@yield('js')

</body>

</html>