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
        <title>The Yellow Cabs | Outstation and Local Taxi Booking Service. India's Most Trusted and Affordable Cab Booking Service.</title>         
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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/> 
        <!-- <link rel="stylesheet" href="css/bootstrap-datepicker.css">  -->
        <!-- <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'> -->
        <link rel='stylesheet' href='https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css'>
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
                                            <select class="book_n" name="pickup_city" id="pickup_city" required></select>                                         
                                        </div>                                     
                                        <div class="col-md-4" style="padding-top: 15px;"> 
                                            <label class="date">TO</label>                                         
                                            <select class="book_n" name="drop_city" id="drop_city" required></select>                                         
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
                                        <!-- <input class="book_n" type="text" placeholder="Enter PickUp City" name="pickup_city_local">  -->
                                        <select class="book_n" name="pickup_city_local" id="pickup_city_local"></select>
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
                        <img src="images/3682361.jpg"/> 
                    </div>                     
                    <div class="col-lg-5 pb-3 pt-3"> 
                        <h2 class="h6 mb-1 text-body">Our Story</h2> 
                        <h3 class="fw-bold h2 mb-1"><b>Why To Choose The Yellow Cabs ?</b></h3> 
                        <p class="fw-light h5 mb-4">We are &quot;The Yellow Cabs&quot;, a leading online cab booking service, providing customers with reliable and premium Outstation and Local car rental services.</p> 
                        <p class="fw-light h5 mb-4">We offers a hassle-free, comfortable and affordable taxi cab service nearby your location to travel within city or outstation across India.</p> 
                        <p class="fw-light h5 mb-4">We are here to make your travel need an easy and comfortable experience through our online cab booking service. No matter wherever you travel accross India, we have a cab for you.&nbsp;</p> 
                    </div>                     
                </div>                 
                <section class="bg-light pb-5 pt-5"> 
                    <h2 class="h5 mb-1 text-body text-center">Here are some&nbsp;</h2> 
                    <h3 class="font-weight-bold h2 mb-1 text-center">More Reasons to Choose Us</h3> 
                    <div class="container pt-2"> 
                        <div class="justify-content-center row"> 
                            <div class="col-md-6 col-xl-4 pb-3 pt-3"> 
                                <div> 
                                    <h2 class="align-items-center d-flex fw-bold h4 mb-3 text-dark"><span class="display-4 fw-bold me-2 text-primary">1.</span><span>Experienced Drivers</span></h2> 
                                    <p class="display-5 text-body">We provide most experienced and professional drivers to assure the safest and joyful journey of yours.</p> 
                                </div>                                 
                            </div>                             
                            <div class="col-md-6 col-xl-4 pb-3 pt-3"> 
                                <div> 
                                    <h2 class="align-items-center d-flex fw-bold h4 mb-3 text-dark"><span class="display-4 fw-bold me-2 text-primary">2.</span><span>Transparent Billing</span></h2> 
                                    <p class="display-5 text-body">Are you got fustrated of extra hidden charges of other cab bookig services ? If yes then give us a try because we provide most tranparent billing with no hidden charges.</p> 
                                </div>                                 
                            </div>                             
                            <div class="col-md-6 col-xl-4 pb-3 pt-3"> 
                                <div> 
                                    <h2 class="align-items-center d-flex fw-bold h4 mb-3 text-dark"><span class="display-4 fw-bold me-2 text-primary">3.</span><span>Clean and Safest Cars</span></h2> 
                                    <p class="display-5 text-body">We provide most hygenic and clean cars to make your journey a healthy one. Also our cars are equipped with best in class safety features.</p> 
                                </div>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                </section>                 
                <div class="align-items-center  row"> 
                    <div class="col-lg-6 me-auto pb-3 pt-3 text-center"> 
                        <img src="images/10996.jpg"/> 
                    </div>                     
                    <div class="col-lg-5 pb-3 pt-3"> 
                        <h3 class="fw-bold h2 mb-1"><b>Are You Planning For Your Next Trip ?</b></h3> 
                        <p class="fw-light h5 mb-4">Our cab service will help you to explore your destination with all must visit places and authentic local cuisine of your destination.</p> 
                        <p class="fw-light h5 mb-4">Do need a corporate rental ? then no worries ! We also provide corporate car rental service for your business needs.</p> 
                        <p class="fw-light h5 mb-4">Are you planning to take a stay at your destination location ? No problem, Try our one way outstation service and pay only one-sided fare.</p> 
                    </div>                     
                </div>                 
            </div>             
        </section>         
        <section class="bg-light pb-5 pt-5 text-center"> 
            <h2 class="h6 mb-1 text-body">Take a Look at Our&nbsp;</h2> 
            <h3 class="font-weight-bold h2 mb-1">Evergrowing Base</h3> 
            <div class="container"> 
                <div class="justify-content-center row"> 
                    <div class="col-lg-3 col-sm-6 pb-3 pt-3"> 
                        <div class="bg-white pb-5 pe-3 ps-3 pt-5 text-dark"> 
                            <img src="images/location.png"/> 
                            <h2 class="fw-bold h2 mb-0 pt-2">90+</h2> 
                            <p class="h4 mb-0 mt-0">Cities</p> 
                        </div>                         
                    </div>                     
                    <div class="col-lg-3 col-sm-6 pb-3 pt-3"> 
                        <div class="bg-white pb-5 pe-3 ps-3 pt-5 text-dark"> 
                            <img src="images/taxi-driver.png"/> 
                            <h2 class="fw-bold h2 mb-0 pt-2">5k+</h2> 
                            <p class="h4 mb-0 mt-0">Driver Partners</p> 
                        </div>                         
                    </div>                     
                    <div class="col-lg-3 col-sm-6 pb-3 pt-3"> 
                        <div class="bg-white pb-5 pe-3 ps-3 pt-5 text-dark"> 
                            <img src="images/customer-feedback.png"/> 
                            <h2 class="fw-bold h2 mb-0 pt-2">90k+</h2> 
                            <p class="h4 mb-0 mt-0">Happy Customers</p> 
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
        </section>         
        <section class="bg-light pb-5 pt-5 text-body text-center"> 
            <h2 class="h6 mb-1 text-body">See What Our&nbsp;</h2> 
            <h3 class="font-weight-bold h2 mb-1">Customers Speaks</h3> 
            <div class="container pb-3 position-relative pt-3"> 
                <div class="row"> 
                    <div class="col-lg-8 ml-auto mr-auto"> 
                        <div id="carousel4" class="carousel slide" data-ride="carousel"> 
                            <div class="carousel-inner"> 
                                <div class="carousel-item active"> 
                                    <svg viewBox="0 0 24 24" fill="currentColor" height="50" width="50" class="mb-3 text-warning"> 
                                        <path d="M23 1V5.06504C21.9136 5.67931 21.0807 6.43812 20.5012 7.34146C19.958 8.24481 19.5416 9.20235 19.2519 10.2141C18.9621 11.2258 18.8173 12.346 18.8173 13.5745H23V22.4634H14.0914V16.935C14.0914 13.6107 14.3992 11.0813 15.0148 9.34688C15.6667 7.61246 16.6444 6.02258 17.9481 4.57723C19.2519 3.09575 20.9358 1.90334 23 1ZM9.90864 1V5.06504C8.82222 5.67931 7.9893 6.43812 7.40988 7.34146C6.83045 8.24481 6.39588 9.20235 6.10617 10.2141C5.81646 11.2258 5.67161 12.346 5.67161 13.5745H9.90864V22.4634H1V16.935C1 13.6107 1.30782 11.0813 1.92346 9.34688C2.57531 7.61246 3.55309 6.02258 4.85679 4.57723C6.16049 3.09575 7.84444 1.90334 9.90864 1Z"></path>                                         
                                    </svg>                                     
                                    <p class="font-weight-light h5 mb-4">I often use The Yellow Cab's services for my corporate travel needs. Their service and affordability is top notch with highst ride comfort and security.</p> 
                                    <h3 class="font-weight-bold h4 mb-1 text-warning">Wilson Savaliya</h3> 
                                    <h4 class="font-weight-normal h6 mb-3">Junagadh</h4> 
                                </div>                                 
                                <div class="carousel-item"> 
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="mb-3 text-warning" width="50" height="50"> 
                                        <path d="M23 1V5.06504C21.9136 5.67931 21.0807 6.43812 20.5012 7.34146C19.958 8.24481 19.5416 9.20235 19.2519 10.2141C18.9621 11.2258 18.8173 12.346 18.8173 13.5745H23V22.4634H14.0914V16.935C14.0914 13.6107 14.3992 11.0813 15.0148 9.34688C15.6667 7.61246 16.6444 6.02258 17.9481 4.57723C19.2519 3.09575 20.9358 1.90334 23 1ZM9.90864 1V5.06504C8.82222 5.67931 7.9893 6.43812 7.40988 7.34146C6.83045 8.24481 6.39588 9.20235 6.10617 10.2141C5.81646 11.2258 5.67161 12.346 5.67161 13.5745H9.90864V22.4634H1V16.935C1 13.6107 1.30782 11.0813 1.92346 9.34688C2.57531 7.61246 3.55309 6.02258 4.85679 4.57723C6.16049 3.09575 7.84444 1.90334 9.90864 1Z"></path>                                         
                                    </svg>                                     
                                    <p class="font-weight-light h5 mb-4">My profession required frequent solo trips to diffrent cities, And it is important for a girl to find a women friendly cab thats why I always prefer The Yellow Cabs because they have decent drivers so I always feel safe while traveling alone.</p> 
                                    <h3 class="font-weight-bold h4 mb-1 text-warning">Nikita shah</h3> 
                                    <h4 class="font-weight-normal h6 mb-3">Ahmedabad</h4> 
                                </div>                                 
                                <div class="carousel-item"> 
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="mb-3 text-warning" width="50" height="50"> 
                                        <path d="M23 1V5.06504C21.9136 5.67931 21.0807 6.43812 20.5012 7.34146C19.958 8.24481 19.5416 9.20235 19.2519 10.2141C18.9621 11.2258 18.8173 12.346 18.8173 13.5745H23V22.4634H14.0914V16.935C14.0914 13.6107 14.3992 11.0813 15.0148 9.34688C15.6667 7.61246 16.6444 6.02258 17.9481 4.57723C19.2519 3.09575 20.9358 1.90334 23 1ZM9.90864 1V5.06504C8.82222 5.67931 7.9893 6.43812 7.40988 7.34146C6.83045 8.24481 6.39588 9.20235 6.10617 10.2141C5.81646 11.2258 5.67161 12.346 5.67161 13.5745H9.90864V22.4634H1V16.935C1 13.6107 1.30782 11.0813 1.92346 9.34688C2.57531 7.61246 3.55309 6.02258 4.85679 4.57723C6.16049 3.09575 7.84444 1.90334 9.90864 1Z"></path>                                         
                                    </svg>                                     
                                    <p class="font-weight-light h5 mb-4">Me and my friends are very travel enthusiast people, We often travel to many places across India and we always prefer The Yellow Cabs because of their affordable rates and total facilities. I strongly recommend The Yellow Cabs.</p> 
                                    <h3 class="font-weight-bold h4 mb-1 text-warning">Aakash khatri</h3> 
                                    <h4 class="font-weight-normal h6 mb-3">Mumbai</h4> 
                                </div>                                 
                            </div>                             
                            <ol class="carousel-indicators position-relative"> 
                                <li data-target="#carousel4" data-slide-to="0" class="active bg-warning"></li>                                 
                                <li data-target="#carousel4" data-slide-to="1" class="bg-warning"></li>                                 
                                <li data-target="#carousel4" data-slide-to="2" class="bg-warning"></li>                                 
                            </ol>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
        </section>         
        <section class="bg-white pb-5 pt-5 text-body text-center"> 
            <h2 class="h6 mb-1 text-body">Explore&nbsp;</h2> 
            <h3 class="font-weight-bold h2 ">Popular Cities</h3> 
            <div class="container pb-3 position-relative pt-3 text-body"> 
                <div class="row"> 
                    <div class="col-6 col-md-2"> 
                        <a href="ahmedabad.php"><h4 class="text-body">AHMEDABAD</h4></a> 
                    </div>                     
                    <div class="col-6 col-md-2"> 
                        <a href="surat.php"><h4 class="text-body">SURAT</h4></a> 
                    </div>                     
                    <div class="col-6 col-md-2"> 
                        <a href="vadodara.php"><h4 class="text-body">VADODARA</h4></a> 
                    </div>                     
                    <div class="col-6 col-md-2"> 
                        <a href="rajkot.php"><h4 class="text-body">RAJKOT</h4></a> 
                    </div>                     
                    <div class="col-6 col-md-2"> 
                        <a href="gadhidham.php"><h4 class="text-body">GANDHIDHAM</h4></a> 
                    </div>                     
                    <div class="col-6 col-md-2"> 
                        <a href="mumbai.php"><h4 class="text-body">MUMBAI</h4></a> 
                    </div>                     
                </div>                 
                <div class="row"> 
                    <div class="col-6 col-md-2"> 
                        <a href="pune.php"><h4 class="text-body">PUNE</h4></a> 
                    </div>                     
                    <div class="col-6 col-md-2"> 
                        <a href="nasik.php"><h4 class="text-body">NASIK</h4></a> 
                    </div>                     
                    <div class="col-6 col-md-2"> 
                        <a href="udaipur.php"><h4 class="text-body">UDAIPUR</h4></a> 
                    </div>                     
                    <div class="col-6 col-md-2"> 
                        <a href="jaipur.php"><h4 class="text-body">JAIPUR</h4></a> 
                    </div>                     
                    <div class="col-6 col-md-2"> 
                        <a href="bhopal.php"><h4 class="text-body">BHOPAL</h4></a> 
                    </div>                     
                    <div class="col-6 col-md-2"> 
                        <a href="indore.php"><h4 class="text-body">INDORE</h4></a> 
                    </div>                     
                </div>                 
            </div>             
        </section>         
        <section class="bg-warning content-block-nopad footer-wrap-1-1"> 
            <div class="container footer-1-1 pb-2 pt-3"> 
                <h2 class="h6 mb-1 text-body text-center">Explore&nbsp;</h2> 
                <h3 class="font-weight-bold h2  text-body text-center">Popular Routes</h3> 
                <!-- /.row -->                 
            </div>             
            <!-- /.container -->             
        </section>         
        <section class="content-block-nopad footer-wrap-1-1"> 
            <div class="container footer-1-1 mt-0 pt-4"> 
                <!-- /.row -->                 
                <div class="row"> 
                    <div class="col-md-4 col-xl-4"> 
                        <h4 class="text-body text-left">AHMEDABAD</h4> 
                        <ul> 
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● AHMEDABAD TO VADODARA</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● AHMEDABAD TO SURAT</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● AHMEDABAD TO UDAIPUR</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● AHMEDABAD TO MUMBAI</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● AHMEDABAD TO INDORE</li>                             
                        </ul>                         
                    </div>                     
                    <div class="col-md-4 col-xl-4"> 
                        <h4 class="text-body text-left">SURAT</h4> 
                        <ul> 
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● SURAT TO MUMBAI</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● SURAT TO AHMEDABAD</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● SURAT TO PUNE</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● SURAT TO VADODARA</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● SURAT TO INDORE</li>                             
                        </ul>                         
                    </div>                     
                    <div class="col-md-4 col-xl-4"> 
                        <h4 class="text-body text-left">VADODARA</h4> 
                        <ul> 
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● VADODARA TO AHMEDABAD</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● VADODARA TO SURAT</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● VADODARA TO MUMBAI</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● VADODARA TO UDAIPUR</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● VADODARA TO INDORE</li>                             
                        </ul>                         
                    </div>                     
                    <div class="col-md-4 col-xl-4"> 
                        <h4 class="text-body text-left">RAJKOT</h4> 
                        <ul> 
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● RAJKOT TO AHMEDABAD</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● RAJKOT TO GANDHIDHAM</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● RAJKOT TO SURAT</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● RAJKOT TO BHAVNAGAR</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● RAJKOT TO MUMBAI</li>                             
                        </ul>                         
                    </div>                     
                    <div class="col-md-4 col-xl-4"> 
                        <h4 class="text-body text-left">MUMBAI</h4> 
                        <ul> 
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● MUMBAI TO PUNE</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● MUMBAI TO LONAVALA</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● MUMBAI TO NASHIK</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● MUMBAI TO SURAT</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● MUMBAI TO AHMEDABAD</li>                             
                        </ul>                         
                    </div>                     
                    <div class="col-md-4 col-xl-4"> 
                        <h4 class="text-body text-left">PUNE</h4> 
                        <ul> 
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● PUNE TO MUMBAI</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● PUNE TO MAHABALESWAR</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● PUNE TO NASHIK</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● PUNE TO SURAT</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● PUNE TO AHMEDABAD</li>                             
                        </ul>                         
                    </div>                     
                    <div class="col-md-4 col-xl-4"> 
                        <h4 class="text-body text-left">UDAIPUR</h4> 
                        <ul> 
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● UDAIPUR TO JODHPUR</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● UDAIPUR TO JAIPUR</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● UDAIPUR TO AHMEDABAD</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● UDAIPUR TO VADODARA</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● UDAIPUR TO BHILWARA</li>                             
                        </ul>                         
                    </div>                     
                    <div class="col-md-4 col-xl-4"> 
                        <h4 class="text-body text-left">JAIPUR</h4> 
                        <ul> 
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● JAIPUR TO UDAIPUR</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● JAIPUR TO JODHPUR</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● JAIPUR TO AHMEDABAD</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● JAIPUR TO DELHI</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● JAIPUR TO BHILWARA</li>                             
                        </ul>                         
                    </div>                     
                    <div class="col-md-4 col-xl-4"> 
                        <h4 class="text-body text-left">INDORE</h4> 
                        <ul> 
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● INDORE TO BHOPAL</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● INDORE TO MUMBAI</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● INDORE TO AHMEDABAD</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● INDORE TO VADODARA</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● INDORE TO NAGPUR</li>                             
                        </ul>                         
                    </div>                     
                    <div class="col-md-4 col-xl-4"> 
                        <h4 class="text-body text-left">BHOPAL</h4> 
                        <ul> 
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● BHOPAL TO MUMBAI</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● BHOPAL TO INDORE</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● BHOPAL TO AHMEDABAD</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● BHOPAL TO UJJAIN</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● BHOPAL TO VADODARA</li>                             
                        </ul>                         
                    </div>                     
                    <div class="col-md-4 col-xl-4"> 
                        <h4 class="text-body text-left">GANDHIDHAM</h4> 
                        <ul> 
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● GANDHIDHAM TO BHUJ</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● GANDHIDHAM TO MUNDRA</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● GANDHIDHAM TO RAJKOT</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● GANDHIDHAM TO AHMEDABAD</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● GANDHIDHAM TO MUMBAI</li>                             
                        </ul>                         
                    </div>                     
                    <div class="col-md-4 col-xl-4"> 
                        <h4 class="text-body text-left">NASHIK</h4> 
                        <ul> 
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● NASHIK TO MUMBAI</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● NASHIK TO PUNE</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● NASHIK TO VAPI</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● NASHIK TO SURAT</li>                             
                            <li style="border:rgba(0, 0, 0, 0.19);" class="h6 text-body">● NASHIK TO INDORE</li>                             
                        </ul>                         
                    </div>                     
                </div>                 
            </div>             
            <!-- /.container -->             
        </section>         
        <div class="container"> 
            <div class="row d_flex"> 
</div>             
        </div>         
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
        });
    </script>     
</body>
