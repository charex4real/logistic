@include('frontend/layouts/header')
        <div role="main" class="main">

          @yield('content')
          
  			@include('frontend/layouts/modal')
        </div>
@include('frontend/layouts/footer')
       
    