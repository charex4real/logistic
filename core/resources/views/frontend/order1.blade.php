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


   
 @include('frontend/layouts/order1')


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
                console.log('error');

                 setInterval(function(){ 
                    $('#spinner').modal('hide');
                 }, 1000);
            }
        });
     });

    function currier_type(id) {
        $(".currier_quantity_" + id).val('');
        $(".currier_fee_" + id).val('');
        $("#rate_" + id).html('');
        let
        unit = $("#courier_type_" + id).find(':selected').data('unit');
        let
        price = $("#courier_type_" + id).find(':selected').data('price');
        let
        currency = $("#courier_type_" + id).find(':selected').data('currency');
        $("#unit_" + id).html(unit);
        $("#rate_" + id).html(`&nbsp; [ 1 ${unit} = ${price} ${currency}]`);
                if ($('#courier_type_' + id).val() == '') {
            $(".currier_quantity_" + id).attr("disabled", true);
            $("#rate_" + id).html('');
            $("#unit_" + id).html('<i class="fas fa-balance-scale"></i>');
        }
        if ($('#courier_type_' + id).val()) {
            $(".currier_quantity_" + id).removeAttr("disabled");
        }
    }
    function currier_quantity(id) {

        let
        quantity = $(".currier_quantity_" + id).val();
        let
        price = $("#courier_type_" + id).find(':selected').data('price');
        $(".currier_fee_" + id).val(quantity * price);
    }
</script>
<script type="text/javascript">
    $(document).ready(function () {

        var id = 0;
        $("#btnAddNewRow").click(function () {
            var flag = 0;
            $(".currier_type").each(function () {
                if ($(this).val() === '') {
                    flag++;
                    $(this).addClass("is-invalid");
                    toastr.error("Currier type is required");
                }
            });
            $(".currier_quantity").each(function () {
                if ($(this).val() === '') {
                    flag++;
                    $(this).addClass("is-invalid");
                    toastr.error("Currier quantity is required");
                }
            });

            var fieldHTML = '';
            if (flag === 0) {
                id++;
                fieldHTML += '<div id="element_' + id + '">';
                fieldHTML += '<div class="clearfix"></div>';
                fieldHTML += '<div class="RowDiv_' + id + '">';
                fieldHTML += '<div class="row">';
                fieldHTML += '<div class="col-lg-3">';
                fieldHTML += '<div class="form-group">';
                fieldHTML += '<select class="form-control form-control-lg requiredSK currier_type" name="currier_type[]" id="courier_type_' + id + '" onchange="currier_type(' + id + ')">';
                fieldHTML += '<option value="">Choose Type</option>';
                fieldHTML += '@foreach($courierTypeList as $courierType)';
                fieldHTML += '<option value="{{ $courierType->id }}" data-price="{{ $courierType->price }}" data-currency="{{ $gs->base_currency }}" data-unit="{{ $courierType->unit->name }}" >{{ $courierType->name }}</option>';
                fieldHTML += '@endforeach';
                fieldHTML += '</select>';
                fieldHTML += '</div>';
                fieldHTML += '</div>';
                fieldHTML += '<div class="col-lg-3">';
                fieldHTML += '<div class="input-group input-group-lg">';
                fieldHTML += '<input class="form-control form-control-lg currier_quantity_' + id + ' currier_quantity requiredSK" type="number" name="currier_quantity[]" disabled onchange="currier_quantity(' + id + ')" onkeyup="currier_quantity(' + id + ')" placeholder="Quantity">';
                fieldHTML += '<div class="input-group-prepend">';
                fieldHTML += '<span class="input-group-text" id="unit_' + id + '"></span>';
                fieldHTML += '</div>';
                fieldHTML += '</div>';
                fieldHTML += '</div>';
                fieldHTML += '<div class="col-lg-6">';
                fieldHTML += '<div class="row no-gutters">';
                fieldHTML += '<div class="col-lg-7">';
                fieldHTML += '<div class="form-group">';
                fieldHTML += '<input class="form-control form-control-lg mb-3 currier_fee_' + id + ' currier_fee" type="text" readonly=""  name="currier_fee[]" placeholder="Currier Fee">';
                fieldHTML += '</div>';
                fieldHTML += '</div>';
                fieldHTML += '<div class="col-lg-3 pt-2">';
                fieldHTML += '<div id="rate_' + id + '" class="text-info font-weight-bold" style="font-size:14px;">&nbsp;</div>';
                fieldHTML += '</div>';
                fieldHTML += '<div class="col-lg-1">';
                fieldHTML += '<a href="javascript:void(0)" onclick="removeElement(' + id + ')"><span id="remove_' + id + '"><i class="far fa-times-circle fa-2x" style="color:red; border-radius:50%; margin-left:5px; margin-top: 5px;"></i></span></a>';
                fieldHTML += '</div>';
                fieldHTML += '</div>';
                fieldHTML += '</div>';
                fieldHTML += '</div>';
                fieldHTML += '</div>';
                fieldHTML += '</div>';
                fieldHTML += '</div>';
                fieldHTML += '</div>';
                $("#currierDetailsRow").append(fieldHTML);
            }
        });
    });
    function removeElement(id) {
        var set_id = "#element_" + id;
        if (id > 0) {
            $(set_id).remove();
        }
    }
    $(document).on("keyup change focusout", ".requiredSK", function () {
        if ($(this).val() == '') {
            $(this).addClass("is-invalid");
        } else {
            $(this).removeClass("is-invalid");
        }
    });
</script>
@endsection

