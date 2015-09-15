<!-- Booking Form Start -->

<!-- Booking Form Container Start -->

<div class="container">
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="panel with-nav-tabs panel-primary booking-form-body">
                    <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                <li id="tab_hotel" class="active"><a href="#tab1primary" data-toggle="tab">Otel</a></li>
                                <li id="tab_tour"><a href="#tab2primary" data-toggle="tab" >Tur</a></li>
                                <li id="tab_plane"><a href="#tab3primary" data-toggle="tab">Uçak</a></li>
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#tab4primary" data-toggle="tab">Primary 4</a></li>
                                        <li><a href="#tab5primary" data-toggle="tab">Primary 5</a></li>
                                    </ul>
                                </li>
                            </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">

                        <!-- OTEL Start -->

                            <div class="tab-pane fade in active" id="tab1primary">

                            <form action="" method="GET">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <label for="">Otel veya Şehir girin</label>
                                            <input type="text" class="form-control" id="otel_and_city" name="otel_and_city">
                                        </div>
                                    </div>
                                </div>

                               
                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-lg-6 col-md-6">
                                            <label for="">Giriş Tarihi</label>
                                            <div class='input-group' >
                                                <input type="text"  id="inputDatetator" name="check_in" class="form-control">
                                              <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                             </div>
                                        </div>
                                    
                                        <div class="col-lg-6 col-md-6">
                                            <label for="">Çıkış Tarihi</label>
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
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <button type="submit" id="submit" class="btn btn-primary form-control">Ara</button>
                                        </div>
                                    </div>
                                </div>
                        <!-- OTEL End -->
                            </form>  
                             <!-- Panel Body Form End -->    
                            </div>
                            <div class="tab-pane fade" id="tab2primary">
                            	
                            	<div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <label for="">Tur veya Şehir girin</label>
                                            <input type="text" class="form-control" id="tour_and_city" name="tour_and_city">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <label for="">Dönem seçiniz</label>
                                           <select name="" id="" class="form-control">
                                           <?php
									        	for($i = 1 ; $i <= 6 ; $i++){
									        		echo "<option value=$i>$i</option>";
									        	}

											?>
                                           </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                	<div class="row">
                                		<div class="col-lg-6 col-md-6">
                                			<label for="">Yetişkin</label>
                                				<select class="form-control">
											        <?php

											        	for($i = 1 ; $i <= 6 ; $i++){
											        		echo "<option value=$i>$i</option>";
											        	}

											        ?>
											  	</select>
                                		</div>

                                		<div class="col-lg-6 col-md-6">
                                			<label for="">Çocuk</label>
                                				<select class="form-control">
											        <?php

											        	for($i = 1 ; $i <= 5 ; $i++){
											        		echo "<option value=$i>$i</option>";
											        	}

											        ?>
											  	</select>
                                		</div>

                                		

                                	</div>
                                </div>

                               <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <button type="submit" id="submit" class="btn btn-primary form-control">Ara</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="tab3primary">
                            	
                            	 <div class="form-group">
                                    <div class="row">
										<div class="col-lg-6 col-md-6 funkyradio">
									        <div class="funkyradio-primary">
									            <input type="radio" name="radio" id="radio2"/>
									            <label for="radio2" style="color:gray;">Gidiş-Dönüş</label>
									        </div>
								    	</div>

								    	<div class="col-lg-6 col-md-6 funkyradio">
									        <div class="funkyradio-primary">
									            <input type="radio" name="radio" id="radio3"/>
									            <label for="radio3">Tek Yön</label>
									        </div>
								    	</div>
                                    </div>
                                </div>

                                <div class="form-group">
                                	<div class="row">
                                		<div class="col-lg-6 col-md-6">
									        <label for="">Nereden</label>
                                            <input type="text" class="form-control" id="from_where" name="from_where">
								    	</div>
								    	<div class="col-lg-6 col-md-6">
									        <label for="">Nereye</label>
                                            <input type="text" class="form-control" id="where" name="where">
								    	</div>
                                	</div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-lg-6 col-md-6">
                                            <label for="">Giriş Tarihi</label>
                                            <div class='input-group' >
                                                <input type="text"  id="inputDatetator3" name="check_in" class="form-control">
                                              <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                             </div>
                                        </div>
                                    
                                        <div class="col-lg-6 col-md-6">
                                            <label for="">Çıkış Tarihi</label>
                                            <div class='input-group' >
                                                <input type="text"  id="inputDatetator4" name="check_out" class="form-control">
                                              <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                             </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                	<div class="row">
                                		<div class="col-lg-4 col-md-4">
                                			<label for="">Yetişkin</label>
                                				<select class="form-control">
											        <?php

											        	for($i = 1 ; $i <= 6 ; $i++){
											        		echo "<option value=$i>$i</option>";
											        	}

											        ?>
											  	</select>
                                		</div>
                                		<div class="col-lg-4 col-md-4">
                                			<label for="">Çocuk</label>
                                				<select class="form-control">
											        <?php

											        	for($i = 1 ; $i <= 5 ; $i++){
											        		echo "<option value=$i>$i</option>";
											        	}

											        ?>
											  	</select>
                                		</div>
                                		<div class="col-lg-4 col-md-4">
                                			<label for="">Bebek</label>
                                				<select class="form-control">
											        <?php

											        	for($i = 1 ; $i <= 4 ; $i++){
											        		echo "<option value=$i>$i</option>";
											        	}

											        ?>
											  	</select>
                                		</div>
                                	</div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <button type="submit" id="submit" class="btn btn-primary form-control">Ara</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="tab4primary">Primary 4</div>
                            <div class="tab-pane fade" id="tab5primary">Primary 5</div>
                        </div>
                    </div>
                    <!-- Panel Body End -->
                </div>
            </div>
