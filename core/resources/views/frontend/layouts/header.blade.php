<!DOCTYPE html>
<html>
  <head>

    <!-- Basic -->
    <meta charset="utf-8"> 
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
   <title>{{ $gs->title }}</title>

    <link rel="shortcut icon" type="image/png" href="{{asset('assets/frontend/images/favicon.png')}}" />    

    <link rel="apple-touch-icon" href="{{asset('assets/frontend/images/favicon.png')}}">

 
   @if (request()->is('blog-details/*'))
      <meta name="description" content="{{$blog->meta_description}}">
      <meta name="keywords" content="{{$blog->meta_keywords}}">
 
   @else
      <meta name="description" content="{{$gs->meta_description}}">
      <meta name="keywords" content="{{$gs->meta_keywords}}">
    @endif
    <meta name="author" content="newtime.ng">
 
  
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">


    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/theme-shop.css')}}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/vendor/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/vendor/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/vendor/rs-plugin/css/navigation.css')}}">
    
    <!-- Demo CSS -->


    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/skins/skin-corporate-5.css')}}"> 

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/custom.css')}}">

    <!-- Head Libs -->
    <script src="{{asset('assets/frontend/vendor/modernizr/modernizr.min.js')}}"></script>

  
   <!-- jquery js -->

    <!--jQuery JS-->
        <script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

      <script src="{{asset('assets/frontend/js/jquery-3.3.1.min.js')}}"></script>
     <!-- -->
     <style>
      .loaders {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite; /* Safari */
        animation: spin 2s linear infinite;
      }

      /* Safari */
      @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
      }

      @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
      }
      /*--thank you pop starts here--*/
.thank-you-pop{
  width:100%;
  padding:20px;
  text-align:center;
}
.thank-you-pop img{
  width:76px;
  height:auto;
  margin:0 auto;
  display:block;
  margin-bottom:25px;
}

.thank-you-pop h1{
  font-size: 42px;
    margin-bottom: 25px;
  color:#5C5C5C;
}
.thank-you-pop p{
  font-size: 20px;
    margin-bottom: 27px;
  color:#5C5C5C;
}
.thank-you-pop h3.cupon-pop{
  font-size: 25px;
    margin-bottom: 40px;
  color:#222;
  display:inline-block;
  text-align:center;
  padding:10px 20px;
  border:2px dashed #222;
  clear:both;
  font-weight:normal;
}
.thank-you-pop h3.cupon-pop span{
  color:#03A9F4;
}
.thank-you-pop a{
  display: inline-block;
    margin: 0 auto;
    padding: 9px 20px;
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
    background-color: #8BC34A;
    border-radius: 17px;
}
.thank-you-pop a i{
  margin-right:5px;
  color:#fff;
}
#ignismyModal .modal-header{
    border:0px;
}
/*-
      </style>
          
</head>

<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
   
  <div class="body">
  
        <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body border-top-0">
          <div class="header-top header-top-borders">
            <div class="container h-100">
              <div class="header-row h-100">
                <div class="header-column justify-content-start">
                  <div class="header-row">
                    <nav class="header-nav-top">
                      <ul class="nav nav-pills">
                        <li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex">
                          <span class="pl-0"><i class="far fa-dot-circle text-4 text-color-primary" style="top: 1px;"></i> {{$gs->contact_address}}</span>
                        </li>
                        <li class="nav-item nav-item-borders py-2">
                          <a href="tel:123-456-7890"><i class="fab fa-whatsapp text-4 text-color-primary" style="top: 0;"></i> {{$gs->contact_phone}}</a>
                        </li>
                        <li class="nav-item nav-item-borders py-2 d-none d-md-inline-flex">
                          <a href="mailto:{{$gs->contact_email}}"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i> {{$gs->contact_email}}</a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
                <div class="header-column justify-content-end">
                  <div class="header-row">
                    <nav class="header-nav-top">
                      <ul class="nav nav-pills">
                        <li class="nav-item nav-item-borders py-2  d-lg-inline-flex">
                          <a href="{{ route('front.order') }}"  class="tp-caption d-inline-flex align-items-center btn btn-primary font-weight-bold rounded"  data-toggle="modal" data-target="#formModal"  style="color: #ffffff;">ORDER DELIVERY</a>
                        </li>
                         
                        
                       
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="header-container container">
            <div class="header-row">
              <div class="header-column">
                <div class="header-row">
                  <div class="header-logo">
                    <a href="{{ route('front.index') }}">
                      <img alt="" width="200" height="48" data-sticky-width="200" data-sticky-height="40" src="{{asset('assets/frontend/images/logo.png')}}">
                    </a>
                  </div>
                </div>
              </div>
              <div class="header-column justify-content-end">
                <div class="header-row">
                  <div class="header-nav header-nav-stripe order-2 order-lg-1">
                    <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                      <nav class="collapse">
                        <ul class="nav nav-pills" id="mainNav">
                          <li class="dropdown ">
                            <a id='home' class="dropdown-item dropdown-toggle active" href="{{ route('front.index') }}">
                              Home
                            </a> 
                          
                          </li>
                          <li class="dropdown dropdown-mega">
                            <a id="about-us" class="dropdown-item dropdown-toggle" href="{{ route('front.aboutus') }}">
                              About US
                            </a>
                          
                          </li>

                           <li class="dropdown">
                            <a id="order" class="dropdown-item dropdown-toggle" href="{{ route('front.order') }}">
                              Order
                            </a>
                          </li>

                          <li class="dropdown">
                            <a id="services" class="dropdown-item dropdown-toggle" href="{{ route('front.services') }}">
                              Services
                            </a>
                          </li>
                          <li class="dropdown">
                            <a id='faq' class="dropdown-item dropdown-toggle" href="{{ route('front.faq') }}">
                              FAQ
                            </a>
                          </li>
                          <li class="dropdown">
                            <a id='contact-us' class="dropdown-item dropdown-toggle" href="{{ route('front.contactus') }}">
                              Contact Us
                            </a>
                            
                          </li>
                          
                        </ul>
                      </nav>
                    </div>
                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                      <i class="fas fa-bars"></i>
                    </button>
                  </div>
                  <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                    <div class="header-nav-feature header-nav-features-search d-inline-flex">
                      <a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
                      <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                        <form role="search" action="page-search-results.html" method="get">
                          <div class="simple-search input-group">
                            <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                            <span class="input-group-append">
                              <button class="btn" type="submit">
                                <i class="fa fa-search header-nav-top-icon"></i>
                              </button>
                            </span>
                          </div>
                        </form>
                      </div>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>