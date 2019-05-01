@extends('layouts.master')

@section('content')
    


    @include('books.row_section', ['section_headline' => 'Books of ' . $category->name . ' Category'])

@endsection