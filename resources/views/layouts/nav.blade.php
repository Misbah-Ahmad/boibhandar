
    <!-- Google Tag Manager (noscript)-->
    <noscript>
    	<!--[Add] google tag noscript here-->
      <iframe src="#" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Off-Canvas Menu-->
    <div class="offcanvas-container is-triggered offcanvas-container-reverse" id="mobile-menu"><span class="offcanvas-close"><i class="fe-icon-x"></i></span>
        <div class="px-4 pb-4">
            <h6>Menu</h6>
            @guest
                <div class="d-flex justify-content-between pt-2">
                    <a class="btn btn-primary btn-sm btn-block" href="\login"><i class="fe-icon-lock"></i>&nbsp;Login</a>
                    <script>window.loggedIn = false;</script>
                </div>
            @else
                    <script>window.loggedIn = true;</script>
                
                <div class="d-flex justify-content-between pt-2">
                <a class="btn btn-primary btn-sm" href="{{ route('dash') }}"><i class="fe-icon-user"></i>&nbsp;Account</a>
                <a class="btn btn-primary btn-sm" onclick="event.preventDefault(); document.querySelector('#logoutForm').submit();"><i class="fe-icon-log-out"></i>&nbsp;Logout</a>
                </div>                
                
            @endguest
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
                    <div class="card-header"><a class="mobile-menu-link" href="/authors">Authors</a></div>
                </div>
                <!-- Blog-->
                <div class="card">
                    <div class="card-header"><a class="mobile-menu-link" href="/publishers">Publishers</a></div>
                </div>
                <div class="card">
                    <div class="card-header"><a class="mobile-menu-link" href="/categories">Categories</a></div>
                </div>
                <div class="card">
                    <div class="card-header"><a class="mobile-menu-link" href="{{ route('corporates.create') }}">Corporate Order</a></div>
                </div>


                <!-- Shop-->
                {{-- <div class="card">
                    <div class="card-header"><a class="mobile-menu-link" href="#">Best Seller</a></div>
                </div> --}}
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

        {{-- <div class="offcanvas-footer px-4 pt-3 pb-2 text-center">
            <a class="social-btn sb-style-3 sb-twitter" href="#"><i class="socicon-twitter"></i></a>
            <a class="social-btn sb-style-3 sb-facebook" href="#"><i class="socicon-facebook"></i></a>
            <a class="social-btn sb-style-3 sb-pinterest" href="#"><i class="socicon-pinterest"></i></a>
            <a class="social-btn sb-style-3 sb-instagram" href="#"><i class="socicon-instagram"></i></a>
        </div> --}}
    
    </div>

    <!-- Navbar-->
    <header class="navbar-wrapper navbar-sticky">
        <div class="d-table-cell align-middle pr-md-3"><a class="navbar-brand mr-1" href="/"><img src="/images/logo.svg" style="width:110px;height:60px;" alt="Boibhandar"/></a></div>
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
                {{-- <form class="search-box" method="get">
                    <input type="text" id="site-search" placeholder="Type A or C to see suggestions"><span class="search-close"><i class="fe-icon-x"></i></span>
                </form> --}}
                <!-- Main Menu-->
                <ul class="navbar-nav d-none d-lg-block">
                    <!-- Home-->
                    <li class="nav-item">
                        <a class="nav-link" href="/">Books</a>
                    </li>
                    <!-- Nav Item-->
                    <li class="nav-item"><a class="nav-link" href="{{ route('authors.index') }}">Authors</a></li>
                    <!-- Nav Item-->
                    <li class="nav-item"><a class="nav-link" href="{{ route('publishers.index') }}">Publishers</a></li>
                    <!-- Nav Item-->
                    <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}">Categories</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('corporates.create') }}">Corporate Order</a></li>
                </ul>



                <ul class="navbar-buttons d-inline-block align-middle">
                    {{-- <li class="nav-icon-custom">
                        <a href="#" data-toggle="search"><i class="fe-icon-search"></i></a>
                    </li> --}}
                    
                    <li class="nav-icon-custom">
                        <a href=" {{ route('carts.show') }} "><i class="fe-icon-shopping-cart"></i></a>
                        <span id="cartIcon" class="badge badge-danger">{{ $cookie_count > 0 ? $cookie_count : '' }}</span>
                    </li>

                    <li class="d-block d-lg-none nav-icon-custom">
                        <a href="#mobile-menu" data-toggle="offcanvas"><i class="fe-icon-menu"></i></a>
                    </li>

                    @guest

                        <li class="nav-icon-custom">
                            <a class="" href="{{ route('login') }}"><i class="fe-icon-lock"></i> Login</a>
                            <script>window.loggedIn = false</script>                                
                        </li>

                    @else
                        <script>window.loggedIn = true;</script>
                        <li class="nav-icon-custom nav-profile dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" data-toggle="dropdown">
                                <img src="/images/users/profile_dummy.jpg" class="avatar rounded-circle" alt="" />

                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('dash') }}"><i class="fe-icon-user"></i>Profile</a>
                                <a class="dropdown-item" onclick="event.preventDefault(); document.querySelector('#logoutForm').submit();" style="cursor:pointer;"><i class="fe-icon-log-out"></i>Logout</a>

                                <form style="display:none;" id="logoutForm" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                </form>


                            </div>
                        </li>
                        
                    @endguest



                </ul>

            </div>
        </div>
    </header>