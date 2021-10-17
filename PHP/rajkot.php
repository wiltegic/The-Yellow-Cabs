<?php
include ("function.php");

$cityArray= get_city_dropdown();


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
        <title>Rajkot Cab Booking</title>         
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
        <link rel="stylesheet" href="css/select2.min.css"/> 
        <!-- <link rel="stylesheet" href="css/bootstrap-datepicker.css">  -->
        <!-- <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'> -->
        <link rel='stylesheet' href="css/bootstrap-datetimepicker.css">
        <style type="text/css">.nav-tabs .nav-link.active { color: #fff; background-color: #ffc107; }</style>         
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
                            <a href="inquirey.php" class="pl-3 pr-3" style="font-size: 120%;">Inquirey</a> 
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
        </div>         
    </header>     
    <!-- end header inner -->     
    <!-- end header -->     
    <!-- banner -->     
    <section class="banner_main"> 
        <div class="container"> 
            <div class="col-lg-12 col-sm-12" style="opacity:0.96; border-radius:15px;"> 
                <div class="pb-0 pt-2 text-body underlined-title"> 
                    <h1 style="font-weight: bolder; color: white; text-shadow: 2px 2px 2px #000000; font-size: xx-large;">WELCOME TO THE YELLOW CABS</h1> 
                </div>                 
            </div>             
        </div>         
    </section>     
    <!-- end banner -->     
    <!-- form_lebal -->     
    <section> 
        <div class="container"> 
            <div class="row"> 
                <div class="col-md-12"> 
                    <!-- 
                    <form class="form_book " style="box-shadow: 0 4px 8px 10px rgba(0, 0, 0, 0.2), 0 6px 20px 5px rgba(0, 0, 0, 0.19);"> 
                        <h3 class=" mb-0 text-center"><b style="font-family: 'Poppins', sans-serif; white-space: nowrap;" class="h3">BOOK YOUR TAXI NOW</b></h3> 
                        <ul class="nav nav-tabs" role="tablist"> 
                            <li class="nav-item"> 
                                <a class="active nav-link show" href="#tab1" data-toggle="tab" role="tab" aria-controls="tab1" aria-expanded="true" aria-selected="true">OUTSTATION</a> 
                            </li>                             
                            <li class="nav-item"> 
                                <a class="nav-link" href="#tab2" data-toggle="tab" role="tab" aria-controls="tab2" aria-expanded="true" aria-selected="false">LOCAL</a> 
                            </li>                             
                            <li class="nav-item"> 
</li>                             
                            <li class="nav-item"> 
</li>                             
                        </ul>                         
                        <div class="tab-content"> 
                            <div class="active pb-auto pt-1 show tab-pane" role="tabpanel" aria-labelledby="tab1-tab" id="tab1"> 
                                <div class="col-md-11" style="padding-top: 15px;"> 
                                    <label class="date" style="text-align: center;"> 
                                        <input type="radio" name="triptype" value="oneway" checked="checked"> Oneway
                                    </label>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        &nbsp;&nbsp;  
                                    <label class="date"> 
                                        <input type="radio" name="triptype" value="roundtrip"> RoundTrip
                                    </label>                                     
                                </div>                                 
                                <div class=" row"> 
                                    <div class="col-md-4" style="padding-top: 15px;"> 
                                        <label class="date">FROM</label>                                         
                                        
                                        <select class="book_n" name="pickup_city" id="pickup_city"></select>
                                    </div>                                     
                                    <div class="col-md-4" style="padding-top: 15px;"> 
                                        <label class="date">TO</label>                                         
                                        
                                        <select class="book_n" name="drop_city" id="drop_city"></select>
                                    </div>                                     
                                    <div class="col-md-3" style="padding-top: 15px;"> 
                                        <label class="date">PICK UP DATE</label>                                         
                                        <input class="book_n" type="text" placeholder="Set PickUp Date" name="pickup_date" id="pickup_date"> 
                                    </div>                                     
                                </div>                                 
                                <div class="row"> 
                                    <div class="col-md-4" style="padding-top: 15px; display: none;"> 
                                        <label class="date">RETURN Date</label>                                         
                                        <input class="book_n" type="date" id="return_date" name="return_date" placeholder="Set Return Date"> 
                                    </div>                                     
                                    <div class="col-md-4" style="padding-top: 15px;"> 
                                        <label class="date">PICK UP TIME</label>                                         
                                        <input class="book_n" type="time" id="pickup_time" name="pickup_time" placeholder="Set PickUp Time"> 
                                    </div>
                                    <div class="col-md-4" style="padding-top: 15px;"> 
                                        <label class="date">MOBILE NUMBER</label>                                         
                                        <input class="book_n" placeholder="Enter Your Number" type="tel" id="mobile_number" name="mobile_number"> 
                                    </div>                                     
                                    <div class="col-md-4 " style="padding-top: 15px;"> 
                                        <button class="book_btn">SELECT CAR</button>                                         
                                    </div>                                     
                                </div>                                 
                            </div>                             
                            <div class="pt-1 tab-pane" role="tabpanel" aria-labelledby="tab2-tab" id="tab2"> 
                                <div class="row"> 
                                    <div style="padding-top: 15px;" class="col-md-8"> 
                                        <label class="date">city</label>                                         
                                        <input class="book_n" type="text" placeholder="Enter PickUp City" name="pickup_city"> 
                                    </div>
                                    <div class="col-md-3" style="padding-top: 15px;"> 
                                        <label class="date">PICK UP DATE</label>                                         
                                        <input class="book_n" type="date" name="pickup_date"> 
                                    </div>                                     
                                </div>                                 
                                <div class="row"> 
                                    <div class="col-md-4" style="padding-top: 15px;"> 
                                        <label class="date">PICK UP TIME</label>                                         
                                        <input class="book_n" type="time" name="pickup_time"> 
                                    </div>
                                    <div class="col-md-4" style="padding-top: 15px;"> 
                                        <label class="date">MOBILE NUMBER</label>                                         
                                        <input class="book_n" placeholder="Enter Your Number" type="tel" name="mobile_number"> 
                                    </div>                                     
                                    <div class="col-md-4" style="padding-top: 15px;"> 
                                        <button class="book_btn">SELECT CAR</button>                                         
                                    </div>                                     
                                </div>                                 
                            </div>                             
                        </div>                         
                        <div class="row"> 
</div>                         
                    </form> -->                     
                    <form class="form_book " action="selectcar.php" method="post" style="box-shadow: 0 4px 8px 10px rgba(0, 0, 0, 0.2), 0 6px 20px 5px rgba(0, 0, 0, 0.19);"> 
                        <h3 class=" mb-0 text-center"><b style="font-family: 'Poppins', sans-serif; white-space: nowrap;" class="h3">BOOK YOUR TAXI NOW</b></h3> 
                        <ul class="nav nav-tabs" role="tablist"> 
                            <li class="nav-item"> 
                                <a id="os_tab" name="os_tab" class="active nav-link show" href="#tab1" data-toggle="tab" role="tab" aria-controls="tab1" aria-expanded="true" aria-selected="true">OUTSTATION</a> 
                            </li>                             
                            <li class="nav-item"> 
                                <a id="local_tab" name="local_tab" class="nav-link" href="#tab2" data-toggle="tab" role="tab" aria-controls="tab2" aria-expanded="true" aria-selected="false">LOCAL</a> 
                            </li>                             
                            <li class="nav-item"> 
</li>                             
                            <li class="nav-item"> 
</li>                             
                        </ul>                         
                        <div class="tab-content"> 
                            <div class="active pb-auto pt-1 show tab-pane" role="tabpanel" aria-labelledby="tab1-tab" id="tab1"> 

                                    <div class="col-md-11" style="padding-top: 15px;"> 
                                        <label class="date" style="text-align: center;"> 
                                            <input type="radio" name="triptype" value="oneway" checked="checked"> Oneway
                                        </label>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        &nbsp;&nbsp;  
                                        <label class="date"> 
                                            <input type="radio" name="triptype" value="roundtrip"> RoundTrip
                                        </label>                                     
                                    </div>                                 
                                    <div class=" row"> 
                                        <div class="col-md-4" style="padding-top: 15px;"> 
                                            <label class="date">FROM</label>                                    
                                            <select class="book_n" name="pickup_city" id="pickup_city" style="width: 100%;" required></select>                                                
                                        </div>                                     
                                        <div class="col-md-4" style="padding-top: 15px;"> 
                                            <label class="date">TO</label>                                         
                                            <select class="book_n" name="drop_city" id="drop_city" style="width: 100%;" required></select>                                         
                                        </div>                                     
                                        <div class="col-md-3" style="padding-top: 15px;"> 
                                            <label class="date">PICK UP DATE</label>                                         
                                            <input type="text" class="form-control" placeholder="Set PickUp Date" name="pickup_date" id="pickup_date" style="background-color:#EEEEEE; border-radius: 25px; height: 42px; font-size: medium;" required> 
                                        </div>                                     
                                    </div>                                 
                                    <div class="row"> 
                                        <div class="col-md-4" style="padding-top: 15px; display: none;"> 
                                            <label class="date">RETURN Date</label>                                         
                                            <input class="form-control" type="text" id="return_date" name="return_date" placeholder="Set Return Date" style="background-color:#EEEEEE; border-radius: 25px; height: 42px; font-size: medium;"> 
                                        </div>                                     
                                        <div class="col-md-4" style="padding-top: 15px;"> 
                                            <label class="date">PICK UP TIME</label>                                         
                                            <!-- <input class="form-control" type="text" id="pickup_time" name="pickup_time" placeholder="Set PickUp Time" style="background-color:#EEEEEE; border-radius: 25px; height: 42px; font-size: medium;" required>  -->
                                            <select class="form-control" id="pickup_time" name="pickup_time" placeholder="Set PickUp Time" style="background-color:#EEEEEE; border-radius: 25px; height: 42px; font-size: medium;" required>
                                                
                                            </select>
                                        </div>                                     
                                        <div class="col-md-4" style="padding-top: 15px;"> 
                                            <label class="date">MOBILE NUMBER</label>                                         
                                            <input class="form-control" placeholder="Enter Your Number" type="tel" id="mobile_number" name="mobile_number" style="background-color:#EEEEEE; border-radius: 25px; height: 42px; font-size: medium;" required> 
                                        </div>                                     
                                        <div class="col-md-4 " style="padding-top: 15px;"> 
                                            <input id="booking_type" name="booking_type" type="hidden" value="Outstation"/>
                                            <button class="book_btn" type="submit" id="select_car" name="select_car">SELECT CAR</button>                                         
                                        </div>                                     
                                    </div>                                 
                                
                            </div>    
                                                  
                            <div class="pt-1 tab-pane" role="tabpanel" aria-labelledby="tab2-tab" id="tab2"> 
                                <div class="row"> 
                                    <div style="padding-top: 15px;" class="col-md-8"> 
                                        <label class="date">city</label>  
                                        <br/>                                       
                                        <!-- <input class="book_n" type="text" placeholder="Enter PickUp City" name="pickup_city_local">  -->
                                        <select class="book_n" name="pickup_city_local" id="pickup_city_local" style="width: 100%;"></select>
                                    </div>                                     
                                    <div class="col-md-3" style="padding-top: 15px;"> 
                                        <label class="date">PICK UP DATE</label>                                         
                                        <input type="text" class="form-control" placeholder="Set PickUp Date" name="pickup_date_local" id="pickup_date_local" style="background-color:#EEEEEE; border-radius: 25px; height: 42px; font-size: medium;"> 
                                    </div>                                     
                                </div>                                 
                                <div class="row"> 
                                    <div class="col-md-4" style="padding-top: 15px;"> 
                                        <label class="date">PICK UP TIME</label>                                         
                                        <!-- <input class="form-control" type="text" id="pickup_time_local" name="pickup_time__local" placeholder="Set PickUp Time" style="background-color:#EEEEEE; border-radius: 25px; height: 42px; font-size: medium;">  -->
                                        <select class="form-control" id="pickup_time_local" name="pickup_time_local" placeholder="Set PickUp Time" style="background-color:#EEEEEE; border-radius: 25px; height: 42px; font-size: medium;">
                                                
                                        </select>
                                    </div>                                     
                                    <div class="col-md-4" style="padding-top: 15px;"> 
                                        <label class="date">MOBILE NUMBER</label>                                         
                                        <input class="form-control" placeholder="Enter Your Number" type="tel" id="mobile_number_local" name="mobile_number_local" style="background-color:#EEEEEE; border-radius: 25px; height: 42px; font-size: medium;"> 
                                    </div>                                     
                                    <div class="col-md-4" style="padding-top: 15px;"> 
                                        <button class="book_btn" type="submit" id="select_car" name="select_car">SELECT CAR</button>                                         
                                    </div>                                     
                                </div>                                 
                            </div>    
                                                    
                        </div>                         
                        <div class="row"> 
</div>                         
                    </form>                     
                </div>                 
            </div>             
        </div>         
    </section>     
    <!-- end form_lebal -->     
    <!-- choose  section -->     
    <!-- end choose  section -->     
    <!-- our  section -->     
    <div class="our"> 
        <section class="bg-white "> 
            <div class="container pb-4 pt-0"> 
                <div class="align-items-center  row"> 
                    <div class="col-lg-6 me-auto pb-3 pt-3 text-center"> 
                        <img src="images/rajkot.jpg"/> 
                    </div>                     
                    <div class="col-lg-6 pb-3 pt-3"> 
                        <h2 class="h6 mb-1 text-body">Explore</h2> 
                        <h3 class="fw-bold h2 mb-1"><b>Rajkot City&nbsp;</b></h3> 
                        <p class="fw-light h5 mb-4">The former princely capital of Saurashtra region and now an emerging tourism destination and business hub, Rajkot is the fourth largest city in Gujarat, located on the banks of Aji and Nyari Rivers.</p> 
                        <p class="fw-light h5 mb-4">Founded in the year 1612 as the headquarters of Western India States Agency, Rajkot was earlier the administrative center for some 400 princely states in Saurashtra, Kutch, and northern Gujarat. The city also attracts tourists because of its proximity to the life of Mahatma Gandhi and best sightseeing tours which are worth a visit for every history buffs.</p>
                        <p class="fw-light h5 mb-4">From gardens to parks to museums, here one can find anything and everything for people of diverse age group. The Kerba Gandhi no Delo, the place where the Mahatma Gandhi lived few years of his life, is a prominent tourist attraction of Rajkot.</p> 
                    </div>                     
                </div>                 
                <section class="bg-light pb-2 pt-2 text-center text-lg-left"> 
                    <div class="container pb-4 pt-4"> 
                        <div class="align-items-center row"> 
                            <div class="col-lg-12 "> 
                                <div class="pb-3 pt-3"> 
                                    <h3 class="font-weight-bold h4 text-left">Things to Do in Rajkot :</h3> 
                                    <p class="h5 mb-0 text-body text-left">⦿ Witness the art from the past at the Watson Museum and Library</p> 
                                    <p class="h5 mb-0 text-body text-left">⦿ Visit Doll museum with your kids and see over 1500 types of dolls from different regions.</p> 
                                    <p class="h5 mb-0 text-body text-left">⦿ Enjoy scrumptious Gujarati food at any local restaurant.</p> 
                                    <p class="h5 mb-0 text-body text-left">⦿ Visit the Alfred High School (also known as Mohandas Gandhi High School), the oldest institution in Rajkot known as the school of Mohandas Karamchand Gandhi.<br></p> 
                                </div>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                </section>                 
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
                                <a href="javascript:void(1)" id="local_car_rentals" name="local_car_rentals" class="text-white">● Local Car Rentals</a> 
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
    <!-- <script src="js/jquery.min.js"></script>      -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>

    <script src="js/popper.min.js"></script>     
    <script src="js/bootstrap.bundle.min.js"></script>     
    <!-- <script src="js/jquery-3.0.0.min.js"></script>      -->
    <script src="js/plugin.js"></script>     
    <!-- sidebar -->     
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>     
    <script src="js/custom.js"></script> 
    <script src="js/script.js"></script>     
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>     
    <script src="components/pg.blocks/js/plugins.js"></script>     
    <script src="components/pg.blocks/js/bskit-scripts.js"></script>     
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>     
    <!-- <script src="js/bootstrap-datepicker.js"></script>      -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js'></script>
    <script src='https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js'></script>
    
    <script>
        // $('#pickup_date').datepicker({
        //     format: "dd/mm/yyyy",
        //     minDate: 0,
        //     todayHighlight: true,
        //     autoclose: true,
        // });
        $(document).ready(function(){
            var city = <?php echo json_encode($cityArray); ?>;

            var option= '<option value="">Enter PickUp City</option>';
            for(var i=0;i<city.length;i++){
                option +='<option value="'+city[i].id+'">'+city[i].city+', '+city[i].state+'</option>';
            }
            

            $("#pickup_city").append(option);
            $("#pickup_city_local").append(option);
            $("#pickup_city").change(function(){
                $("#drop_city option").remove();
                var from_city= $(this).val();
                if(from_city!=""){
                    var to_option= '<option value="">Enter Drop City</option>';
                    for(var i=0;i<city.length;i++){
                        if(city[i].id!=from_city){
                            to_option +='<option value="'+city[i].id+'">'+city[i].city+', '+city[i].state+'</option>';
                        }
                        
                    }
                    $("#drop_city").append(to_option);
                    // $("#drop_city option[value="+from_city+"]").prop("disabled", true);
                    
                }

                
                
            });
            $("#drop_city").select2();
            $("#pickup_city").select2();
            $("#pickup_city_local").select2();
            
            $("input[name='triptype']").click(function() {
       
                var triptype = $(this).val();
                if(triptype=="roundtrip"){
                    $("#return_date").parent("div").show();
                    $("#mobile_number").parent("div").attr("class","col-md-3");
                    $("#return_date").prop('required',true);
                }else{
                    $("#return_date").parent("div").hide();
                    $("#mobile_number").parent("div").attr("class","col-md-4");
                    $("#return_date").prop('required',false);
                }
            }); 
            $("#os_tab,#local_tab").click(function() {
                
                var tab = $(this).attr('id');
                if(tab=="local_tab"){
                    $("#pickup_city_local").prop('required',true);
                    $("#pickup_date_local").prop('required',true);
                    $("#pickup_time_local").prop('required',true);
                    $("#mobile_number_local").prop('required',true);

                    $("#pickup_city").prop('required',false);
                    $("#drop_city").prop('required',false);
                    $("#pickup_date").prop('required',false);
                    $("#pickup_time").prop('required',false);
                    $("#return_date").prop('required',false);
                    $("#mobile_number").prop('required',false);

                    $('form').attr('action', 'selectcar-local.php');
                    $("#booking_type").val("Local");
                }else{
                    
                    $("#pickup_city").prop('required',true);
                    $("#drop_city").prop('required',true);
                    $("#pickup_date").prop('required',true);
                    $("#pickup_time").prop('required',true);
                    $("#mobile_number").prop('required',true);
                    var triptype = $(this).val();
                    if(triptype=="roundtrip"){

                        $("#return_date").prop('required',true);
                    }

                    $("#pickup_city_local").prop('required',false);
                    $("#pickup_date_local").prop('required',false);
                    $("#pickup_time_local").prop('required',false);
                    $("#mobile_number_local").prop('required',false);

                    $('form').attr('action', 'selectcar.php');
                    $("#booking_type").val("Outstation");
                }
            }); 

            $("#local_car_rentals").click(function(){
                $("#local_tab").trigger("click");
                $('html, body').animate({
                     scrollTop: $("#local_tab").offset()
                 },20);
            });

        });
    </script>     
</body>
