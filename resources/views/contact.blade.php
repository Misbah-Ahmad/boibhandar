@extends('layouts.master')

@section('content')
    

<!-- Page Content-->
    <div class="container mb-2 mt-5">
        <div class="col-md-12 wizard contact-page pb-3 pt-4">
            <!-- Customer Service-->
            <div class="row">
                <div class="col-md-7">
                    <h2 class="opacity-50 mb-20 pt-3">Customer Service</h2>
                </div>
                <div class="col-md-5">
                    <ul class="list-icon">
                        <li class="mb-2"> <i class="fe-icon-mail text-muted"></i><a class="navi-link ml-1"
                                href="mailto:support@boibhandar.com">support@boibhandar.com</a></li>
                        <li class="mb-2"><i class="fe-icon-phone text-muted"></i><a class="navi-link ml-1"
                                href="tel:+8801307883288">01307 88 32 88</a></li>
                        <li class="mb-2"><i class="fe-icon-clock text-muted"></i><span class="ml-1">1 business day</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <!-- Contact Form-->
    <section class="container mt-3 mb-5 pb-3">
        <div class="wizard">
            <div class="wizard-body pt-3">
                <h2 class="h4 text-center block-title">Drop us a line</h2>
                <p class="text-muted text-center">We will get back to you as soon as possible</p>
                @if(session()->has('message'))
                
                    <div class="alert alert-info" role="alert">
                        {{ session()->get('message') }}
                    </div>
                    
                @endif
                <form class="needs-validation" method="POST" action="{{ route('contacts.store') }}" novalidate>
                    @csrf
                    <div class="row pt-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="contact-name">Your Name <span
                                        class='text-danger font-weight-medium'>*</span></label>
                                <input class="form-control" type="text" id="contact-name" name="name" placeholder="John Doe" required>
                                <div class="invalid-feedback">Please enter your name!</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="contact-email">Your Email <span
                                        class='text-danger font-weight-medium'>*</span></label>
                                <input class="form-control" type="email" id="contact-email" name="email" placeholder="johndoe@email.com"
                                    required>
                                <div class="invalid-feedback">Please provide a valid email address!</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="contact-phone">Phone <span
                                        class='text-danger font-weight-medium'>*</span></label>
                                <input class="form-control" type="number" id="contact-phone" name="phone" placeholder="01777777777"
                                    required>
                                <div class="invalid-feedback">Please provide a valid phone number!</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="contact-subject">Subject</label>
                                <input class="form-control" type="text" name="subject" id="contact-subject"
                                    placeholder="Provide short title of you request">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact-message">Message <span class='text-danger font-weight-medium'>*</span></label>
                        <textarea class="form-control" rows="7" name="message" id="contact-message"
                            placeholder="Let us know more what's on your mind..." required></textarea>
                        <div class="invalid-feedback">Please write a message!</div>
                    </div>
                    <div class="form-group">
                        @captcha('en')
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


@endsection