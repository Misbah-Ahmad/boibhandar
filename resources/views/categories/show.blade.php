@extends('layouts.master')

@section('content')
    
<!-- Page Title-->
    <div class="page-title d-flex" aria-label="Page title">
        <div class="container text-left align-self-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Single</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>


    @include('books.row_section', ['section_headline' => 'Books of ' . $category->name . ' Category'])

@endsection