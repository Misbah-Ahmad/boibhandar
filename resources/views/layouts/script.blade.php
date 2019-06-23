<script src="/js/vendor.min.js"></script>
<script src="/js/theme.min.js"></script>
<script src="{{ mix('/js/ops/add_to_cart.js') }}"></script>
<script src="{{ mix('/js/ops/wishlist.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js"></script>
<script>
    var lazyLoadInstance = new LazyLoad({
        elements_selector: ".lazy"
    });
</script>

<script type="text/javascript">
  var today = new Date();
  var year = today.getFullYear();

  var el = document.getElementById('year');

  el.innerHTML = year;
</script>



<script>
    $(document).ready(function($) {
              $('.fadeOut').owlCarousel({
                items: 1,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                loop: true,
                margin: 10,
                items: 1,
                margin: 30,
                stagePadding: 30,
                smartSpeed: 450,
                autoplay: true,
                pullDrag: false,
                autoplayTimeout: 4000,
                touchDrag: true,
                mouseDrag: true,
                dots: true,
                nav: false
              });
            });
</script>

<script src="{{ mix('/js/ops/search.js') }}"></script>