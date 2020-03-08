@extends('frontend.layouts.master')
@section('content')
<section class="page-header page-header-classic page-header-sm">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                                <h1 data-title-border>About Us</h1>
                            </div>
                            <div class="col-md-4 order-1 order-md-2 align-self-center">
                                <ul class="breadcrumb d-block text-md-right">
                                    <li><a href="{{ route('front.index') }}">Home</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
 </section>

                <div class="container">

                    <div class="row pt-5">
                        <div class="col">

                            <div class="row text-center pb-5">
                                <div class="col-md-9 mx-md-auto">
                                    <div class="overflow-hidden">
                                        <h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
                                            <span>We are the ArkLogistic, We Are</span>
                                            <span class="word-rotator-words bg-primary">
                                                <b class="is-visible">Reliable</b>
                                                <b>Affordable</b>
                                                <b>Efficient</b>
                                                <b>Effective</b>

                                            </span>
                                           
                                        </h1>
                                    </div>
                                    
                                </div>
                            </div>

                      <!--      <div class="row mt-3 mb-5">
                                <div class="col-md-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
                                     <p>{{ $gs->about_us_quote_one }}
                                    </h3>
                                </div>
                                <div class="col-md-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                                    <p>{{ $gs->about_us_quote_one }}</h3>
                                   
                                </div>
                                <div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                                    <p>{{ $gs->about_us_quote_three }}</h3>
                                  
                                </div>
                            </div>
                        -->
                        </div>
                    </div>

                </div>

<!-- faq page content area end -->
<!-- error 404 page content area start -->

<section class="section section-default border-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="750">
    <div class="container py-4">

        <div class="row align-items-center">
            <div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000">
                <div class="owl-carousel owl-theme nav-inside mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
                    <div>
                        <img alt="" class="img-fluid" src="{{asset('assets/frontend/images/aboutus.jpg')}}"/>
                    </div>
                                 
                </div>
            </div>
            <div class="col-md-6">
                <div class="overflow-hidden mb-2">
                    <h2 class="text-color-dark font-weight-normal text-5 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200">About <strong class="font-weight-extra-bold">Us</strong></h2>
                </div>
                    <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">{!! $gs->about_us_quote_one !!}</p>
                     <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">{!! $gs->about_us_quote_two !!}</p>

                      <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800">{!! $gs->about_us_quote_three !!}</p>

                       
             </div>
         </div>

    </div>
</section>
   
 @include('frontend/layouts/about-bottom')


 <!--
    @include('frontend/layouts/counter')
    @include('frontend/layouts/testimony')  -->
@include('frontend/layouts/bottom') 
<script type="text/javascript">
    $("#home").removeClass("active");
    $("#about-us").addClass("active");
</script>
@endsection

