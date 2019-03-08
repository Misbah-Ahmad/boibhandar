@extends('layouts.master')

@section('content')


<section class="featured-posts-slider d-lg-flex">
    <div class="owl-carousel dots-inside home-img-carousel" data-owl-carousel='{ "nav": false, "dots": true, "loop": true, "mouseDrag": true, "touchDrag": true, "pullDrag": false, "autoplay": true, "autoplayTimeout": 4000 }'>
        <a class="post-preview-img" href="#"><img src="/images/components/carousel/04.jpg" alt="Carousel Image"/></a>
        <a class="post-preview-img" href="#"><img src="/images/components/carousel/05.jpg" alt="Carousel Image"/></a>
        <a class="post-preview-img" href="#"><img src="/images/components/carousel/06.jpg" alt="Carousel Image"/></a>
    </div>
</section>







<!-- Top Categories-->
<section class="container mobile-disable pb-3 mt-3">
    <div class="row pt-3 pb-4">
        <!-- Product category-->
        <div class="col-md-4">
            <a class="product-category-card mx-auto" href="#">
                <div class="product-category-card-thumb">
                    <div class="main-img">
                        <img src="/images/components/category/sba.svg" alt="Shop Category" />
                    </div>
                    <div class="product-category-card-body">
                        <h5 class="product-category-card-title">Shop By Authors</h5>
                        <div class="product-category-card-meta">Browse your favorite authors</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- Product category-->
        <div class="col-md-4">
            <a class="product-category-card mx-auto" href="#">
                <div class="product-category-card-thumb">
                    <div class="main-img">
                        <img src="/images/components/category/sbc.svg" alt="Shop Category" />
                    </div>
                    <div class="product-category-card-body">
                        <h5 class="product-category-card-title">Shop By Categories</h5>
                        <div class="product-category-card-meta">Browse your favorite categories</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- Product category-->
        <div class="col-md-4">
            <a class="product-category-card mx-auto" href="#">
                <div class="product-category-card-thumb">
                    <div class="main-img">
                        <img src="/images/components/category/sbp.svg" alt="Shop Category" /></div>
                    <div class="product-category-card-body">
                        <h5 class="product-category-card-title">Shop By Publishers</h5>
                        <div class="product-category-card-meta">Browse your favorite publishers</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- <div class="text-center"><a class="btn btn-style-5 btn-primary" href="#">See All Books</a></div> -->
</section>
<!-- Promo #1-->
<!--     <section class="container-fluid pt-5">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 mb-30">
          <div class="bg-secondary position-relative pb-5"><span class="badge badge-danger mt-4 ml-4">Limited Offer</span>
            <div class="text-center pt-4">
              <h3 class="font-family-body font-weight-light mb-2">All new</h3>
              <h2 class="mb-2 pb-1">MacBook Pro 2018</h2>
              <h5 class="font-family-body font-weight-light mb-5">at discounted price. Hurry up!</h5>
              <div class="countdown countdown-style-2 h4 mb-3" data-date-time="10/10/2020 12:00" data-labels="{&quot;label-day&quot;: &quot;Days&quot;, &quot;label-hour&quot;: &quot;Hours&quot;, &quot;label-minute&quot;: &quot;Mins&quot;, &quot;label-second&quot;: &quot;Secs&quot;}"></div><br><a class="btn btn-style-5 btn-gradient mb-3" href="#">View Offers</a>
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-lg-6 d-none d-lg-block mb-30"><a class="img-cover" href="#" style="background-image: url(/images/homepages/shop-v1/banner01.jpg);"></a></div>
      </div>
    </section> -->
<!-- Promo #2-->
<!--     <section class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-10 bg-center bg-no-repeat"><a class="d-block" href="#"><img class="d-block" src="/images/homepages/shop-v1/banner02.jpg" alt="Surface Studio"></a></div>
      </div>
    </section> -->

<!-- Best Seller Products-->
<section class="container py-6 mb-4 best-seller-home">
    <h2 class="h4 block-title text-left pt-3">Best Seller Books</h2>
    <div class="row pt-4">
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-xs-4 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head d-flex justify-content-between align-items-center"><span class="badge badge-danger">Sale</span>
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg"" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">স্টুডেন্ট হ্যাকস</a></h5>
                    <a class="product-meta" href="#">আয়মান সাদিক</a>
                    <span class="product-price"><del>TK. 300</del>TK. 225</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-xs-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Ami Gorib</a></h5>
                    <a class="product-meta" href="#">Irfanul Kalam Chy</a>
                    <span class="product-price">TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-xs-4 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head"><span class="badge badge-secondary">Out of Stock</span></div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Vallagena</a></h5>
                    <a class="product-meta" href="#">Antik Mahmud</a>
                    <span class="product-price">TK. 350</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-xs-4 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Himu</a></h5>
                    <a class="product-meta" href="#">Humayan Ahmed</a>
                    <span class="product-price">TK. 400</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-xs-4 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars">
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Deyal</a></h5>
                    <a class="product-meta" href="#">Humayan Ahmed</a>
                    <span class="product-price">TK. 300</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-xs-4 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head d-flex justify-content-between align-items-center"><span class="badge badge-success">Popular</span>
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Peraboti</a></h5>
                    <a class="product-meta" href="#">Yamin Sobhan</a>
                    <span class="product-price">TK. 300</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-xs-4 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Shopner Army</a></h5>
                    <a class="product-meta" href="#">Foyzul Abrar Chy</a>
                    <span class="product-price">TK. 300</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-xs-4 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head"><span class="badge badge-danger">Sale</span></div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Relatively Relatives</a></h5>
                    <a class="product-meta" href="#">Misbah Ahmad Chy Fahim</a>
                    <span class="product-price"><del>TK. 300</del>TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-7"><a class="btn btn-primary" href="#">See More</a></div>
</section>











<!-- Best Seller Products-->
<section class="container py-6 mb-4 best-seller-home">
    <h2 class="h4 block-title text-left pt-3">Best Seller Books</h2>
    <div class="row pt-4">
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head d-flex justify-content-between align-items-center"><span class="badge badge-danger">Sale</span>
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg"" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">স্টুডেন্ট হ্যাকস</a></h5>
                    <a class="product-meta" href="#">আয়মান সাদিক</a>
                    <span class="product-price"><del>TK. 300</del>TK. 225</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Ami Gorib</a></h5>
                    <a class="product-meta" href="#">Irfanul Kalam Chy</a>
                    <span class="product-price">TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Shopner Army</a></h5>
                    <a class="product-meta" href="#">Foyzul Abrar Chy</a>
                    <span class="product-price">TK. 300</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head"><span class="badge badge-danger">Sale</span></div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Relatively Relatives</a></h5>
                    <a class="product-meta" href="#">Misbah Ahmad Chy Fahim</a>
                    <span class="product-price"><del>TK. 300</del>TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-7"><a class="btn btn-primary" href="#">See More</a></div>
</section>







<!-- Top Authors -->
<section class="container py-6 mb-4 top-authors">
    <h2 class="h4 block-title text-left pt-3">Top Authors</h2>
    <div class="row">
        <!-- Product-->
        <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="top-authors-card mx-auto">
                <a class="top-authors-thumb" href="#">
              <img src="/images/author/01.jpg"" alt=""/>
              <p class="top-authors-title">Ayman Sadik</p>
            </a>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="top-authors-card mx-auto">
                <a class="top-authors-thumb" href="#">
              <img src="/images/author/02.jpg" alt=""/>
              <p class="top-authors-title">মুহম্মদ জাফর ইকবাল</p>
            </a>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="top-authors-card mx-auto">
                <a class="top-authors-thumb" href="#">
              <img src="/images/author/03.jpg" alt=""/>
              <p class="top-authors-title">Humayan Ahmed</p>
            </a>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="top-authors-card mx-auto">
                <a class="top-authors-thumb" href="#">
              <img src="/images/author/01.jpg" alt="Product Thumbnail"/>
              <p class="top-authors-title">Ayman Sadik</p>
            </a>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="top-authors-card mx-auto">
                <a class="top-authors-thumb" href="#">
              <img src="/images/author/03.jpg" alt="Product Thumbnail"/>
              <p class="top-authors-title">Ayman Sadik</p>
            </a>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="top-authors-card mx-auto">
                <a class="top-authors-thumb" href="#">
              <img src="/images/author/02.jpg" alt="Product Thumbnail"/>
              <p class="top-authors-title">Ayman Sadik</p>
            </a>
            </div>
        </div>

    </div>
    <div class="text-center pt-7"><a class="btn btn-primary" href="#">See More</a></div>
</section>









<!-- Best Seller Products-->
<section class="container py-6 mb-4 best-seller-home">
    <h2 class="h4 block-title text-left pt-3">বইমেলা ২০১৯ এর বইসমূহ</h2>
    <div class="row pt-4">
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head d-flex justify-content-between align-items-center"><span class="badge badge-danger">Sale</span>
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg"" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">স্টুডেন্ট হ্যাকস</a></h5>
                    <a class="product-meta" href="#">আয়মান সাদিক</a>
                    <span class="product-price"><del>TK. 300</del>TK. 225</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Ami Gorib</a></h5>
                    <a class="product-meta" href="#">Irfanul Kalam Chy</a>
                    <span class="product-price">TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Shopner Army</a></h5>
                    <a class="product-meta" href="#">Foyzul Abrar Chy</a>
                    <span class="product-price">TK. 300</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head"><span class="badge badge-danger">Sale</span></div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Relatively Relatives</a></h5>
                    <a class="product-meta" href="#">Misbah Ahmad Chy Fahim</a>
                    <span class="product-price"><del>TK. 300</del>TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-7"><a class="btn btn-primary" href="#">See More</a></div>
</section>










<!-- Best Seller Products-->
<section class="container py-6 mb-4 best-seller-home">
    <h2 class="h4 block-title text-left pt-3">শিশু-কিশোর বই সমূহ</h2>
    <div class="row pt-4">
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head d-flex justify-content-between align-items-center"><span class="badge badge-danger">Sale</span>
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg"" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">স্টুডেন্ট হ্যাকস</a></h5>
                    <a class="product-meta" href="#">আয়মান সাদিক</a>
                    <span class="product-price"><del>TK. 300</del>TK. 225</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Ami Gorib</a></h5>
                    <a class="product-meta" href="#">Irfanul Kalam Chy</a>
                    <span class="product-price">TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Shopner Army</a></h5>
                    <a class="product-meta" href="#">Foyzul Abrar Chy</a>
                    <span class="product-price">TK. 300</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head"><span class="badge badge-danger">Sale</span></div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Relatively Relatives</a></h5>
                    <a class="product-meta" href="#">Misbah Ahmad Chy Fahim</a>
                    <span class="product-price"><del>TK. 300</del>TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-7"><a class="btn btn-primary" href="#">See More</a></div>
</section>









<!-- Best Seller Products-->
<section class="container py-6 mb-4 best-seller-home">
    <h2 class="h4 block-title text-left pt-3">রহস্য, ভৌতিক, থ্রিলার ও অ্যাডভেঞ্চার বইসমূহ</h2>
    <div class="row pt-4">
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head d-flex justify-content-between align-items-center"><span class="badge badge-danger">Sale</span>
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg"" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">স্টুডেন্ট হ্যাকস</a></h5>
                    <a class="product-meta" href="#">আয়মান সাদিক</a>
                    <span class="product-price"><del>TK. 300</del>TK. 225</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Ami Gorib</a></h5>
                    <a class="product-meta" href="#">Irfanul Kalam Chy</a>
                    <span class="product-price">TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#l"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Shopner Army</a></h5>
                    <a class="product-meta" href="#">Foyzul Abrar Chy</a>
                    <span class="product-price">TK. 300</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head"><span class="badge badge-danger">Sale</span></div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Relatively Relatives</a></h5>
                    <a class="product-meta" href="#">Misbah Ahmad Chy Fahim</a>
                    <span class="product-price"><del>TK. 300</del>TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-7"><a class="btn btn-primary" href="#">See More</a></div>
</section>






<!-- Best Seller Products-->
<section class="container py-6 mb-4 best-seller-home">
    <h2 class="h4 block-title text-left pt-3">সায়েন্স ফিকশন বইসমুহ</h2>
    <div class="row pt-4">
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head d-flex justify-content-between align-items-center"><span class="badge badge-danger">Sale</span>
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg"" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">স্টুডেন্ট হ্যাকস</a></h5>
                    <a class="product-meta" href="#">আয়মান সাদিক</a>
                    <span class="product-price"><del>TK. 300</del>TK. 225</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Ami Gorib</a></h5>
                    <a class="product-meta" href="#">Irfanul Kalam Chy</a>
                    <span class="product-price">TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Shopner Army</a></h5>
                    <a class="product-meta" href="#">Foyzul Abrar Chy</a>
                    <span class="product-price">TK. 300</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head"><span class="badge badge-danger">Sale</span></div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Relatively Relatives</a></h5>
                    <a class="product-meta" href="#">Misbah Ahmad Chy Fahim</a>
                    <span class="product-price"><del>TK. 300</del>TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-7"><a class="btn btn-primary" href="#">See More</a></div>
</section>








<!-- Best Seller Products-->
<section class="container py-6 mb-4 best-seller-home">
    <h2 class="h4 block-title text-left pt-3">গল্পের বইসমূহ</h2>
    <div class="row pt-4">
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head d-flex justify-content-between align-items-center"><span class="badge badge-danger">Sale</span>
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg"" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">স্টুডেন্ট হ্যাকস</a></h5>
                    <a class="product-meta" href="#">আয়মান সাদিক</a>
                    <span class="product-price"><del>TK. 300</del>TK. 225</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Ami Gorib</a></h5>
                    <a class="product-meta" href="#">Irfanul Kalam Chy</a>
                    <span class="product-price">TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Shopner Army</a></h5>
                    <a class="product-meta" href="#">Foyzul Abrar Chy</a>
                    <span class="product-price">TK. 300</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head"><span class="badge badge-danger">Sale</span></div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Relatively Relatives</a></h5>
                    <a class="product-meta" href="#">Misbah Ahmad Chy Fahim</a>
                    <span class="product-price"><del>TK. 300</del>TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-7"><a class="btn btn-primary" href="#">See More</a></div>
</section>







<!-- Best Seller Products-->
<section class="container py-6 mb-4 best-seller-home">
    <h2 class="h4 block-title text-left pt-3">প্রোগ্রামিং ও আউটসোর্সিং এর বইসমূহ</h2>
    <div class="row pt-4">
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head d-flex justify-content-between align-items-center"><span class="badge badge-danger">Sale</span>
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg"" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">স্টুডেন্ট হ্যাকস</a></h5>
                    <a class="product-meta" href="#">আয়মান সাদিক</a>
                    <span class="product-price"><del>TK. 300</del>TK. 225</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Ami Gorib</a></h5>
                    <a class="product-meta" href="#">Irfanul Kalam Chy</a>
                    <span class="product-price">TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Shopner Army</a></h5>
                    <a class="product-meta" href="#">Foyzul Abrar Chy</a>
                    <span class="product-price">TK. 300</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head"><span class="badge badge-danger">Sale</span></div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Relatively Relatives</a></h5>
                    <a class="product-meta" href="#">Misbah Ahmad Chy Fahim</a>
                    <span class="product-price"><del>TK. 300</del>TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-7"><a class="btn btn-primary" href="#">See More</a></div>
</section>







<!-- Best Seller Products-->
<section class="container py-6 mb-4 best-seller-home">
    <h2 class="h4 block-title text-left pt-3">আত্ম-উন্নয়নমূলক বইসমূহ</h2>
    <div class="row pt-4">
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head d-flex justify-content-between align-items-center"><span class="badge badge-danger">Sale</span>
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg"" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">স্টুডেন্ট হ্যাকস</a></h5>
                    <a class="product-meta" href="#">আয়মান সাদিক</a>
                    <span class="product-price"><del>TK. 300</del>TK. 225</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Ami Gorib</a></h5>
                    <a class="product-meta" href="#">Irfanul Kalam Chy</a>
                    <span class="product-price">TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Shopner Army</a></h5>
                    <a class="product-meta" href="#">Foyzul Abrar Chy</a>
                    <span class="product-price">TK. 300</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head"><span class="badge badge-danger">Sale</span></div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Relatively Relatives</a></h5>
                    <a class="product-meta" href="#">Misbah Ahmad Chy Fahim</a>
                    <span class="product-price"><del>TK. 300</del>TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-7"><a class="btn btn-primary" href="#">See More</a></div>
</section>





<!-- Best Seller Products-->
<section class="container py-6 mb-4 best-seller-home">
    <h2 class="h4 block-title text-left pt-3">ইসলামি বইসমূহ</h2>
    <div class="row pt-4">
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head d-flex justify-content-between align-items-center"><span class="badge badge-danger">Sale</span>
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg"" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">স্টুডেন্ট হ্যাকস</a></h5>
                    <a class="product-meta" href="#">আয়মান সাদিক</a>
                    <span class="product-price"><del>TK. 300</del>TK. 225</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Ami Gorib</a></h5>
                    <a class="product-meta" href="#">Irfanul Kalam Chy</a>
                    <span class="product-price">TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Shopner Army</a></h5>
                    <a class="product-meta" href="#">Foyzul Abrar Chy</a>
                    <span class="product-price">TK. 300</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head"><span class="badge badge-danger">Sale</span></div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Relatively Relatives</a></h5>
                    <a class="product-meta" href="#">Misbah Ahmad Chy Fahim</a>
                    <span class="product-price"><del>TK. 300</del>TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-7"><a class="btn btn-primary" href="#">See More</a></div>
</section>






<!-- Best Seller Products-->
<section class="container py-6 mb-4 best-seller-home">
    <h2 class="h4 block-title text-left pt-3">নির্বাচিত বিদেশি বইসমূহ</h2>
    <div class="row pt-4">
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head d-flex justify-content-between align-items-center"><span class="badge badge-danger">Sale</span>
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg"" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">স্টুডেন্ট হ্যাকস</a></h5>
                    <a class="product-meta" href="#">আয়মান সাদিক</a>
                    <span class="product-price"><del>TK. 300</del>TK. 225</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Ami Gorib</a></h5>
                    <a class="product-meta" href="#">Irfanul Kalam Chy</a>
                    <span class="product-price">TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Shopner Army</a></h5>
                    <a class="product-meta" href="#">Foyzul Abrar Chy</a>
                    <span class="product-price">TK. 300</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head"><span class="badge badge-danger">Sale</span></div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Relatively Relatives</a></h5>
                    <a class="product-meta" href="#">Misbah Ahmad Chy Fahim</a>
                    <span class="product-price"><del>TK. 300</del>TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-7"><a class="btn btn-primary" href="#">See More</a></div>
</section>







<!-- Best Seller Products-->
<section class="container py-6 mb-4 best-seller-home">
    <h2 class="h4 block-title text-left pt-3">উপন্যাসের বইসমূহ</h2>
    <div class="row pt-4">
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head d-flex justify-content-between align-items-center"><span class="badge badge-danger">Sale</span>
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg"" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">স্টুডেন্ট হ্যাকস</a></h5>
                    <a class="product-meta" href="#">আয়মান সাদিক</a>
                    <span class="product-price"><del>TK. 300</del>TK. 225</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Ami Gorib</a></h5>
                    <a class="product-meta" href="#">Irfanul Kalam Chy</a>
                    <span class="product-price">TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Shopner Army</a></h5>
                    <a class="product-meta" href="#">Foyzul Abrar Chy</a>
                    <span class="product-price">TK. 300</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head"><span class="badge badge-danger">Sale</span></div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Relatively Relatives</a></h5>
                    <a class="product-meta" href="#">Misbah Ahmad Chy Fahim</a>
                    <span class="product-price"><del>TK. 300</del>TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-7"><a class="btn btn-primary" href="#">See More</a></div>
</section>







<!-- Best Seller Products-->
<section class="container py-6 mb-4 best-seller-home">
    <h2 class="h4 block-title text-left pt-3">প্রি-অর্ডারে থাকা বইসমূহ</h2>
    <div class="row pt-4">
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head d-flex justify-content-between align-items-center"><span class="badge badge-danger">Sale</span>
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg"" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">স্টুডেন্ট হ্যাকস</a></h5>
                    <a class="product-meta" href="#">আয়মান সাদিক</a>
                    <span class="product-price"><del>TK. 300</del>TK. 225</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Ami Gorib</a></h5>
                    <a class="product-meta" href="#">Irfanul Kalam Chy</a>
                    <span class="product-price">TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head text-right">
                    <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i>
                        <i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                    </div>
                </div>
                <a class="product-thumb" href="#"><img src="/images/shop/01.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Shopner Army</a></h5>
                    <a class="product-meta" href="#">Foyzul Abrar Chy</a>
                    <span class="product-price">TK. 300</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
            <div class="product-card mx-auto mb-3">
                <div class="product-head"><span class="badge badge-danger">Sale</span></div>
                <a class="product-thumb" href="#"><img src="/images/shop/02.jpg" alt="Product Thumbnail"/></a>
                <div class="product-card-body">
                    <h5 class="product-title"><a href="#">Relatively Relatives</a></h5>
                    <a class="product-meta" href="#">Misbah Ahmad Chy Fahim</a>
                    <span class="product-price"><del>TK. 300</del>TK. 200</span>
                </div>
                <div class="product-buttons-wrap">
                    <div class="product-buttons">
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product"
                                data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="See Details">
                            <a href="#"><i class="fe-icon-eye"></i></a>
                        </div>
                        <div class="product-button" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <a href="#" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product"
                                data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-7"><a class="btn btn-primary" href="#">See More</a></div>
</section>























<!-- Testimonials-->
<section class="home-testimonials bg-secondary pt-2 pb-2">
    <div class="container pt-3 pb-2">
        <h2 class="h4 block-title text-center">What people says about us</h2>
        <!-- Testimonials Inside Carousel. Multiple Items -->
        <div class="owl-carousel testimonials-carousel pt-3" data-owl-carousel='{ "nav": false, "dots": true, "loop": true, "margin": -15, "autoplay": true, "autoplayTimeout": 4000, "responsive": {"0":{"items":1},"630":{"items":2},"991":{"items":2},"1200":{"items":3}} }'>

            <!-- Testimonial -->
            <div class="blockquote testimonial">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Utenim ad minim veniam, quis nostrud.</p>
                <footer class="testimonial-footer">
                    <div class="testimonial-avatar">
                        <img src="/images/author/01.jpg" alt="Testimonial Author Avatar" />
                    </div>
                    <div class="d-table-cell align-middle pl-2">
                        <div class="blockquote-footer">
                            Barbara Palson
                            <cite>Graphic Designer</cite>
                        </div>
                    </div>
                </footer>
            </div>

            <!-- Testimonial -->
            <div class="blockquote testimonial">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Utenim ad minim veniam, quis nostrud.</p>
                <footer class="testimonial-footer">
                    <div class="testimonial-avatar">
                        <img src="/images/author/01.jpg" alt="Testimonial Author Avatar" />
                    </div>
                    <div class="d-table-cell align-middle pl-2">
                        <div class="blockquote-footer">
                            Barbara Palson
                            <cite>Graphic Designer</cite>
                        </div>
                    </div>
                </footer>
            </div>

            <!-- Testimonial -->
            <div class="blockquote testimonial">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Utenim ad minim veniam, quis nostrud.</p>
                <footer class="testimonial-footer">
                    <div class="testimonial-avatar">
                        <img src="/images/author/01.jpg" alt="Testimonial Author Avatar" />
                    </div>
                    <div class="d-table-cell align-middle pl-2">
                        <div class="blockquote-footer">
                            Barbara Palson
                            <cite>Graphic Designer</cite>
                        </div>
                    </div>
                </footer>
            </div>

            <!-- Testimonial -->
            <div class="blockquote testimonial">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Utenim ad minim veniam, quis nostrud.</p>
                <footer class="testimonial-footer">
                    <div class="testimonial-avatar">
                        <img src="/images/author/01.jpg" alt="Testimonial Author Avatar" />
                    </div>
                    <div class="d-table-cell align-middle pl-2">
                        <div class="blockquote-footer">
                            Barbara Palson
                            <cite>Graphic Designer</cite>
                        </div>
                    </div>
                </footer>
            </div>

            <!-- Testimonial -->
            <div class="blockquote testimonial">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Utenim ad minim veniam, quis nostrud.</p>
                <footer class="testimonial-footer">
                    <div class="testimonial-avatar">
                        <img src="/images/author/01.jpg" alt="Testimonial Author Avatar" />
                    </div>
                    <div class="d-table-cell align-middle pl-2">
                        <div class="blockquote-footer">
                            Barbara Palson
                            <cite>Graphic Designer</cite>
                        </div>
                    </div>
                </footer>
            </div>
        </div>



    </div>
</section>



<!-- Shop Services-->
<section class="shop-services container">
    <div class="row pt-3">
        <div class="col-md-3 col-sm-6 text-center mb-30">
            <div class="shop-services-inner mb-3">
                <img class="mx-auto mb-4" src="/images/components/icons/dt.svg" width="90" alt="Free Worldwide Shipping">
            </div>
            <h3 class="text-lg mb-2 text-body">Free Worldwide Shipping</h3>
            <p class="text-sm text-muted mb-0">Free shipping for all orders over $100</p>
        </div>
        <div class="col-md-3 col-sm-6 text-center mb-30">
            <div class="shop-services-inner mb-3">
                <img class="mx-auto mb-4" src="/images/components/icons/pm.svg" width="90" alt="Money Back Guarantee">
            </div>
            <h3 class="text-lg mb-2 text-body">Cash On Delivery</h3>
            <p class="text-sm text-muted mb-0">Friendly 24/7 customer support</p>
        </div>
        <div class="col-md-3 col-sm-6 text-center mb-30">
            <div class="shop-services-inner mb-3">
                <img class="mx-auto mb-4" src="/images/components/icons/cs.svg" width="90" alt="24/7 Customer Support">
            </div>
            <h3 class="text-lg mb-2 text-body">24/7 Customer Support</h3>
            <p class="text-sm text-muted mb-0">Friendly 24/7 customer support</p>
        </div>
        <div class="col-md-3 col-sm-6 text-center mb-30">
            <div class="shop-services-inner mb-3">
                <img class="mx-auto mb-4" src="/images/components/icons/rn.svg" width="90" alt="">
            </div>
            <h3 class="text-lg mb-2 text-body">Easy Hiring Policy</h3>
            <p class="text-sm text-muted mb-0">We posess SSL / Secure Certificate</p>
        </div>
    </div>
</section>


<!-- Large Modal -->
<div class="modal fade" id="modalLarge" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Submit a query for missing book(s)</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="missing-book-form">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <form class="form-inline">
                                <!-- Name Input -->
                                <div class="mb-3 col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="book-req-name-input" placeholder="Your Name">
                                </div>
                                <!-- Email Input -->
                                <div class="mb-3 col-md-6 col-sm-6">
                                    <input class="form-control" type="email" id="book-req-email-input" placeholder="Your Email">
                                </div>
                                <!-- Phone Input -->
                                <div class="mb-3 col-md-6 col-sm-6">
                                    <input class="form-control" type="tel" id="book-req-tel-input" placeholder="Your Contact Number">
                                </div>
                                <!-- Book Name Input -->
                                <div class="mb-3 col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="book-req-book-input" placeholder="Book Name">
                                </div>
                                <!-- Textarea -->
                                <div class="mb-3 col-md-12 col-sm-12">
                                    <textarea class="form-control" id="book-req-textarea-input" placeholder="Leave us a short note!"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-primary btn-sm" type="button">Submit</button>
            </div>
        </div>
    </div>
</div>

<section class="book-req container bg-secondary pt-4 pb-2">
    <div class="book-req-trigger">
        <p class="">Didn't find what you are looking for?
            <span>
            <button class="btn btn-style-5 btn-primary book-req-trigger-btn mr-3 mb-3" type="button" data-toggle="modal" data-target="#modalLarge"><i class="fe-icon-edit mr-1"></i> Let Us Know</button>
          </span>
        </p>
        <!-- Buttons to Trigger Modals -->
    </div>
</section>





    
@endsection