
<section class="container py-6 mb-4 best-seller-home mt-5 pt-3">

    <h2 class="h4 block-title text-left pt-3">{{ $section_headline }}</h2>

    <div class="row pt-4">

        @each('books.card', $books, 'book')

    </div>

    {{-- <div class="text-center pt-7"><a class="btn btn-primary" href="#">See More</a></div> --}}

</section>