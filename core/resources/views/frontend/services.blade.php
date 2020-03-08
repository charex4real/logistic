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
                                            <span>Art Logistics Offers the Following Service </span>
                                            <span class="word-rotator-words bg-primary">
                                                <b class="is-visible">Packaging</b>
                                                <b>Material handling</b>
                                                <b>Packaging</b>
                                                <b>Warehousing </b>
                                                <b>Inventory</b>
                                                <b> Management</b>
                                                <b> Receiving Goods</b>
                                                <b> Receiving Packages</b>
                                                <b> Storage.</b>

                                            </span>
                                           
                                        </h1>
                                    </div>
                                    
                                </div>
                            </div>
                     
                        </div>
                    </div>

                </div>


                <div class="container pb-1">


                    <div class="row">
                        <div class="featured-boxes featured-boxes-style-2">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700">
                                    <div class="featured-box featured-box-effect-4">
                                        <div class="box-content">
                                            <i class="icon-featured icon-screen-tablet icons text-color-primary bg-color-grey"></i>
                                            <h4 class="font-weight-bold">Deliveries</h4>
                                            <p class="px-3"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="900">
                                    <div class="featured-box featured-box-effect-4">
                                        <div class="box-content">
                                            <i class="icon-featured icon-layers icons text-color-light bg-color-primary"></i>
                                            <h4 class="font-weight-bold">Material handling</h4>
                                            <p class="px-3"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100">
                                    <div class="featured-box featured-box-effect-4">
                                        <div class="box-content">
                                            <i class="icon-featured icon-magnifier icons text-color-primary bg-color-grey"></i>
                                            <h4 class="font-weight-bold">Packaging</h4>
                                            <p class="px-3"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1500">
                                    <div class="featured-box featured-box-effect-4">
                                        <div class="box-content">
                                            <i class="icon-featured icon-screen-desktop icons text-color-light bg-color-primary"></i>
                                            <h4 class="font-weight-bold">Warehousing</h4>
                                            <p class="px-3"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1300">
                                    <div class="featured-box featured-box-effect-4">
                                        <div class="box-content">
                                            <i class="icon-featured icon-doc icons text-color-primary bg-color-grey"></i>
                                            <h4 class="font-weight-bold">Inventory</h4>
                                            <p class="px-3"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1100">
                                    <div class="featured-box featured-box-effect-4">
                                        <div class="box-content">
                                            <i class="icon-featured icon-menu icons text-color-light bg-color-primary"></i>
                                            <h4 class="font-weight-bold">Management</h4>
                                            <p class="px-3"></p>
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1300">
                                    <div class="featured-box featured-box-effect-4">
                                        <div class="box-content">
                                            <i class="icon-featured icon-doc icons text-color-primary bg-color-grey"></i>
                                            <h4 class="font-weight-bold">Receiving Goods & Packages</h4>
                                            <p class="px-3"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1100">
                                    <div class="featured-box featured-box-effect-4">
                                        <div class="box-content">
                                            <i class="icon-featured icon-menu icons text-color-light bg-color-primary"></i>
                                            <h4 class="font-weight-bold">Storage</h4>
                                            <p class="px-3"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

   
 @include('frontend/layouts/about-bottom')


 <!--
    @include('frontend/layouts/counter')
    @include('frontend/layouts/testimony')  -->
@include('frontend/layouts/bottom') 
<script type="text/javascript">
    $("#home").removeClass("active");
    $("#services").addClass("active");
</script>
@endsection

