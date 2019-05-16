<div class="shop-single-review-form">
    <h3 class="h5 block-title">Please Rate and Review This Book</h3>

    @if (session()->has('review_saved'))
        <div class="alert alert-success col-md-6 col-sm-4 text-center" role="alert" style="padding:15px; margin:0 auto;">
            <strong> {{ session('review_saved') }} </strong>
        </div>                        
    @endif
    
    <form action="{{ route('reviews.store') }}" method="post">
        @csrf
        <input type="hidden" name="book" value="{{ $book->id }}">
        <div class="rating-space col-md-12 pb-3 pt-3">

            <div class="star-rating pb-3 form-group input-group">
                <input id="star-5" type="radio" name="rating_score" value="5">
                <label for="star-5" title="অসাধারণ">
                    <i class="active fa fa-star" aria-hidden="true"></i>
                </label>
                <input id="star-4" type="radio" name="rating_score" value="4">
                <label for="star-4" title="বেশি ভাল্লাগছে">
                    <i class="active fa fa-star" aria-hidden="true"></i>
                </label>
                <input id="star-3" type="radio" name="rating_score" value="3">
                <label for="star-3" title="ভাল্লাগছে">
                    <i class="active fa fa-star" aria-hidden="true"></i>
                </label>
                <input id="star-2" type="radio" name="rating_score" value="2">
                <label for="star-2" title="মোটামোটি">
                    <i class="active fa fa-star" aria-hidden="true"></i>
                </label>
                <input id="star-1" type="radio" name="rating_score" value="1" required>
                <label for="star-1" title="ভাল্লাগেনাই">
                    <i class="active fa fa-star" aria-hidden="true"></i>
                </label>
            </div>
            @if ($errors->has('rating_score'))
                <div class="invalid-feedback">Please select a star!</div>

            @endif            



            <div class="form-group">
                <input class="form-control {{ $errors->has('rating_title') ? ' is-invalid' : '' }}" type="text" min="5" max="20" id="review-title-input" name="rating_title" placeholder="Title of your review" value="{{ old('rating_title') }}" required>
                @if ($errors->has('rating_title'))
                    <div class="invalid-feedback">{{ $errors->first('rating_title') }}</div>

                @endif
            </div>


            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fe-icon-message-square"></i></span>
                </div>
                <textarea class="form-control {{ $errors->has('rating_body') ? ' is-invalid' : '' }}" placeholder="Write some details about this book" name="rating_body" rows="6" required>{{ old('rating_body') }}</textarea>

                @if ($errors->has('rating_body'))
                    <div class="invalid-feedback">{{ $errors->first('rating_body') }}</div>

                @endif            
            
            </div>

            <button class="btn btn-primary float-right mt-3" type="submit">Leave a Review</button>

        </div>
    </form>
</div>