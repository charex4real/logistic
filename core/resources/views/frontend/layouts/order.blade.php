<div class="container">                 
    <div class="row">
         <div class="col" id="formdiv">
            <form  id="orderform" method="post"  class="needs-validation" action="javascript:void(0)">
                @csrf
           
               
                   <div class="featured-boxes">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="featured-box featured-box-primary text-left mt-5">
                                                    <div class="box-content">
                                                        
                                                        <div class="form-row">
                                                            <div class="form-group col">
                                                                <label class="font-weight-bold text-dark text-2">Sender Name</label>
                                                                <input type="text" id="sender_name" name="sender_name"  class="form-control form-control-lg"  placeholder="Sender Name..."    required 
                                                                />
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col">
                                                                <label class="font-weight-bold text-dark text-2">Sender Phone</label>
                                                                <input type="text" id="sender_phone" name="sender_phone"  class="form-control form-control-lg"  placeholder="Sender Phone"
                                                                   required 
                                                                   />
                                                            </div>
                                                        </div>


                                                        <div class="form-row">
                                                            <div class="form-group col">
                                                                <label class="font-weight-bold text-dark text-2">Sender Email (optional)</label>
                                                                <input type="text" id="sender_email" name="sender_email"  class="form-control form-control-lg"  placeholder="Sender Email" />
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col">
                                                                <label class="font-weight-bold text-dark text-2">Pick Up Address</label>
                                                                <textarea rows="5"  id="sender_address"  name="sender_address"   class="form-control form-control-lg"   readonly
                                                                 required 
                                                                >{!! $sender_address !!}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col">
                                                                <label class="font-weight-bold text-dark text-2">Who Is Paying</label>
                                                                
                                                                <br>
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="payment_by" data-msg-required="Please select at least one option." id="payment_by" value="Sender" checked> Sender
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="payment_by" data-msg-required="Please select at least one option." id="payment_by" value="Receiver"> Receiver
                                                                </label>
                                                            </div>

                                                            </div>
                                                        </div>
                                                           
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="featured-box featured-box-primary text-left mt-5">
                                                    <div class="box-content">
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label class="font-weight-bold text-dark text-2">Receiver Area/City</label>
                                                                    <input type="text" id="area_code" name="area_code" 
                                                                    value="{{ $receiver_address }}" 
                                                                    class="form-control form-control-lg"  readonly required >
                                                                </div>
                                                            </div>

                                                             <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label class="font-weight-bold text-dark text-2">Recipient Name</label>
                                                                    <input type="text" id="receiver_name" name="receiver_name"  class="form-control form-control-lg"   required >
                                                                </div>
                                                            </div>
                                                             <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label class="font-weight-bold text-dark text-2">Recipient Phone </label>
                                                                    <input type="text" id="receiver_phone" name="receiver_phone"class="form-control form-control-lg"    required >
                                                                </div>
                                                            </div>

                                                             <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label class="font-weight-bold text-dark text-2">Recipient Email (optional)</label>
                                                                    <input type="text" id="receiver_email" name="receiver_email"class="form-control form-control-lg" >
                                                                </div>
                                                            </div>

                                                             <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label class="font-weight-bold text-dark text-2">Recipient Address</label>
                                                                     <textarea rows="5" type="text" id="receiver_address"  name="receiver_address"   class="form-control form-control-lg"   readonly required 
                                                                       >{{$receiver_address}}</textarea>
                                                                </div>
                                                            </div>

                                                            

                                                            
                                                            </div>
                                                    </div>
                                            </div>
                                        </div>
                    </div>
               
                

                <div class="col-lg-12">
                    <div class="card mb-4">
                                    <div class="card-body">
                                        <h3 class="mb-2 text-uppercase">Currier Details<hr></h3>
                                        <div id="currierDetailsRow" class="currierDetailsRow">
                                            <div class="RowDiv_0">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label for="currier_type" class="font-weight-bold text-dark text-2 text-uppercase"><strong>Currier Type&nbsp;<span class="mark">*</span></strong></label>
                                                            <select class="form-control form-control-lg currier_type SK" name="currier_type[]" id="courier_type_0" required>
                                                                <option value="">Choose Type</option>
                                                                @foreach($courierTypeList as $courierType)
                                                                <option value="{{ $courierType->id }}" data-price="{{ $courierType->price }}" data-currency="{{ $gs->base_currency }}" data-unit="{{ $courierType->unit->name }}" >{{ $courierType->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="currier_quantity" class="font-weight-bold text-dark text-2 text-uppercase"><strong>Quantity&nbsp;<span class="mark">*</span></strong></label>
                                                        <div class="input-group input-group-lg">
                                                            <input class="form-control form-control-lg currier_quantity_0 currier_quantity SK" max="300" type="number" name="currier_quantity[]" readonly  value="1">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="unit_0"><i class="fas fa-balance-scale"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row no-gutters">
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <label for="currier_fee" class="font-weight-bold text-dark text-2 text-uppercase"><strong>Currier fee&nbsp;<span class="mark">*</span></strong></label>
                                                                    <input class="form-control form-control-lg mb-3 currier_fee_0 currier_fee" max="300" type="text" readonly=""  name="currier_fee[]" value="{{ $price }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 pt-3">
                                                                <div id="rate_0" class="text-info font-weight-bold pt-4" style="font-size:14px;">&nbsp;</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                       
                                    </div>
                    </div>
                </div>
           
                <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Create New Currier</button>
                </div>
         </form>
        </div>
    </div>
</div>
                   
