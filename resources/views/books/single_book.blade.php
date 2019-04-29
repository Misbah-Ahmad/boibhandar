<!-- Page Content-->
<div class="container mb-2 mt-5">
  <div class="row">

    <div class="col-md-6">
      <div class="product-gallery pb-5">

          @if($book->hasSale)
            <span class="badge badge-danger text-md font-weight-normal">Sale</span>
          @endif


          <a class="gallery-item" href="{{ asset($book->image) }}" data-fancybox="gallery1" data-hash="one">
                <img src="{{ asset($book->image) }}" alt="Product">
          </a>

      </div>
    </div>


    <!-- Product Info-->
    <div class="col-md-6">
      <h2 class="h3 font-weight-bold">{{ $book->title }}</h2>
  
      <div class="product-meta">
      
        <i class="fe-icon-edit-2"></i>
        <a href=" {{ route('authors.show', $book->author->id) }} "> {{ $book->author->name }} </a>
      
      </div>
  
      <h3 class="product-details-price h4 font-weight-light">

        @include('books.price')
          
      </h3>
      <div class="product-availability color-green"><i class="fe-icon-check-circle"></i><span>In Stock</span></div>

      <p class="product-details-category font-weight-medium">Category:
        <span>
          
          @foreach ($book->categories as $category)
            <a href=" {{ route('categories.show', $category->name) }} " class="text-muted"> {{ $category->name }} </a>             
          @endforeach
      
        </span>
      
      </p>

      <div class="product-details-rating-stars rating-stars">
        <i class="fe-icon-star active"></i>
        <i class="fe-icon-star active"></i>
        <i class="fe-icon-star active"></i>
        <i class="fe-icon-star active"></i>
        <i class="fe-icon-star"></i>
        <a href="#review-call"><span class="review-counter"> {{ $book->reviews()->count() }} </span><span> Reviews</span></a>
      </div>




      <div class="row align-items-end pb-4">
        
        {{-- <div class="col-sm-4">
          
          <div class="form-group mb-0">
            <label for="quantity">Quantity</label>
            <select class="form-control" id="quantity">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
          </div>
        
        </div> --}}


        <div class="col-sm-8">
          <div class="pt-4 hidden-sm-up"></div>
          <button class="btn btn-primary btn-block m-0" onclick="addToCart({{ $book->id }})" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="fe-icon-check-circle"
            data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="fe-icon-shopping-cart"></i> Add to Cart</button>

        </div>
      </div>
 
 
      <hr class="mb-2">
 
      <div class="d-flex flex-wrap justify-content-between align-items-center">
        
        <div class="mt-2 mb-2">
          <button class="btn btn-danger btn-sm my-2 mr-1" onclick="addToWishlist({{ $book->id }})" data-toast data-toast-type="info" data-toast-position="topRight" data-toast-icon="fe-icon-info"
            data-toast-title="Product" data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i>&nbsp;Wishlist</button>
        </div>

        <div class="mt-2 mb-2"><span class="text-muted d-inline-block align-middle mb-2">Share:&nbsp;&nbsp;</span>
          
          <div class="d-inline-block">
            <a class="social-btn sb-style-3 sb-facebook my-1" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="socicon-facebook"></i>
                </a>
            <a class="social-btn sb-style-3 sb-twitter my-1" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="socicon-twitter"></i>
                </a>
            <a class="social-btn sb-style-3 sb-instagram my-1" href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="socicon-instagram"></i>
                </a>
            <a class="social-btn sb-style-3 sb-google-plus my-1 mr-0" href="#" data-toggle="tooltip" data-placement="top" title="Google +"><i class="socicon-googleplus"></i>
                </a>
          </div>
          
        </div>

      </div>
    </div>
  </div>
</div>