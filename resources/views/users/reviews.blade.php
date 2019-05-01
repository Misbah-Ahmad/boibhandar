<div class="col-lg-8 pb-5">
    <!-- Reviews-->
    <div class="container bg-secondary">
        <div class="account-details">
            <h2 class="h4 block-title mb-4">Reviews and Ratings</h2>
            <div class="row">

                @each('users.review_single', $vars, 'review')

            </div>
        </div>
    </div>
</div>