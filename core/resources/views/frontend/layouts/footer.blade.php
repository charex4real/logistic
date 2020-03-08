

   <footer id="footer">
        <div class="container">
          <div class="footer-ribbon">
            <span>Get in Touch</span>
          </div>
          <div class="row py-5 my-4">
            <div class="col-md-6 mb-4 mb-lg-0">
              <a href="index.html" class="logo pr-0 pr-lg-3">
                <img alt="Porto Website Template" src="{{asset('assets/frontend/images/logo.png')}}" class="opacity-7 bottom-4" height="33">
              </a>
              <p class="mt-2 mb-2">{{ $gs->footer_about }}</p>
              <p class="mb-0"><a href="{{ route('front.aboutus') }}" class="btn-flat btn-xs text-color-light"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p>
            </div>
            <div class="col-md-6">
              <h5 class="text-3 mb-3">CONTACT US</h5>
              <div class="row">
                <div class="col-md-6">
                  <ul class="list list-icons list-icons-lg">
                    <li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">{{$gs->contact_address}}</p></li>
                    <li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:{{$gs->contact_phone}}">{{$gs->contact_phone}}</a></p></li>
                    <li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:{{$gs->contact_email}}">{{$gs->contact_email}}</a></p></li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="list list-icons list-icons-sm">
                    <li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="link-hover-style-1 ml-1"> FAQ's</a></li>
                    <li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="link-hover-style-1 ml-1"> Sitemap</a></li>
                    <li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="link-hover-style-1 ml-1"> Contact Us</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-copyright footer-copyright-style-2">
          <div class="container py-2">
            <div class="row py-4">
              <div class="col d-flex align-items-center justify-content-center">
                <p> {!! $gs->footer_text !!}</p>
              </div>
            </div>
          </div>
        </div>
    </footer>

      </div>
    <!-- Vendor -->
    
      
<div class="modal fade" id="spinner" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog"  style="position: fixed; top: 42%; left: 45%;">
    <div class="loaders"></div>
  </div>
</div>

      <div class="modal fade" id="ignismyModal"  tabindex="-1"  aria-labelledby="formModalLabel" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>CLOSE</span></button>
                     </div>
          
                    <div class="modal-body">
                          <div class="thank-you-pop">
                            <img src="{{asset('assets/frontend/images/correct.png')}}" alt="">
                            <h1>Your Ordee Has been Place!</h1>
                            <p></p>
                            <h3 class="cupon-pop">Your Tracking Code is: <span id="frmtrack"></span></h3>
                            
                          </div>
                    </div>
                  </div>
                </div>
        </div>
   
  
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfCjsgA6B-3chmgDvdRGiy1ZOsTg4900s&libraries=places"> 
  </script>
    <script src="{{asset('assets/frontend/js/google_map.js')}}"></script>
  

    <script src="{{asset('assets/frontend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendor/popper/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendor/common/common.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendor/isotope/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendor/vide/jquery.vide.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendor/vivus/vivus.min.js')}}"></script>
    
    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('assets/frontend/js/theme.js')}}"></script>
    
    <!-- Current Page Vendor and Views -->
    <script src="{{asset('assets/frontend/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- Revolution Slider Addon - Typewriter -->
    <script type="text/javascript" src="{{asset('assets/frontend/vendor/rs-plugin/revolution-addons/typewriter/js/revolution.addon.typewriter.min.js')}}"></script>

    
    <!-- Theme Custom -->
    <script src="{{asset('assets/frontend/js/custom.js')}}"></script>
    
    <!-- Theme Initialization Files -->
    <script src="{{asset('assets/frontend/js/theme.init.js')}}"></script>
    <!-- Contact js -->
    <script src="{{asset('assets/frontend/js/contact.js')}}"></script>
    <!--Main-->
    <script src="{{asset('assets/frontend/js/main.js')}}"></script>


        <script>
                @if (Session::has('success'))
                toastr.success("{{ Session::get('success') }}");
                @endif

                @if (count($errors) > 0)
                @foreach($errors -> all() as $error)
                toastr.error("{{ $error }}");
                @endforeach
                @endif
        </script>

        <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-12345678-1', 'auto');
      ga('send', 'pageview');
    </script>
     -->
  </body>
</html>

