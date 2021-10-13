<?php
include ("function.php");

if(isset($_REQUEST['select_car'])){
    // echo"<pre>";print_r($_REQUEST);exit;

    $trip= $_REQUEST['triptype'];
    $from_city_id= $_REQUEST['pickup_city_local'];
    // $drop_city_id= $_REQUEST['drop_city'];
    $pickup_city= get_city_name($from_city_id);
    // $drop_city= get_city_name($drop_city_id);
    $pickup_date= $_REQUEST['pickup_date_local'];
    $pickup_time= $_REQUEST['pickup_time_local'];
    $mobile_number= $_REQUEST['mobile_number_local'];
    $booking_type= $_REQUEST['booking_type'];
    // if(isset($_REQUEST['return_date']))$return_date= $_REQUEST['return_date'];

    $carArray= get_car_list();
    // echo"<pre>";print_r($carArray);exit;

}



?>
<!DOCTYPE html> 
<html lang="en" class=""> 
    <head> 
        <!-- basic -->         
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <!-- mobile metas -->         
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="viewport" content="initial-scale=1, maximum-scale=1"> 
        <!-- site metas -->         
        <title>The Yellow Cabs</title>         
        <meta name="keywords" content=""> 
        <meta name="description" content=""> 
        <meta name="author" content=""> 
        <!-- bootstrap css -->         
        <link rel="stylesheet" href="css/bootstrap.min.css"> 
        <!-- style css -->         
        <link rel="stylesheet" href="css/style.css"> 
        <!-- Responsive-->         
        <link rel="stylesheet" href="css/responsive.css"> 
        <!-- fevicon -->         
        <link rel="icon" href="images/fevicon.png" type="image/gif"/> 
        <!-- Scrollbar Custom CSS -->         
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css"> 
        <!-- Tweaks for older IEs-->         
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen"> 
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->         
        <link rel="stylesheet" href="components/pg.blocks/css/blocks.css"> 
        <link rel="stylesheet" href="components/pg.blocks/css/plugins.css"> 
        <link rel="stylesheet" href="components/pg.blocks/css/style-library-1.css"> 
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700"> 
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic"> 
        <link rel="stylesheet" href="blocks.css"> 
        <style type="text/css">.nav-tabs .nav-link.active { color: #fff; background-color: #ffc107; }</style>         
    </head>     
    <!-- body -->     
    <body class="main-layout">
        <header> 
            <div class="header pt-3" style="box-shadow: 0 2px 4px 5px rgba(0, 0, 0, 0.2), 0 3px 10px 2px rgba(0, 0, 0, 0.19);"> 
                <div class="row"> 
                    <div class="col-6 col-md-4 mr-0 pl-4 pr-0 d-flex flex-wrap align-items-center"> 
                        <a href="index.php"><img src="images/logo.png" style="width: 250px;" alt="The Yellow Cabs"></a> 
                    </div>                     
                    <div class="col-md-4 col-6"> 
                        <div class="ml-0 mr-0 pl-0 pr-0 sign_btn text-center" style="white-space: nowrap;"> 
                            <a href="tel:+919638802666" class="pl-2 pr-2" style="font-size: 125%;"><i class="fa fa-lg fa-phone"></i>+91-9638802666</a> 
                        </div>                         
                    </div>                     
                    <div class="col-md-4"> 
                        <div class="d-none d-sm-block pl-0 sign_btn text-right text-sm-right"> 
                            <a href="inquirey.php" class="pl-3 pr-3" style="font-size: 120%;">Inquirey</a> 
                        </div>                         
                    </div>                     
                </div>                 
            </div>
            <!-- header inner -->             
            <img src="images/tes_bg.jpg" width="100%"/> 
        </div>
    </header>     
    <!-- loader  -->     
    <div class="loader_bg"> 
        <div class="loader"> 
            <img src="images/loading.gif" alt="#" style="width: 150px;"/> 
        </div>         
    </div>     
    <!-- end loader -->     
    <!-- header -->     
    <!-- end header inner -->     
    <!-- end header -->     
    <!-- banner -->     
    <!-- end banner -->     
    <!-- form_lebal -->     
    <!-- end form_lebal -->     
    <!-- choose  section -->     
    <!-- end choose  section -->     
    <!-- our  section -->     
    <form action="confirmbooking.php" id="selectcar_form" name="selectcar_form" method="post">
        <input type="hidden" id="select_car" name="select_car" value="" />
        <input type="hidden" id="from_city_id" name="from_city_id" value="<?php echo $from_city_id; ?>" />
        <input type="hidden" id="pickup_city" name="pickup_city" value="<?php echo $pickup_city; ?>" />
        <input type="hidden" id="trip" name="trip" value="<?php echo $booking_type; ?>" />
        <input type="hidden" id="pickup_date" name="pickup_date" value="<?php echo $pickup_date; ?>" />
        <input type="hidden" id="pickup_time" name="pickup_time" value="<?php echo $pickup_time; ?>" />
        <input type="hidden" id="mobile_number" name="mobile_number" value="<?php echo $mobile_number; ?>" />
        <input type="hidden" id="total_fare" name="total_fare" value="" />
        <input type="hidden" id="car" name="car" value="" />
        <input type="hidden" id="car_id" name="car_id" value="" />
        <input type="hidden" id="car_type" name="car_type" value="" />
        <input type="hidden" id="distance" name="distance" value="" />
        
    </form>
    <div class="our"> 
        <section class="bg-white "> 
            <div class="container pb-3 pt-0"> 
                <div class="align-items-center bg-light row"> 
                    <div class="col-lg-8 me-auto pb-3 pt-3 text-left"> 
                        <span class="h5"><?php echo $pickup_city;  ?></span>  &nbsp; > &nbsp; 
                        <span class="h5">(<?php echo $booking_type; ?>)</span>
                    </div>                     
                    <div class="col-lg-2 col-6 pb-3 pt-3 text-center"> 
                        <span>PickUp</span>
                        <br/>
                        <span class="h5"><?php echo $pickup_date; ?></span>
                    </div>
                    <div class="col-lg-2 col-6 pb-3 pt-3 text-center"> 
                        <span>Time</span>
                        <br/>
                        <span class="h5"><?php echo $pickup_time ?></span>
                    </div>                     
                </div>                 
                <ul class="mb-3 mt-2 nav nav-justified nav-tabs" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-8" role="tab" aria-controls="pills-home" aria-selected="true">8 hrs | 80 km</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-12" role="tab" aria-controls="pills-profile" aria-selected="false">12 hrs | 120 km</a>
                    </li>
                </ul>
            </div>
            <div class="container pb-4 pt-0"> 
                <div class="tab-content" id="pills-tabContent">
                    <div class="active fade pt-0 show tab-pane" id="pills-8" role="tabpanel" aria-labelledby="pills-8-tab">
                    <?php 
                        for($i=0;$i<count($carArray);$i++){
                            $eight_hrs= $carArray[$i]['eight_hrs'];
                            $rate= $carArray[$i]['rate'];
                    ?>
                        <div class="align-items-center mb-2 ml-1 mr-1 row" style="border: 1px solid #F8BC20; border-radius: 5px;"> 
                            <div class="col-8 col-lg-4 me-auto pb-3 pt-3">
                                <div class="row">
                                    <div class="col-12 col-md-3">
                                        <img src="<?php echo $carArray[$i]['product_image']; ?>" style="min-width: 150px;"/> 
                                    </div>
                                    <div class="col-12 col-md-9 text-right">
                                        <span class="h4"><?php echo $carArray[$i]['car']; ?> or equivalent</span>
                                        <div class="h5">(<?php echo $carArray[$i]['car_type']; ?>)</div>
                                    </div>
                                </div>
                            </div>                             
                            <div class="col-4 col-lg-3 pb-3 pt-3 text-center">
                                <div>
                                    <span class="h4">Includes 80 KM</span>
                                </div>
                                <div>
                                    <span class="h5">And 8 Hours</span>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 pb-3 pt-3 text-center"> 
                                <div>
                                    <span class="h4"><?php echo $eight_hrs; ?></span>
                                    <span class="h4">₹</span>
                                </div>
                                <div>
                                    <span class="h5"><u data-toggle="modal" data-target="#modal8_<?php echo $i; ?>">Fare Summery</u></span>
                                </div>
                                <div class="modal pg-show-modal fade" id="modal8_<?php echo $i; ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Fare Summery</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="mt-0 text-left"><u>Extra KM :</u>&nbsp;<?php echo $rate; ?> ₹ Per KM</p>
                                                <p class="text-left"><u>Extra Hour :</u> 150&nbsp;₹ Per Hour</p>
                                                <p class="text-left"><u>Inclusion :</u>&nbsp;Driver Allowance</p>
                                                <p class="mb-0 text-left"><u>Exclusion :</u>&nbsp;Parking charge , Airport Parking Charge,&nbsp;Toll tax , State tax</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-2 pb-3 pt-3 text-center">
                                <button type="button" class="btn btn-warning" onclick="setCarvalue('<?php echo $carArray[$i]['car']; ?>','<?php echo $carArray[$i]['car_type']; ?>','<?php echo $carArray[$i]['id']; ?>','8_Hrs_80_KM','<?php echo $eight_hrs; ?>')">Book Now</button>                                 
                            </div>                             
                        </div>
                    <?php } ?>
                    </div>
                    <div class="fade pt-0 tab-pane" id="pills-12" role="tabpanel" aria-labelledby="pills-12-tab">
                    <?php 
                        for($i=0;$i<count($carArray);$i++){
                            $twelve_hrs= $carArray[$i]['twelve_hrs'];
                            $rate= $carArray[$i]['rate'];
                    ?>
                        <div class="align-items-center mb-2 ml-1 mr-1 row" style="border: 1px solid #F8BC20; border-radius: 5px;"> 
                            <div class="col-8 col-lg-4 me-auto pb-3 pt-3">
                                <div class="row">
                                    <div class="col-12 col-md-3">
                                        <img src="<?php echo $carArray[$i]['product_image']; ?>" style="min-width: 150px;"/> 
                                    </div>
                                    <div class="col-12 col-md-9 text-right">
                                        <span class="h4"><?php echo $carArray[$i]['car']; ?> or equivalent</span>
                                        <div class="h5">(<?php echo $carArray[$i]['car_type']; ?>)</div>
                                    </div>
                                </div>
                            </div>                             
                            <div class="col-4 col-lg-3 pb-3 pt-3 text-center">
                                <div>
                                    <span class="h4">Includes 120 KM</span>
                                </div>
                                <div>
                                    <span class="h5">And 12 Hours</span>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 pb-3 pt-3 text-center"> 
                                <div>
                                    <span class="h4"><?php echo $twelve_hrs; ?></span>
                                    <span class="h4">₹</span>
                                </div>
                                <div>
                                    <span class="h5"><u data-toggle="modal" data-target="#modal12_<?php echo $i; ?>">Fare Summery</u></span>
                                </div>
                                <div class="modal pg-show-modal fade" id="modal12_<?php echo $i; ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Fare Summery</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="mt-0 text-left"><u>Extra KM :</u>&nbsp;<?php echo $rate; ?> ₹ Per KM</p>
                                                <p class="text-left"><u>Extra Hour :</u> 150&nbsp;₹ Per Hour</p>
                                                <p class="text-left"><u>Inclusion :</u>&nbsp;Driver Allowance</p>
                                                <p class="mb-0 text-left"><u>Exclusion :</u>&nbsp;Parking charge , Airport Parking Charge,&nbsp;Toll tax , State tax</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-2 pb-3 pt-3 text-center">
                            <button type="button" class="btn btn-warning" onclick="setCarvalue('<?php echo $carArray[$i]['car']; ?>','<?php echo $carArray[$i]['car_type']; ?>','<?php echo $carArray[$i]['id']; ?>','12_Hrs_120_KM','<?php echo $twelve_hrs; ?>')">Book Now</button>                                 
                            </div>                             
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>             
        </section>         
    </div>     
    <!-- end our  section -->     
    <!-- about -->     
    <!-- end about -->     
    <!-- testimonial -->     
    <section> 
        <section class="bg-dark content-block-nopad footer-wrap-1-1"> 
            <div class="container footer-1-1"> 
                <div class="row"> 
                    <div class="col-sm-6 col-sm-offset-1"> 
                        <div class="row"> 
</div>                         
                    </div>                     
                </div>                 
                <!-- /.row -->                 
                <div class="row"> 
                    <div class="col-md-4 col-xl-4"> 
                        <h4 class="text-white">COMPANY</h4> 
                        <ul> 
                            <li style="border:rgba(0, 0, 0, 0.19);"> 
                                <a href="about.php" class="text-white">● About us</a> 
                            </li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);"> 
                                <a href="privacy.php" class="text-white">● Privacy Policy</a> 
                            </li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);"> 
                                <a href="terms.php" class="text-white">● Terms &amp; Conditions</a> 
                            </li>                             
                        </ul>                         
                    </div>                     
                    <div class="col-md-4 col-xl-4"> 
                        <h4 class="text-white">SERVICES&nbsp;</h4> 
                        <ul> 
                            <li style="border:rgba(0, 0, 0, 0.19);"> 
                                <a href="index.php" class="text-white">● Local Car Rentals</a> 
                            </li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);"> 
                                <a href="index.php" class="text-white">● Outstation Taxi</a> 
                            </li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);"> 
                                <a href="attachtaxi.php" class="text-white">● Attach Taxi</a> 
                            </li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);"> 
                                <a href="corporate.php" class="text-white">● Corporate Car Rental</a> 
                            </li>                             
                        </ul>                         
                    </div>                     
                    <div class="col-md-4 col-xl-4"> 
                        <h4 class="text-white">GET IN TOUCH&nbsp;</h4> 
                        <ul> 
                            <li style="border:rgba(0, 0, 0, 0.19);"> 
                                <a href="contact.php" class="text-white">● Contact Us</a> 
                            </li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);"> 
                                <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="bg-primary fa fa-facebook-square fa-inverse fa-stack-1x" style="border-radius: 25px;"></i></span> 
                                <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="bg-info fa fa-inverse fa-stack-1x fa-twitter-square" style="border-radius: 25px;"></i></span> 
                                <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="bg-danger fa fa-instagram fa-inverse fa-stack-1x" style="border-radius: 25px;"></i></span> 
                            </li>                             
                        </ul>                         
                    </div>                     
                </div>                 
            </div>             
            <!-- /.container -->             
        </section>         
        <div class="copyright-bar" style="background-color: #FDB813;"> 
            <div class="container"> 
                <p class="text-body text-center">Copyright &copy; 2021  All Right Reserved | <a href="" class="text-body">WILTEGIC</a></p> 
            </div>             
        </div>         
    </section>     
    <!-- end testimonial -->     
    <!--  footer -->     
    <footer id="contact"> 
</footer>     
    <!-- end footer -->     
    <!-- Javascript files-->     
    <script src="js/jquery.min.js"></script>     
    <script src="js/popper.min.js"></script>     
    <script src="js/bootstrap.bundle.min.js"></script>     
    <script src="js/jquery-3.0.0.min.js"></script>     
    <script src="js/plugin.js"></script>     
    <!-- sidebar -->     
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>     
    <script src="js/custom.js"></script>     
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>     
    <script src="components/pg.blocks/js/plugins.js"></script>     
    <script src="components/pg.blocks/js/bskit-scripts.js"></script>     
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>     
    <script>
        function setCarvalue(car_name, car_type, car_id, distance, total){

            $("#car").val(car_name);
            $("#car_type").val(car_type);
            $("#car_id").val(car_id);
            $("#distance").val(distance);
            $("#total_fare").val(total);

            $('form#selectcar_form').submit();
        }
        $(document).ready(function(){
            
            
        });
    </script>       
</body>
