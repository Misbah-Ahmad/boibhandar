@extends('layouts.master')


@section('content')
 

<!-- Page Title-->

    <div class="page-title d-flex" aria-label="Page title">
        <div class="container text-left align-self-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Account</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
     
    
    
    
    
    
    
    
    
    
    <!-- Page Content-->
    <div class="container mb-4">
        <div class="row">
    
    
            @include('users.account_sidebar')

            
            @include('users.' . $view)
            
            
    
        </div>
    </div>    


@endsection
