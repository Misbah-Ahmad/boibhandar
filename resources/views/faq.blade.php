@extends('layouts.master')

@section('content')
    
<section class="container pb-5 mt-5">
    <h2 class="h4 block-title mb-4 text-center">F.A.Q (Frequently Asked Questions)</h2>
    <div class="row pt-3">
        <div class="col-sm-6">

            <div class="accordion accordion-style-2" id="accordion1">
                <div class="card">
                    <div class="card-header">
                        <h6>
                            <a class="collapsed" href="#collapseOne" data-toggle="collapse">
                                <i class="fe-icon-file-text text-muted"></i>How long will delivery take?
                            </a>
                        </h6>
                    </div>
                    <div class="collapse" id="collapseOne" data-parent="#accordion1">
                        <div class="card-body">
                            <div class="opacity-75">Usually, we deliver books to our clients within 48 to 72 hours.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h6>
                            <a class="collapsed" href="#collapseTwo" data-toggle="collapse">
                                <i class="fe-icon-file-text text-muted"></i>What payment methods do you accept?
                            </a>
                        </h6>
                    </div>
                    <div class="collapse" id="collapseTwo" data-parent="#accordion1">
                        <div class="card-body">
                            <div class="opacity-75">We accept hard cash and bkash at this moment.<br>Multiple payment
                                methods will be available soon!</div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h6>
                            <a class="collapsed" href="#collapseThree" data-toggle="collapse">
                                <i class="fe-icon-file-text text-muted"></i>Do you ship internationally?
                            </a>
                        </h6>
                    </div>
                    <div class="collapse" id="collapseThree" data-parent="#accordion1">
                        <div class="card-body">
                            <div class="opacity-75">Not at this moment.<br>Hope to see our happy clients overseas. ;)
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h6>
                            <a class="collapsed" href="#collapseFour" data-toggle="collapse">
                                <i class="fe-icon-file-text text-muted"></i>Do I need an account to place an order?
                            </a>
                        </h6>
                    </div>
                    <div class="collapse" id="collapseFour" data-parent="#accordion1">
                        <div class="card-body">
                            <div class="opacity-75">Definitely. You need an account to place an order.</div>
                        </div>
                    </div>
                </div>



                <div class="card">
                    <div class="card-header">
                        <h6>
                            <a class="collapsed" href="#collapseFive" data-toggle="collapse">
                                <i class="fe-icon-file-text text-muted"></i>Which type of books are available at
                                Boibhandar?
                            </a>
                        </h6>
                    </div>
                    <div class="collapse" id="collapseFive" data-parent="#accordion1">
                        <div class="card-body">
                            <div class="opacity-75">Almost every Bangladeshi publishers books are available at
                                Boibhandar. We also store many original copies of several kind of books from many
                                countries.</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <div class="col-sm-6">

            <div class="accordion accordion-style-2" id="accordion2">
                <div class="card">
                    <div class="card-header">
                        <h6>
                            <a class="collapsed" href="#collapseSix" data-toggle="collapse">
                                <i class="fe-icon-file-text text-muted"></i>What are the product return conditions?
                            </a>
                        </h6>
                    </div>
                    <div class="collapse" id="collapseSix" data-parent="#accordion2">
                        <div class="card-body">
                            <div class="opacity-75">

                                <ul style="">
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
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h6>
                            <a class="collapsed" href="#collapseSeven" data-toggle="collapse">
                                <i class="fe-icon-file-text text-muted"></i>Where I can download invoices for my orders?
                            </a>
                        </h6>
                    </div>
                    <div class="collapse" id="collapseSeven" data-parent="#accordion2">
                        <div class="card-body">
                            <div class="opacity-75">Your invoice(s) will be send to you via your email. You can also
                                download it from Orders List of your account panel.</div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h6>
                            <a class="collapsed" href="#collapseEight" data-toggle="collapse">
                                <i class="fe-icon-file-text text-muted"></i>Can I return torn book(s)?
                            </a>
                        </h6>
                    </div>
                    <div class="collapse" id="collapseEight" data-parent="#accordion2">
                        <div class="card-body">
                            <div class="opacity-75">Nope, we don't accept torn books. For more you should follow our <a
                                href="/return-policy">Rent Policy</a></div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h6>
                            <a class="collapsed" href="#collapseNine" data-toggle="collapse">
                                <i class="fe-icon-file-text text-muted"></i>What if I get a torn book?
                            </a>
                        </h6>
                    </div>
                    <div class="collapse" id="collapseNine" data-parent="#accordion2">
                        <div class="card-body">
                            <div class="opacity-75">Ther's almost no chance to get a torn book from Boibhandar. Even if
                                you get one, you can return it with unused condition.</div>
                        </div>
                    </div>
                </div>



                <div class="card">
                    <div class="card-header">
                        <h6>
                            <a class="collapsed" href="#collapseTen" data-toggle="collapse">
                                <i class="fe-icon-file-text text-muted"></i>Do you sell for corporates?
                            </a>
                        </h6>
                    </div>
                    <div class="collapse" id="collapseTen" data-parent="#accordion2">
                        <div class="card-body">
                            <div class="opacity-75">Yeah, we offer the best price for the corporate orders. You can have
                                as many books as you need. For more about Corporate Orders, <a href="#">check the
                                    link</a>.</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>





    </div>
</section>




{{-- 
<div class="modal fade" id="modalLarge" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ask anything relevant about us</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="faq-form">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="img/components/others/boibhandar_faq.svg">
                        </div>
                        <div class="col-md-9">
                            <form class="form-inline">
                                <!-- Name Input -->
                                <div class="mb-3 col-md-12 col-sm-12">
                                    <input class="form-control" type="text" id="faq-question-input"
                                        placeholder="Your Question">
                                </div>
                                <!-- Email Input -->
                                <div class="mb-3 col-md-6 col-sm-6">
                                    <input class="form-control" type="email" id="faq-email-input"
                                        placeholder="Your Email">
                                </div>
                                <!-- Phone Input -->
                                <div class="mb-3 col-md-6 col-sm-6">
                                    <input class="form-control" type="tel" id="faq-tel-input"
                                        placeholder="Your Contact Number">
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
</div>
 --}}



<!-- Submit Request-->
<section class="container pb-5 mb-3">
    <div class="faq-ask text-center py-5 px-4">
        <h2 class="h4 block-title mb-4">Haven't found the answer? We can help.</h2>
        <p class="pb-3">Contact us and we’ll get back to you as soon as possible.</p>
        {{-- <button class="btn btn-primary book-req-trigger-btn mr-3 mb-3" type="button" data-toggle="modal"
            data-target="#modalLarge">Ask to Boibhandar</button> --}}
        <a class="btn btn-primary book-req-trigger-btn mr-3 mb-3" href="{{ route('contact') }}">Ask to Boibhandar</a>
    </div>
</section>

@endsection