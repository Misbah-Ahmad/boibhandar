<div class="col-lg-8 pb-5">
    <div class="account-details">
        <h2 class="h4 block-title mb-4">My Wishlist</h2>


        @each('users.wishlist_single', $vars, 'book')



{{--         <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" checked id="inform-me">
            <label class="custom-control-label" for="inform-me">Inform me when item from my wishlist is
                available</label>
        </div> --}}
    </div>
</div>