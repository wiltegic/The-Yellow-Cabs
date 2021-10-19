<?php
include ("function.php");

if(isset($_REQUEST['submit'])){
    // echo"<pre>";print_r($_REQUEST);exit;
    $response= addBookingToCRM($_REQUEST, "/index.php?entryPoint=sendAttachTaxi");
    

}

?>
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <!-- basic -->         
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <!-- mobile metas -->         
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="viewport" content="initial-scale=1, maximum-scale=1"> 
        <!-- site metas -->         
        <title>Attach Taxi</title>         
        <meta name="keywords" content=""> 
        <meta name="description" content=""> 
        <meta name="author" content=""> 
        <!-- bootstrap css -->         
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
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
        <link rel="stylesheet" href="components/pg.blocks.wp/css/blocks.css">
        <link rel="stylesheet" href="components/pg.blocks.wp/css/plugins.css">
        <link rel="stylesheet" href="components/pg.blocks.wp/css/style-library-1.css">
    </head>     
    <!-- body -->     
    <body class="main-layout"> 
        <!-- loader  -->         
        <div class="loader_bg"> 
            <div class="loader"> 
                <img src="images/loading.gif" alt="#" style="width: 150px;"/> 
            </div>             
        </div>         
        <!-- end loader -->         
        <!-- header -->         
        <header> 
            <!-- header inner -->             
            <div class="header pt-3"> 
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
        </div>         
        <img src="images/Hire-a-Chauffeur.jpg" width="100%"/> 
        <section class="bg-light pb-5 pt-5 text-center"> 
            <div class="container pb-4 pt-4"> 
                <div class="row"> 
                    <div class="col-lg-8 ml-auto mr-auto py-3"> 
                        <h2 class="font-weight-bold text-uppercase">Attach Your Taxi</h2> 
                        <p class="mb-5 text-secondary">Enter Your Details Below</p> 
                        <form id="attachtaxi_form" name="attachtaxi_form" action="attachtaxi.php">
                            <div class="form-group"> 
                                <input type="text" class="border border-1 form-control rounded-1" placeholder="Full Name" name="name" id="name"> 
                            </div>                             
                            <div class="form-group"> 
                                <input type="tel" class="border border-1 form-control rounded-1" placeholder="Contact Number" name="mobile_number" id="mobile_number"> 
                            </div>                             
                            <div class="form-group"> 
                                <input type="text" class="border border-1 form-control rounded-1" placeholder="Company" name="company" id="company"> 
                            </div>                                                       
                            <button type="submit" class="btn btn-block btn-warning rounded-1 text-uppercase" name="submit" id="submit">Submit</button>                             
                        </form>                         
                    </div>                     
                </div>                 
            </div>             
        </section>         
    </header>     
    <!-- end header inner -->     
    <!-- end header -->     
    <!-- banner -->     
    <!-- end banner -->     
    <!-- form_lebal -->     
    <section> 
        <div class="container"> 
            <div class="row"> 
                <div class="col-md-12"> 
</div>                 
            </div>             
        </div>         
    </section>     
    <!-- end form_lebal -->     
    <!-- choose  section -->     
    <!-- end choose  section -->     
    <!-- our  section -->     
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
    <script src="assets/js/jquery.min.js"></script>     
    <script src="assets/js/popper.js"></script>     
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
    <script src="bootstrap/js/bootstrap.min.js"></script>     
    <script src="components/pg.blocks.wp/js/plugins.js"></script>
    <script src="components/pg.blocks.wp/js/bskit-scripts.js"></script>
</body> 
