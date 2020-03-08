
<div class="modal fade" id="formModal1" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				 <img alt="" width="50" height="50" data-sticky-width="100" data-sticky-height="40" src="{{asset('assets/frontend/images/favicon.png')}}" style="margin: auto !important;">
				
				 
			</div>
			<div class="modal-body">
				<form id="demo-form" class="mb-4" novalidate="novalidate">
					 @csrf
					<div class="form-group row align-items-center">
						<label class="col-sm-3 text-left text-sm-right mb-0">Sender Name</label>
						<div class="col-sm-9">
							<input type="text" name="sender_name" class="form-control" placeholder="Sender Name..." required/>
						</div>
					</div>
					<div class="form-group row align-items-center">
						<label class="col-sm-3 text-left text-sm-right mb-0">Sender Phone</label>
						<div class="col-sm-9">
							<input type="text" name="sender_phone" class="form-control" placeholder="Type your name..." required/>
						</div>
					</div>
					<div class="form-group row align-items-center">
						<label class="col-sm-3 text-left text-sm-right mb-0">Sender Email</label>
						<div class="col-sm-9">
							<input type="sender_email" name="email" class="form-control" placeholder="Type your email..." required/>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-3 text-left text-sm-right mb-0">Sender Address</label>
							<div class="col-sm-9">
								<textarea rows="5" class="form-control" placeholder="Pick Up Address..." name="sender_address" required></textarea>
							</div>
					</div>

					<!--  -----------------------------------  -->
					<div class="form-group">
                                            <label for="" style="text-transform: uppercase;"><strong>Receiver Area/ Code&nbsp;<span class="mark">*</span></strong></label>
                                           
                                            <input class="form-control form-control-lg mb-3" type="text" id="area_code" name="area_code" value="{{ old('area_code') }}" placeholder="Receiver Area/Code">
                                        </div>


					<div class="form-group row align-items-center">
						<label class="col-sm-3 text-left text-sm-right mb-0">Receiver Area/ LGA</label>
						<div class="col-sm-9">
							<input type="text" name="area_code" class="form-control" placeholder="LGA / Area..." required/>
						</div>
					</div>

					<div class="form-group row align-items-center">
						<label class="col-sm-3 text-left text-sm-right mb-0">Recipient Name</label>
						<div class="col-sm-9">
							<input type="text" name="receiver_name" class="form-control" placeholder="Type your name..." required/>
						</div>
					</div>
					<div class="form-group row align-items-center">
						<label class="col-sm-3 text-left text-sm-right mb-0">Recipient Phone</label>
						<div class="col-sm-9">
							<input type="text" name="receiver_phone" class="form-control" placeholder="Receiver Phone ..." required/>
						</div>
					</div>
					<div class="form-group row align-items-center">
						<label class="col-sm-3 text-left text-sm-right mb-0">Recipient Email</label>
						<div class="col-sm-9">
							<input type="email" name="receiver_email" class="form-control" placeholder="Receiver Email..." required/>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-3 text-left text-sm-right mb-0">Recipient Address</label>
							<div class="col-sm-9">
								<textarea rows="5" class="form-control" placeholder="Pick Up Address..." name="receiver_address" required></textarea>
							</div>
					</div>

				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save Changes</button>
			</div>
		</div>
	</div>
</div>

