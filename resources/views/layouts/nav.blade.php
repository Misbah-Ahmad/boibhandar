
    <!-- Google Tag Manager (noscript)-->
    <noscript>
    	<!--[Add] google tag noscript here-->
      <iframe src="#" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Off-Canvas Menu-->
    <div class="offcanvas-container is-triggered offcanvas-container-reverse" id="mobile-menu"><span class="offcanvas-close"><i class="fe-icon-x"></i></span>
        <div class="px-4 pb-4">
            <h6>Menu</h6>
            <div class="d-flex justify-content-between pt-2">
                <a class="btn btn-primary btn-sm btn-block" href="#"><i class="fe-icon-user"></i>&nbsp;Login</a>
            </div>
        </div>
        <div class="offcanvas-scrollable-area border-top" style="height:calc(100% - 235px); top: 144px;">
            <!-- Mobile Menu-->
            <div class="accordion mobile-menu" id="accordion-menu">
                <!-- Home-->
                <div class="card">
                    <div class="card-header">
                        <a class="mobile-menu-link active" href="/">Books</a>
                    </div>

                </div>
                <!-- Portfolio-->
                <div class="card">
                    <div class="card-header"><a class="mobile-menu-link" href="#">Authors</a></div>
                </div>
                <!-- Blog-->
                <div class="card">
                    <div class="card-header"><a class="mobile-menu-link" href="#">Publishers</a></div>
                </div>
                <!-- Shop-->
                <div class="card">
                    <div class="card-header"><a class="mobile-menu-link" href="#">Best Seller</a></div>
                </div>
                <!-- Account-->
                {{-- <div class="card">
                    <div class="card-header"><a class="mobile-menu-link" href="#">Pre-Order</a></div>
                </div> --}}
                <!-- Pages-->
{{--                 <div class="card">
                    <div class="card-header"><a class="mobile-menu-link" href="#">Send Gifts</a></div>
                </div> --}}
                <!-- Components-->
{{--                 <div class="card">
                    <div class="card-header"><a class="mobile-menu-link" href="#">Blog</a></div>
                </div> --}}
            </div>
        </div>
        <div class="offcanvas-footer px-4 pt-3 pb-2 text-center">
            <a class="social-btn sb-style-3 sb-twitter" href="#"><i class="socicon-twitter"></i></a>
            <a class="social-btn sb-style-3 sb-facebook" href="#"><i class="socicon-facebook"></i></a>
            <a class="social-btn sb-style-3 sb-pinterest" href="#"><i class="socicon-pinterest"></i></a>
            <a class="social-btn sb-style-3 sb-instagram" href="#"><i class="socicon-instagram"></i></a>
        </div>
    </div>

    <!-- Navbar-->
    <header class="navbar-wrapper navbar-sticky">
        <div class="d-table-cell align-middle pr-md-3"><a class="navbar-brand mr-1" href="/"><img src="/images/logo/logo.png" style="width:40px;height:40px;" alt="Boibhandar"/></a></div>
        <div class="d-table-cell w-100 align-middle pl-md-3">
            <!--         <div class="navbar-top d-none d-lg-flex justify-content-between align-items-center">
          <div>
            <ul class="list-inline mb-0">
              <li class="dropdown-toggle mr-2"><a class="navbar-link" href="account-login.html"><i class="fe-icon-user"></i>Login or Create account</a>
                <div class="dropdown-menu right-aligned p-3 text-center" style="min-width: 200px;">
                  <p class="text-sm opacity-70">Sign in to your account or register new one to have full control over your orders, receive bonuses and more.</p><a class="btn btn-primary btn-sm btn-block" href="account-login.html">Sign In</a>
                  <p class="text-sm text-muted mt-3 mb-0">New customer? <a href='account-login.html'>Register</a></p>
                </div>
              </li>
            </ul>
          </div>
        </div> -->
            <div class="navbar justify-content-end justify-content-lg-between">
                <!-- Search-->
                <form class="search-box" method="get">
                    <input type="text" id="site-search" placeholder="Type A or C to see suggestions"><span class="search-close"><i class="fe-icon-x"></i></span>
                </form>
                <!-- Main Menu-->
                <ul class="navbar-nav d-none d-lg-block">
                    <!-- Home-->
                    <li class="nav-item">
                        <a class="nav-link" href="/">Books</a>
                    </li>
                    <!-- Nav Item-->
                    <li class="nav-item"><a class="nav-link" href="#">Authors</a></li>
                    <!-- Nav Item-->
                    <li class="nav-item"><a class="nav-link" href="#">Publishers</a></li>
                    <!-- Nav Item-->
                    <li class="nav-item"><a class="nav-link" href="#">Best Seller</a></li>
                    <!-- Nav Item-->
                    {{-- <li class="nav-item"><a class="nav-link" href="#">Pre-Order</a></li> --}}
                    <!-- Nav Item-->
                    {{-- <li class="nav-item"><a class="nav-link" href="#">Send Gifts</a></li> --}}
                    <!-- Nav Item-->
                    {{-- <li class="nav-item"><a class="nav-link" href="#">Blog</a></li> --}}
                </ul>
                <div>
                    <ul class="navbar-buttons d-inline-block align-middle mr-lg-2">
                        <li>
                            <a href="#" data-toggle="search"><i class="fe-icon-search"></i></a>
                        </li>

                        <li>
                            <a href=" {{ route('carts.show') }} "><i class="fe-icon-shopping-cart"></i></a>
                            <span id="cartIcon" class="badge badge-danger">{{ count($cart_books) > 0 ? count($cart_books) : '' }}</span>
                        </li>

                        <li class="d-block d-lg-none">
                            <a href="#mobile-menu" data-toggle="offcanvas"><i class="fe-icon-menu"></i></a>
                        </li>

                    </ul>

                    @guest
                        <a class="btn btn-style-6 btn-primary ml-3 d-none d-xl-inline-block" href="{{ route('login') }}"><i class="fe-icon-user"></i>Login</a>
                        <script>window.loggedIn = false</script>
                    @else
                        <script>window.loggedIn = true</script>
                        <a class="btn btn-style-6 btn-primary ml-3 d-none d-xl-inline-block" href="{{ route('dash') }}"><i class="fe-icon-user"></i>Account</a>
                        <a class="btn btn-style-6 btn-primary ml-3 d-none d-xl-inline-block" onclick="event.preventDefault(); document.querySelector('#logoutForm').submit();"><i class="fe-icon-user"></i>Logout</a>
                        <form style="display:none;" id="logoutForm" method="POST" action="{{ route('logout') }}">
                            @csrf
                        </form>
                    @endguest



                
                </div>
            </div>
        </div>
    </header>