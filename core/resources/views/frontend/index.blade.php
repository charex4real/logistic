@extends('frontend.layouts.layout')
@section('content')
@include('frontend/layouts/slider')
@include('frontend/layouts/home')

@include('frontend/layouts/map')
@include('frontend/layouts/search')
@include('frontend/layouts/top')

@include('frontend/layouts/counter')
<!--

    @include('frontend/layouts/top-section')

    @include('frontend/layouts/testimony')  -->

 @include('frontend/layouts/bottom') 
<!-- Testimonial Area End -->

<script type="text/javascript">
    $(document).ready(function () {
        @if (Session::has('search'))
          $("#replace").addClass("active");
        @endif

        if (window.location.hash == "#currier-search") {
        $(".nav-link").removeClass("active");
            $("#qurrierSearch").addClass("active");
        };
        if (window.location.hash == "#topClasses") {
        $(".nav-link").removeClass("active");
             $("#gallery").addClass("active");
        };
         if (window.location.hash == "#testimonial") {
            $(".nav-link").removeClass("active");
            $("#testimonial2").addClass("active");
        };
    });
</script>
@endsection

