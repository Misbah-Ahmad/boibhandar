<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '2494939823871266',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v3.3'
    });
  };
</script>
<script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>

<script>
  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-customerchat"
  attribution=setup_tool
  page_id="539919759792664"
  theme_color="#ff6700"
  logged_in_greeting="Hi! You Can Chat With Us Using Your Facebook Account."
  logged_out_greeting="Hi! Please Log Into Your Facebook Account To Get Live Support.">
</div>

@include('layouts.nav')


@yield('content')



@include('layouts.footer')

@include('layouts.script')

@yield('js')

</body>

</html>