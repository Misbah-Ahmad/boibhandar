@extends('layouts.master')

@section('content')
    

    @include('books.row_section', ['section_headline' => $publisher->name . ' এর বই সমূহ'])

@endsection