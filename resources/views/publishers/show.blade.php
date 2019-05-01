@extends('layouts.master')

@section('content')
    

    @include('books.row_section', ['section_headline' => 'Books of ' . $publisher->name])

@endsection