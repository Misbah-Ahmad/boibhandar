@extends('layouts.master')


@section('content')
    
<section class="container pb-5 mt-5">
        <div class="row pt-3">
            <div class="col-md-12 col-12 text-left">
    
                <h2 class="h4 block-title mb-4 text-center">Book Return Criteria</h2>
    
    
                <div class="wizard p-4">
                    <ul style="max-width: 600px; vertical-align: middle;  display: block; margin: 0 auto;">
                        <li>Books must be returned in good condition and free of damages like:</li>
                        <ul>
                            <li>Any water/liquid damage</li>
                            <li>Missing/torn cover(s)</li>
                            <li>Destroyed text on page(s)</li>
                        </ul>
                        <li>No highlighting, Writing or other markings in the book.</li>
                        <li>Gifted books are not returnable.</li>
                        <li>Books below BDT100 are not returnable.</li>
                    </ul>
                </div>
    
    
                <h2 class="h4 block-title mt-5 mb-4 text-center">Book Rent Policies</h2>
    
                <div class="wizard p-4 mt-3">
    
    
    
                    <div class="table-responsive"
                        style="max-width: 600px; text-align: center; display: block; margin: 0 auto; border: 1px solid #333;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Return Within</th>
                                    <th>Returned Money</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>7 days</td>
                                    <td>93%</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>15 days</td>
                                    <td>90%</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>30 days</td>
                                    <td>80%</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>60 days</td>
                                    <td>70%</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>90 days</td>
                                    <td>60%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
    
                </div>
            </div>
        </div>
    </section>


@endsection