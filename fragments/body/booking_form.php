<!-- Booking Form Start -->
<form action="" method="GET">
	
	<div class="container">
		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
			<div class="panel panel-primary booking-form-body">
				<div class="panel-heading">Yüzbinlerce otel,konaklama merkezi ve daha fazlası.. </div>
					<div class="panel-body">
						

						<div class="form-group">
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<label for="">Otel veya Şehir ara</label>
									<input type="text" class="form-control" id="otel_and_city" name="otel_and_city">
								</div>
							</div>
						</div>

						

						<div class="form-group">
							<div class="row">

								<div class="col-lg-6 col-md-6">
									<label for="">Check-In</label>
									<div class='input-group' >
			                   			<input type="text"  id="inputDatetator" name="check_in" class="form-control">
				                  	  <span class="input-group-addon">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
			               			 </div>
					            </div>
					        
								<div class="col-lg-6 col-md-6">
									<label for="">Check-In</label>
									<div class='input-group' >
			                   			<input type="text"  id="inputDatetator2" name="check_out" class="form-control">
				                  	  <span class="input-group-addon">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
			               			 </div>
					            </div>

					        </div>
						</div>


						<div class="form-group">
							<div class="row">
								<div class="col-lg-3 col-lg-offset-9 col-md-3 col-md-offset-9 col-sm-4 col-sm-offset-8">
									<button type="submit" id="submit" class="btn btn-primary form-control">Ara</button>
								</div>
							</div>
						</div>
										
					</div>
					<!-- PANEL BODY END -->
				</div>
			</div>


			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
			<div class="panel panel-primary booking-form-body">
				<div class="panel-heading">Yüzbinlerce otel,konaklama merkezi ve daha fazlası.. </div>
					<div class="panel-body">
						

						<div class="form-group">
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<label for="">Otel veya Şehir ara</label>
									<input type="text" class="form-control" id="otel_and_city" name="otel_and_city">
								</div>
							</div>
						</div>

						

						<div class="form-group">
							<div class="row">

								<div class="col-lg-6 col-md-6">
									<label for="">Check-In</label>
									<div class='input-group' >
			                   			<input type="text"  id="inputDatetator" name="check_in" class="form-control">
				                  	  <span class="input-group-addon">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
			               			 </div>
					            </div>
					        
								<div class="col-lg-6 col-md-6">
									<label for="">Check-In</label>
									<div class='input-group' >
			                   			<input type="text"  id="inputDatetator2" name="check_out" class="form-control">
				                  	  <span class="input-group-addon">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
			               			 </div>
					            </div>

					        </div>
						</div>


						<div class="form-group">
							<div class="row">
								<div class="">
									<button type="submit" id="submit" class="btn btn-primary">Ara</button>
								</div>
							</div>
						</div>
										
					</div>
					<!-- PANEL BODY END -->
				</div>
			</div>
		</div>	
						
				
</form>	

<!-- Booking Form END -->



<?php

	print_r($_GET);

 ?>