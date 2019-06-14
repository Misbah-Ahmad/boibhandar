<div class="col-md-6">

  @php
      $author = $book->authors()->first();
      if($author == null)
      {
        $author = $book->editors()->first();
        if($author == null)
        {
          $author = $book->translators()->first();
        }

      }
      
      if($author == null){
        $image_link = 'author-default.jpg';
      } else {
        $image_link = $author->image_link;        
      }

  @endphp

    <div class="author-profile-details">
      <h3 class="h6 block-title">Author Details</h3>
      <img class="img-responsive author-profile-pic mb-4" src="/images/author/{{ $image_link }}" alt="">
      <h4 class="author-profile-name h6 text-center"> {{ $author == null ? 'No Author' :  $author->name }} </h4>
      <p class="author-profile-bio mb-4 pb-2 text-center">
        {{ $author == null ? '' : $author->short_bio }}
      </p>
    </div>
</div>