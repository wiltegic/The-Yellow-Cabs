<?php
include ("function.php");
global $site_url;
if($_REQUEST['booking']=="1"){
    // echo"<pre>";print_r($_REQUEST);exit;
    $booking_no= $_REQUEST['booking_no'];
    $booking_id= $_REQUEST['booking_id'];
}else{
    // header('Location: '.$site_url.'/index.php');
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
                    <div class="col-md-12">
                        <section class="pb-0 pt-0">
                            <div class="container "> 
</div>                             
                        </section>                         
                    </div>
                </div>
                <div class="align-items-center card mb-4 mt-4 pb-4 pt-4 text-center">
                    <img src="images/done.gif" width="100px;"/>
                    <div class="card-body">
                        <h5 class="card-title h4">Your Cab Booking is Done</h5>
                        <p class="card-text h5">Booking reference no :- <?php echo $booking_no; ?></p>
                        <p class="card-text h5">Our Executive Will Contact You As Soon As Possible.</p>
                        <p class="card-text"><small class="h6">Have a Safe Journey !</small></p>
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
                                <a href="about.php" class="text-white">??? About us</a> 
                            </li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);"> 
                                <a href="privacy.php" class="text-white">??? Privacy Policy</a> 
                            </li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);"> 
                                <a href="terms.php" class="text-white">??? Terms &amp; Conditions</a> 
                            </li>                             
                        </ul>                         
                    </div>                     
                    <div class="col-md-4 col-xl-4"> 
                        <h4 class="text-white">SERVICES&nbsp;</h4> 
                        <ul> 
                            <li style="border:rgba(0, 0, 0, 0.19);"> 
                                <a href="index.php" class="text-white">??? Local Car Rentals</a> 
                            </li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);"> 
                                <a href="index.php" class="text-white">??? Outstation Taxi</a> 
                            </li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);"> 
                                <a href="attachtaxi.php" class="text-white">??? Attach Taxi</a> 
                            </li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);"> 
                                <a href="corporate.php" class="text-white">??? Corporate Car Rental</a> 
                            </li>                             
                        </ul>                         
                    </div>                     
                    <div class="col-md-4 col-xl-4"> 
                        <h4 class="text-white">GET IN TOUCH&nbsp;</h4> 
                        <ul> 
                            <li style="border:rgba(0, 0, 0, 0.19);"> 
                                <a href="contact.php" class="text-white">??? Contact Us</a> 
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
