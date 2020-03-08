<section id="search-domain" class="section section-text-light section-center mt-0 mb-0" style="background: url(assets/frontend/images/background/bg.jpg); background-size: cover; background-position: center;">
					<div class="container" id="currier-search">
						<div class="row justify-content-center">
							<div class="col-lg-8 text-center">
								<h2 class="text-light mb-0">Track <strong>Parcel</strong></h2>
								<p class="mb-4">Enter Courier Code / Invoice</p>

								<form action="{{ route('search.currier') }}" method="post" id="domainSearchForm">
									  @csrf
									<div class="form-row">
										<div class="col">
											<div class="input-group">
												<input type="text" name="currier_invoice" class="form-control form-control-lg form-control-focused invoice-search"  value="{{request()->currier_invoice}}" aria-label="..." placeholder="Enter your domain" required data-msg-required="Please enter your domain.">
												
												
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="col">
											<button class="btn btn-lg btn-primary mt-4" href="#">Search Domain</button>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
				</section>

				 @if(!empty(Session::get('currierInfo')))
        @php
        $list = Session::get('currierInfo')
        @endphp
               <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
             <div class="card card-background-image-hover border-0" style="background-image: url(assets/frontend/images/bg/bg_700x700.png);">
                <div class="card-body text-center p-5">
                    <i class="icon-layers icons text-color-primary text-10"></i>
                    <h4 class="card-title mt-2 mb-2 text-5 font-weight-bold">Sender:  {{ $list->sender_name }}</h4>
                    <h4 class="card-title mt-2 mb-2 text-5 font-weight-bold">Recipient: {{ $list->receiver_name }}</h4>
                    
                    <p class="card-text">  {{ $list->created_at->toDateString() }}</p> 
                      
                         @if($list->st)  {{ $list->created_at->toDateString() }}atus  == 'Delivered')
                                <span class="btn btn-sm btn-danger text-uppercase">Delivered</span>
                                @else
                                <span class="btn btn-sm btn-success text-uppercase">Received</span>
                            @endif
                </div>
            </div>
        </div>
        @endif