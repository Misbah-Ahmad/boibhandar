@extends('layouts.master')

@section('content')
    


    @include('books.row_section', ['section_headline' => 'Category: ' . $category->name])

@endsection