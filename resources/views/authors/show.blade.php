@extends('layouts.master')

@section('content')
    
<!-- Page Content-->
    <div class="container pb-5 mt-5">
        <div class="row">
            <div class="col-lg-3">
    
                <!-- Off-Canvas Container-->
                <aside>
    
                    <!-- Author-->
                    <div class="widget widget-author">
                        <div class="author-card">
    
                            <div class="author-profile">
                                <div class="author-avatar"><img src="/images/author/01.jpg" alt="Blog Author" />
                                </div>

                                <div class="author-details">
                                    <h5 class="author-name text-center"> {{ $author->name }} </h5>
                                    <hr class="mb-3">
                                </div>

                            </div>
                            <p class="author-info text-center">{{ $author->short_bio }}</p>
                        </div>
                    </div>
    
                </aside>

            </div>
    
    
            <!-- Blog Grid-->
            <div class="col-lg-9">
    
                <section class="container py-6 mb-4 author-books-all">

                    <h2 class="h4 block-title text-left mb-4 pt-3">Books of <span> {{ $author->name }} </span></h2>

                    <div class="row pt-4">

                        @foreach ($books as $book)

                            <div class="col-lg-4 col-md-4 col-xs-4 mb-30">

                                @include('books.carousel_item', ['book' => $book])

                            </div>
                        

                        @endforeach



                    </div>
                </section>
    
    
    
    
            </div>
        </div>
    </div>



@endsection