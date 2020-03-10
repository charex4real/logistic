@extends('frontend.layouts.master')
@section('content')
<section class="page-header page-header-classic page-header-sm">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                                <h1 data-title-border>Create Currier</h1>
                            </div>
                            <div class="col-md-4 order-1 order-md-2 align-self-center">
                                <ul class="breadcrumb d-block text-md-right">
                                    <li><a href="{{ route('front.order') }}">Order</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
 </section>


   
 @include('frontend/layouts/order')


@include('frontend/layouts/bottom') 
<script type="text/javascript">
    $("#home").removeClass("active");
    $("#order").addClass("active");

     
   
    $("#orderform").on('submit', function(e) {
         e.preventDefault();
          $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

         var data = $("#orderform").serialize();
         $('#spinner').modal('show');

        $.ajax({
            type: "post",
            url: "form",
            data: data,
            dataType: "json",
            success: function(data) {
                console.log('success');
                 //$('#ignismyModal').modal('hide');
                 setInterval(function(){ 
                $('#orderform')[0].reset();
                 $('#spinner').modal('hide');
                    //$("formdiv").hide();
                $("#frmtrack").html(data.code);
                  $('#ignismyModal').modal('show');

                 }, 2000);
            },
            error: function(error) {
                //console.log('error');
                 setInterval(function(){ 
                
                 $('#spinner').modal('hide');
                    //$("formdiv").hide();
                 }, 1000);
            }
        });
     });

</script>
@endsection

