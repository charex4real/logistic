@extends('frontend.layouts.master')
@section('content')
<!-- banner Area Start -->
<section class="page-header page-header-classic page-header-sm">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                                <h1 data-title-border> {{ $gs->contact_title }}</h1>
                            </div>
                            <div class="col-md-4 order-1 order-md-2 align-self-center">
                                <ul class="breadcrumb d-block text-md-right">
                                    <li><a href="{{ route('front.index') }}">Home</a></li>
                                    <li>
                                        <a class="active" href="{{ route('front.contactus') }}">{{ $gs->contact_title }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
 </section>

                <div class="container">

                    <div class="row py-4">
                        <div class="col-lg-6">

                            <div class="overflow-hidden mb-1">
                                <h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><strong class="font-weight-extra-bold">Contact</strong> Us</h2>
                            </div>
                            <div class="overflow-hidden mb-4 pb-3" id="contactustest">
                                <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">{{ $gs->contact_title }}</p>
                            </div>

                            <form id="contactForm" class="contact-form" action="{{ route('visitor.message') }}" method="POST">
                                @csrf
                            
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label class="required font-weight-bold text-dark text-2">Full Name</label>
                                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" id="name" name="name"  required>


                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="required font-weight-bold text-dark text-2">Email Address</label>
                                        <input type="number" value="" data-msg-required="Please enter your mobile number." data-msg-email="Please enter your mobile number." maxlength="20" class="form-control" id="phone" name="phone"  required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="font-weight-bold text-dark text-2">Email Address</label>
                                         <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="required font-weight-bold text-dark text-2">Message</label>
                                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="messages" id="messages" required></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="col-lg-6">

                            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                                <h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
                                <ul class="list list-icons list-icons-style-2 mt-2">
                                    <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> {{ $gs->contact_address }}</li>
                                    <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> {{ $gs->contact_phone }}</li>
                                    <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:{{ $gs->contact_email }}">{{ $gs->contact_email }}</a></li>
                                </ul>
                            </div>

                            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                                <h4 class="pt-5">Business <strong>Hours</strong></h4>
                                <ul class="list list-icons list-dark mt-2">
                                    <li><i class="far fa-clock top-6"></i> Monday - Friday - 8am to 5pm</li>
                                    <li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
                                    <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
                                </ul>
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1250">
                                {!! $gs->map !!}
                            </div>

                        </div>

                    </div>

                </div>

<!-- contact infor area start -->

<!-- contact infor area end -->
<script type="text/javascript">
    $("#home").removeClass("active");
   
    $("#contact-us").addClass("active");
</script>
@endsection