<?php
include ("function.php");

if(isset($_REQUEST['confirm_booking'])){
    // echo"<pre>";print_r($_REQUEST);exit;
    global $site_url;

    $response= addBookingToCRM($_REQUEST, "/index.php?entryPoint=addBooking");
    if($response['status']=="success"){
        
        $booking_id= $response['booking_id'];
        $booking_no= $response['booking_no'];
        header('Location: '.$site_url.'/bookingdone.php?booking=1&booking_no='.$booking_no.'&booking_id='.$booking_id, true, 307);
    }
}

if(isset($_REQUEST['select_car'])){
    // echo"<pre>";print_r($_REQUEST);exit;

    $trip= $_REQUEST['trip'];
    $from_city_id= $_REQUEST['from_city_id'];
    $drop_city_id= $_REQUEST['drop_city_id'];
    $pickup_city= $_REQUEST['pickup_city'];
    $drop_city= $_REQUEST['drop_city'];
    $pickup_date= $_REQUEST['pickup_date'];
    $pickup_time= $_REQUEST['pickup_time'];
    if(isset($_REQUEST['return_date']))$return_date= $_REQUEST['return_date'];
    $mobile_number= $_REQUEST['mobile_number'];
    $booking_type= $_REQUEST['booking_type'];
    $total_fare= $_REQUEST['total_fare'];
    $car= $_REQUEST['car'];
    $car_id= $_REQUEST['car_id'];
    $car_type= $_REQUEST['car_type'];
    $distance= $_REQUEST['distance'];

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
        <title></title>         
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
                            <a href="inquirey.php" class="pl-3 pr-3" style="font-size: 120%;">Inquiry</a> 
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
    <div class="our"> 
        <section class="bg-white "> 
            <div class="container pb-4 pt-0"> 
                <div class="row">
                    <div class="col-md-6">
                        <section class="pb-0 pt-0">
                            <div class="container mb-2"> 
                                <div class="bg-white mt-2 p-4 p-lg-5 shadow"> 
                                    <h4 class="mb-4">Enter Your Details For Booking</h4> 
                                    <form class="text-center" id="confirm_booking_form" name="confirm_booking_form"> 
                                    <input type="hidden" id="from_city_id" name="from_city_id" value="<?php echo $from_city_id; ?>" />
                                    <input type="hidden" id="drop_city_id" name="drop_city_id" value="<?php echo $drop_city_id; ?>" />
                                    <input type="hidden" id="pickup_city" name="pickup_city" value="<?php echo $pickup_city; ?>" />
                                    <input type="hidden" id="drop_city" name="drop_city" value="<?php echo $drop_city; ?>" />
                                    <input type="hidden" id="trip" name="trip" value="<?php echo $trip; ?>" />
                                    <input type="hidden" id="pickup_date" name="pickup_date" value="<?php echo $pickup_date; ?>" />
                                    <input type="hidden" id="pickup_time" name="pickup_time" value="<?php echo $pickup_time; ?>" />
                                    <input type="hidden" id="mobile_number" name="mobile_number" value="<?php echo $mobile_number; ?>" />
                                    <input type="hidden" id="return_date" name="return_date" value="<?php echo $return_date; ?>" />
                                    <input type="hidden" id="total_fare" name="total_fare" value="<?php echo $total_fare; ?>" />
                                    <input type="hidden" id="car" name="car" value="<?php echo $car; ?>" />
                                    <input type="hidden" id="car_id" name="car_id" value="<?php echo $car_id; ?>" />
                                    <input type="hidden" id="car_type" name="car_type" value="<?php echo $car_type; ?>" />
                                    <input type="hidden" id="distance" name="distance" value="<?php echo $distance; ?>" />
                                    <input type="hidden" id="booking_type" name="booking_type" value="<?php echo $booking_type; ?>"  />
                                        <div class="form-group"> 
                                            <input type="text" class="form-control rounded-0" placeholder="Enter Name" id="name" name="name" required> 
                                        </div>                                                                                
                                        <div class="form-group"> 
                                            <input type="tel" class="form-control rounded-0" placeholder="Enter Mobile Number" id="mobile_number" name="mobile_number" required> 
                                        </div>
                                        <div class="form-group"> 
                                            <textarea class="border-1 form-control rounded-1" rows="6" placeholder="Enter PickUp Address" id="pickup_address" name="pickup_address" required></textarea> 
                                        </div>                                         
                                        <button type="submit" id="confirm_booking" name="confirm_booking" class="bg-warning btn btn-warning rounded-5 text-uppercase">Confirm BOOKING</button>                                         
                                    </form>                                     
                                </div>                                 
                            </div>                             
                        </section>                         
                    </div>
                    <div class="col-md-6 mt-2"> 
                        <div class="card shadow-sm">
                            <div class="card-header h4">Your Booking Details</div>
                            <ul class="list-group list-group-flush">
                                <li class="h6 list-group-item">
                                    <span>Journey : </span>
                                    <?php if($booking_type=="Local") {?>
                                        <span><?php echo $pickup_city; ?></span>
                                    <?php }else{ ?>
                                        <span><?php echo $pickup_city; ?> &gt; <?php echo $drop_city; ?> (<?php echo ucfirst($trip); ?>)</span>

                                    <?php } ?>
                                </li>
                                <li class="h6 list-group-item">
                                    <span>PickUp Date : </span>
                                    <span> <?php echo date('jS F Y', strtotime($pickup_date)); ?> at <?php echo $pickup_time; ?> </span>
                                </li>
                                <?php if($trip=="roundtrip") {?>
                                    <li class="h6 list-group-item">
                                        <span>Drop Date : </span>
                                        <span> <?php echo date('jS F Y', strtotime($return_date)); ?>  </span>
                                    </li>
                                <?php } ?>
                                <?php if($booking_type=="Local") {
                                    if($trip=="12_Hrs_120_KM") $dis= "12 Hrs 120 KM"; else $dis= "8 Hrs 80 KM";
                                    ?>
                                    <li class="h6 list-group-item">
                                        <span>Trip Type : </span>
                                        <span> <?php echo $booking_type; ?> (<?php echo $dis; ?>) </span>
                                    </li>
                                <?php } ?>
                                <li class="h6 list-group-item">
                                    <span>Car Type : </span>
                                    <span> <?php echo $car; ?> or equivalent (<?php echo $car_type; ?>) </span>
                                </li>
                                <li class="h6 list-group-item">
                                    <span>Total Fare :</span>
                                    <span> <?php echo number_format($total_fare); ?> ₹ </span>
                                </li>
                            </ul>
                        </div>
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
                                <a href="https://www.facebook.com/theyellowcabsoffcial"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="bg-primary fa fa-facebook-square fa-inverse fa-stack-1x" style="border-radius: 25px;"></i></span></a>
                                <a href="https://twitter.com/theyellowcabss"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="bg-info fa fa-inverse fa-stack-1x fa-twitter-square" style="border-radius: 25px;"></i></span></a>
                                <a href="https://www.instagram.com/the_yellow_cabs/"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="bg-danger fa fa-instagram fa-inverse fa-stack-1x" style="border-radius: 25px;"></i></span></a> 
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
        $(document).ready(function(){
            $("input[name='triptype']").click(function() {
       
                var triptype = $(this).val();
                if(triptype=="roundtrip"){
                    $("#return_date").parent("div").show();
                    $("#pickup_time").parent("div").attr("class","col-md-3");
                }else{
                    $("#return_date").parent("div").hide();
                    $("#pickup_time").parent("div").attr("class","col-md-4");
                }
            }); 
        });
    </script>     
</body>
