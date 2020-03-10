@include('frontend/layouts/header1')
        <div role="main" class="main">

          @yield('content')
          
  			@include('frontend/layouts/modal')
        </div>
@include('frontend/layouts/footer')
       
    