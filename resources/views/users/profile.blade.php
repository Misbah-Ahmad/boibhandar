@extends('layouts.master')


@section('content')
 

    
    
    
    
    <!-- Page Content-->
    <div class="container mb-4 mt-5">
        <div class="row">
    
    
            @include('users.account_sidebar')

            
            @include('users.' . $view)
            
            
    
        </div>
    </div>    


@endsection
