 <br/> <br/>
          <div class="row">
            <div class="col">
              <div class="row counters">
              

                <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                  <div class="counter counter-primary appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="300">
                    <i class="fas fa-user"></i>
                    <strong data-to="30000" data-append="+">{{ $gs->departure_currier }}</strong>
                    <label>Departure Currier</label>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                  <div class="counter counter-primary appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="600">
                    <i class="fas fa-star"></i>
                    <strong data-to="15">{{ $gs->upcoming_currier }}</strong>
                    <label>Upcoming Currier</label>
                  </div>
                </div>
               
                <div class="col-sm-6 col-lg-4">
                  <div class="counter counter-primary appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="1200">
                    <i class="far fa-chart-bar"></i>
                    <strong data-to="178">{{ $gs->total_deliver }}</strong>
                    <label>Total Deliver</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
      