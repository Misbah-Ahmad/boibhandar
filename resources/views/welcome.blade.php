@extends('layouts.master')

@section('content')


<section class="featured-posts-slider d-lg-flex">
    <div class="owl-carousel dots-inside home-img-carousel fadeOut owl-theme">
        <a class="post-preview-img" href="#"><img src="/images/banner/banner1.png" alt="Boibhandar Banner"/></a>
        <a class="post-preview-img" href="#"><img src="/images/banner/banner2.png" alt="Boibhander Banner"/></a>
        <a class="post-preview-img" href="#"><img src="/images/banner/banner3.png" alt="Boibhander Banner"/></a>
    </div>
</section>



{{-- <section class="container">
    <div class="seasonal-promotion-banner">
        <div class="row">
            <div class="col-md-12 pt-2 pb-3">
                <a href="#"><img class="lazy" data-src=" {{ asset('images/promo.png') }} "></a>
            </div>
        </div>
    </div>
</section> --}}


<!-- Best Seller Products-->


@foreach ($cats_books as $book)
    @include('books.row_section', ['category' => $book['category'], 'section_headline' => $book['category']->name, 'books' => $book['books']])    
@endforeach








<!-- Top Authors -->
<section class="container py-6 mb-4 top-authors">
    <h2 class="h4 block-title text-left pt-3">Top Authors</h2>
    <div class="row">

        @foreach ($showcase_authors as $author)

            <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                <div class="top-authors-card mx-auto">
                    <a class="top-authors-thumb" href=" {{ route('authors.show', $author->id) }} ">
                <img src="/images/author/{{ $author->image_link }}" alt=""/>
                <p class="top-authors-title"> {{ $author->name }} </p>
                </a>
                </div>
            </div>
        

        @endforeach

    </div>
    <div class="text-center pt-7"><a class="btn btn-primary" href="/authors">See More</a></div>
</section>





<!-- Shop Services-->

@include('services')                                    

{{-- <!-- Large Modal -->
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
</div> --}}

<section class="book-req container bg-secondary pt-4 pb-2">
    <div class="book-req-trigger">
        <p class="">Didn't find what you are looking for?
            <span>
            <a href=" {{ route('contact') }} " class="btn btn-style-5 btn-primary book-req-trigger-btn mr-3 mb-3"><i class="fe-icon-edit mr-1"></i> Let Us Know</a>
          </span>
        </p>
        <!-- Buttons to Trigger Modals -->
    </div>
</section>





    
@endsection