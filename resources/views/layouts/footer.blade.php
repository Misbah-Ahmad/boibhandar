<!-- Footer-->
<footer class="bg-custom pt-5">
        <!-- First Row-->
        <div class="container pt-2">
            <div class="row">
                <!-- Shop Departments-->
                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget-light-skin mb-0">
                        <h4 class="widget-title">Shop Books By</h4>
                    </div>
                    <div class="widget widget-categories widget-light-skin">
                        <ul>
                            <li><a href="{{ route('authors.index') }}">Authors</a></li>
                            <li><a href="{{ route('publishers.index') }}">Publishers</a></li>
                            <li><a href="{{ route('categories.index') }}">Categories</a></li>
                        </ul>
                    </div>
                </div>
                <!-- About Links-->
                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget-categories widget-light-skin">
                        <h4 class="widget-title">About us</h4>
                        <ul>
                            <li><a href="{{ route('about') }}">About Boibhandar</a></li>
                            <li><a href="{{ route('about') }}">Contacts</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <!-- About Links-->
                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget-categories widget-light-skin">
                        <h4 class="widget-title">Support</h4>
                        <ul>
                            <li><a href="{{ route('guideline') }}">Guidelines</a></li>
                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                            <li><a href="{{ route('corporates.create') }}">Corporate Order</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Account Links-->
                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget-categories widget-light-skin">
                        <h4 class="widget-title">Account &amp; Shipping Info</h4>
                        <ul>
                            <li><a href="{{ route('terms') }}">Terms and Conditions</a></li>
                            <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                            <li><a href="#">Book Rent Policy</a></li>
                            <li><a href="#">Return Criteria</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Second Row-->
        <div class="pt-5">
            <div class="container">
                <div class="row">
    
                    <!--Boibhandar-->
                    {{-- <div class="footer-bottom-fp col-lg-4 col-md-4 col-sm-6">
                        <div class="widget widget-contacts widget-light-skin mb-4">
                            <a href="#">
                                <img src="img/logo/daanguli.png" style="width: 40%">
                                <h5 class="h5 text-white text-center pt-2">Daanguli Technologies</h5>
                                <h6 class="h6 text-white text-right">Reimagined Creativity</h6>
                            </a>
                        </div>
                    </div> --}}
    
                    <!-- Contacts-->
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="widget widget-contacts widget-light-skin mb-4">
                            <h4 class="widget-title">We're Here</h4>
                            <ul>
                                <!--                   <li>
                        <i class="fe-icon-map-pin"></i><span>Find us</span>
                        <a href="#">WASA Circle, Chattogram</a>
                      </li> -->
                                <li>
                                    <i class="fe-icon-phone"></i><span>Call us</span>
                                    <a href="tel:+8801307883288">01307 88 32 88</a>
                                </li>
                                <li>
                                    <i class="fe-icon-mail"></i><span>Write us</span>
                                    <a href="mailto:support@boibhandar.com">support@boibhandar.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
    
                    <!-- Social-->
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="widget widget-light-skin">
                            <h4 class="widget-title">We're Social, Join Us</h4>
                            <div class="widget pt-2">
                                <a class="social-btn sb-style-5 sb-facebook sb-light-skin"
                                    href="https://facebook.com/boibhandar/" target="_blank">
                                    <i class="socicon-facebook"></i>
                                </a>
                                <a class="social-btn sb-style-5 sb-twitter sb-light-skin"
                                    href="https://twitter.com/boibhandar/" target="_blank">
                                    <i class="socicon-twitter"></i>
                                </a>
                                <a class="social-btn sb-style-5 sb-youtube sb-light-skin" href="#">
                                    <i class="socicon-youtube"></i>
                                </a>
                                <a class="social-btn sb-style-5 sb-instagram sb-light-skin"
                                    href="https://instagram.com/boibhandar/" target="_blank">
                                    <i class="socicon-instagram"></i>
                                </a>
                                <a class="social-btn sb-style-5 sb-linkedin sb-light-skin" href="#">
                                    <i class="socicon-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
    
                </div>
                <hr class="hr-light">
                <div class="justify-content-between align-items-center py-4 text-center">
                    <p class="m-0 text-sm text-white order-1">
                        <span class='opacity-60'>© 2018 - <span id="year"> </span> Boibhandar.com | All rights
                            reserved.</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>
<!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="fe-icon-chevron-up"></i></a>
<!-- Backdrop-->
<div class="site-backdrop"></div>



