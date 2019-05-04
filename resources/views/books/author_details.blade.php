<div class="col-md-6">
    <div class="author-profile-details">
      <h3 class="h6 block-title">Author Details</h3>
      <img class="img-responsive author-profile-pic mb-4" src="{{ asset('images/author/01.jpg')}}" alt="">
      <h4 class="author-profile-name h6 text-center"> {{ $book->authors()->first()->name }} </h4>
      <p class="author-profile-bio mb-4 pb-2 text-center">
        {{ $book->authors()->first()->short_bio }}
      </p>
    </div>
</div>