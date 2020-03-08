<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
	<div class="container pb-2">
		<div class="row">
			<div class="col-lg-12">
				<div class="owl-carousel owl-theme nav-style-1 stage-margin" data-plugin-options="{'responsive': {'576': {'items': 3}, '768': {'items': 3}, '992': {'items': 3}, '1200': {'items': 3}}, 'loop': true, 'nav': false, 'dots': false, 'stagePadding': 40, 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
					<div>
						@foreach($testimonialList as $testimonial)
						<div class="testimonial testimonial-style-2">
							<blockquote>
								<p class="mb-0">{{ $testimonial->comment }}
								</p>
							</blockquote>
							<div class="testimonial-arrow-down"></div>
							<div class="testimonial-author">
								<div class="testimonial-author-thumbnail">
									<img src="{{('assets/frontend/images/testimonial/'.$testimonial->image)}}" alt="" class="rounded-circle">
								</div>
                                <span>{{ $testimonial->designation }}</span>
								<p><strong class="font-weight-extra-bold">{{ $testimonial->name }}</strong><span>CEO & Founder - Okler</span></p>
							</div>
						</div>
						 @endforeach
					</div>
									
				</div>
			</div>
		</div>
	</div>
</section>