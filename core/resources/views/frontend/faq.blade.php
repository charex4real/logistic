@extends('frontend.layouts.master')
@section('content')
<!-- banner Area Start -->
                <section class="page-header page-header-classic page-header-sm">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                                <h1 data-title-border>About Us</h1>
                            </div>
                            <div class="col-md-4 order-1 order-md-2 align-self-center">
                                <ul class="breadcrumb d-block text-md-right">
                                    <li><a href="{{ route('front.index') }}">Home</a></li>
                                    <li>
                                        <a class="active" href="{{ route('front.faq') }}">FAQ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="container py-4">

                    <div class="row">
                        <div class="col">

                            <h2 class="font-weight-normal text-7 mb-2">Frequently Asked <strong class="font-weight-extra-bold">Questions</strong></h2>
                            
                            <hr class="solid my-5">

                            <div class="toggle toggle-primary" data-plugin-toggle>
                            <?php $i = 1;?>
                            @foreach($faqList as $key=>$faq)
                                <section class="toggle <?php if ($i == 1) echo'active'; ?>">
                                    
                               
                                    <label>{{ $faq->question }}</label>
                                    <p>{{ $faq->answer }}</p>
                                </section>
                                 <?php $i++;?>
                             @endforeach
                              

                        </div>

                    </div>

                </div>
            </div>
<!-- Welcome Area End -->

@include('frontend/layouts/bottom') 
<script type="text/javascript">
    $("#home").removeClass("active");
    $("#aboutus").removeClass("active");
    $("#faq").addClass("active");
</script>
@endsection