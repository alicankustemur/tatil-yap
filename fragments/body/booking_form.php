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
                                <!-- 
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#tab4primary" data-toggle="tab">Primary 4</a></li>
                                        <li><a href="#tab5primary" data-toggle="tab">Primary 5</a></li>
                                    </ul>
                                </li>
                                -->
                            </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">

                            <div class="tab-pane fade in active" id="tab1primary">
                            
                                <?php require_once("booking_form/hotel.php"); ?>    

                            </div>
                            <div class="tab-pane fade" id="tab2primary">
                            	
                            	<?php require_once("booking_form/tours.php"); ?>

                            </div>
                            <div class="tab-pane fade" id="tab3primary">
                            	
                            	 <?php require_once("booking_form/fly.php");?>

                            </div>
                            <div class="tab-pane fade" id="tab4primary">Primary 4</div>
                            <div class="tab-pane fade" id="tab5primary">Primary 5</div>
                        </div>
                    </div>
                    <!-- Panel Body End -->
                </div>
            </div>
