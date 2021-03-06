<?php
include "include/connection.php";
include "include/html_head.php";
if (isset($_SESSION['login'])) {
    header("Location: addpatient.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Kalpataru</title>

    <!-- Basic SEO -->
    <meta name="description" content="Bahekar Speciality Hospital, Gondia, Hospital">
    <meta name="keywords" content="Medicine,Hospital,Bahekar,Gondia">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon.png">

    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">



    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css ">

    <!--Line Icons-->
    <link rel="stylesheet" href="css/line-icons/line-icons.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    <link rel="stylesheet" href="css/bootstrap/bootstrap-eq-height.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">

    <!-- Responsive Tabs CSS -->
    <link rel="stylesheet" href="css/responsive-tabs/responsive-tabs.min.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup/magnific-popup.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="./css/animate/animate.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" media="screen and (max-width:768px)">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40">

<div class="mobile-nav">
               <nav class="mob-nav  navbar-fixed-top">
                            <ul id="mob-navbar" class="rev-nav">
                                <li><a href="#login-f" class="white">Home</a></li>
                                <li><a href="#about" class="white">About Us</a></li>
                                <li><a href="#contact" class="white">Reach Us</a></li>
                            </ul>
                        </nav>
</div>
    
       <div class="nav-wrapper scrolled-navbar collapse navbar-collapse navbar-fixed-top">
           <div class="container-fluid rel">
               <div class="row m-0">
                   <div class="col-md-6" style="margin: 0;padding:0;">
                   <img src="./img/myimages/logo.png" alt="Logo" class="logo">
                   </div>
                   <div class="col-md-6" >
                   <nav class="nav">
                            <ul id="navbar" class="rev-nav">
                                <li><a href="#home" class="white">Home</a></li>
                                <li><a href="#about" class="white">About Us</a></li>
                                <li><a href="#contact" class="white">Reach Us</a></li>
                            </ul>
                        </nav>
                   </div>
               </div>

               
           </div>
       
                        
                        </div>
                   

    <section id="home">
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-md-6 home-pic">
                    <img src="./img/myimages/bahekar.png" alt="" class="bg">
                    <!-- <img src="./img/myimages/bahekar-logo.png" alt="" class="logo"> -->
                    <img src="./img/myimages/bahekar-logo.png" alt="" class="logo-1">
                </div>
                <div class="col-md-6 form-login">
                    <!-- <div class="container-fluid" style="margin: 0 auto;">
                    
                    </div> -->
                    
                     
                   <div class="form" id="login-f">
                    <h1 class="text-center highlight-heading">LOGIN</h1>
                    <hr>

                    <form action="./verifyuser.php" method="POST" class="login-form">
                    
                    <div class="unameDiv" id="uname">
                        <input type="text" class="uname" name="uname" placeholder="Please enter your login id">
                        <span class="fa fa-user fa-2x blue"></span>
                    </div>
                    
                    <div class="passwordDiv" id="password">
                        <input type="password" class="password" name="password" placeholder="please enter your password">
                        <span class="fa fa-lock fa-2x blue"></span>
                    </div>

                   <div class="row">
                       <div class="col-md-12">
                        <div id="submit">
                            <input type="submit" value="Submit" class="submit-btn blue_bg text-center">
                        </div>
                       </div>
                   </div>
                    
                    </form>
                   </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="about" class="m-t-50">
        <div class="container">
            <div class="horizontal-heading">
                <h5><span class="highlight-heading">About </span> Us</h5>
            </div>


            <div class="row">

            <div class="disTable">
                <div class="col-md-5">
                    <div class="img-responsive about-1 displayTableCell">
                    <img src="./img/myimages/bahekar-logo-2.PNG" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="content-about m-t-70">
                        <p class="m-50" style="text-align: justify;">In the year 1983, Dr Deepak and Dr Alka Bahekar came to Gondia.
                            They joined Government Hospital Gondia, as part of the post graduation
                            training. <br> <br>Over the mandatory one-year registrar-ship they developed a
                            bond with the people. It grew so strong that they settled in this foreign
                            land, making it their very own! The commitment to bring in a change
                            drove them to modernise the practice of medicine in this small town. In 1985, against all odds the foundation of Bahekar Nursing Home
                            was laid. Hard work, passion, kindness and morality - the four
                            cornerstones on which the foundation was set. It was started as a 10
                            bedded Hospital set up with 2-bedded ICU, an operation theatre and 24 *
                            7 dedicated services to the locals. The dedication, devotion and the
                            sincerity in the efforts turned this nursing home into a healthcare hotspot. In 1996 to meet rising demands, the hospital was upgraded to a 25- bedded setup; bringing quality healthcare to the grass roots. Shifting critical patients to the closest tertiary centres in Nagpur, 
                            on ventilator support was a challenge. Precious lives were lost in the transit.
                            After 25 years of practice- when doctors plan to ‘slow down’ Dr. Mr. and
                            Mrs. Bahekar decided to take the challenge of elevating healthcare in
                            Gondia to another level.<br><br> <a href="./more-info.html" class="read-more">Read More</a>
                        </p>

                        <p class="d-none more-content" style="text-align: justify;">
                            In 1996 to meet rising demands, the hospital was upgraded to a 25-
                            bedded setup; bringing quality healthcare to the grass roots.
                            Shifting critical patients to the closest tertiary centres in Nagpur, on
                            ventilator support was a challenge. Precious lives were lost in the transit.
                            After 25 years of practice- when doctors plan to ‘slow down’ Dr. Mr. and
                            Mrs. Bahekar decided to take the challenge of elevating healthcare in
                            Gondia to another level. “Gondiacare” was born out of this dream. A
                            fully-fledged 10 bedded I.C.U. with state of art ventilators, blood
                            distribution unit, neonatal care Centre- Gondiacare was a big boon to the
                            locals. The numbers of beds were upgraded to 50.
                            Another challenge was patients with kidney disease. They had to
                            travel to Nagpur thrice weekly for dialysis, a financial and social burden!
                            Gondiacare decided to step in and the first dialysis centre of the region
                            was set up. Gondiacare hospital has also established its name in Gondia,
                            Bhandara, western MP and Chhattisgarh as a centre for high risk
                            Obstetrics care
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- <section id="timeline">
        <div class="timeline container">
            <div class="horizontal-heading">
                <h5 class=""><span class="highlight-heading">Time</span>Line</h5>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="row">
                       
                        <div class="col-md-12">
                            <div class="horizontal-heading">
                                <h5 class=""><span class="highlight-heading">1983</span></h5>

                                <h4 class=".blue_bg data">Dr. Deepak and Dr. Alka Bahekar joined
                                    Government hospital Gondia, as part of the post graduation training.</h4>
                            </div>
                        </div>
                    
                    </div>
                </div>

                <div class="card rev-card">
                    <div class="row">
                       
                        <div class="col-md-12">
                            <div class="horizontal-heading">
                                <h5 class=""><span class="highlight-heading">1985</span></h5>

                                <h4 class=".blue_bg data">Against all odds the foundation of Bahekar Nursing Home was laid.
                                    1) A 10 bedded Hospital set up with
                                    2) 2-bedded ICU,
                                    3) Operation theatre and
                                    4) 24 * 7 dedicated services for the locals. </h4>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section id="fewfirsts">
        <div class="container p-30">
         <div class="wrapper ">
            <div class="horizontal-heading">
                <h5 class="">A Few <span class="highlight-heading-white">Firsts</span></h5>
            </div>
            <div class="fw">
            <div class="fw-inner">
            <div class="row">
                <div class="col-md-3 firsts">
                    <i class="fa fa-heartbeat icon red">

                    </i>
                    <h4>Fullyfledged 10
                        bedded I.C.U. </h4>
                </div>

                <div class="col-md-3 firsts">
                    <i class="fa fa-stethoscope icon yellow">

                    </i>
                    <h4>Ventilator
                        support services </h4>
                </div>


                <div class="col-md-3 firsts">
                    <i class="fa fa-plus-square icon green">

                    </i>
                    <h4>Blood
                        distribution unit </h4>
                </div>
                
            </div>
            <!-- </div>
            <div class="firstsWrapper"> -->
            <div class="row ">
                
                <div class="col-md-3 firsts">
                    <i class="fa fa-female icon yellow">

                    </i>
                    <h4>Centre
                        catering to high
                        risk Obstetrics
                        care  </h4>
                </div>

                <div class="col-md-3 firsts">
                    <i class="fa fa-thermometer-full icon green">

                    </i>
                    <h4>Dialysis
                        center of the
                        region </h4>
                </div>

                <div class="col-md-3 firsts">
                    <i class="fa fa-user-md icon red">

                    </i>
                    <h4>Joint
                        replacement
                        surgery</h4>
                </div>
            </div>
            </div>
         </div>
         </div>
        </div>
    </section>
    <section id="contact" class="m-t-70">
        <div class="horizontal-heading">
            <h5 class="m-30"><span class="highlight-heading">Reach</span> Us</h5>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3713.2929555052738!2d80.20326191470687!3d21.457018885767994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a2baeb936aaaaab%3A0x8d7edaa62eb131b6!2sGondia%20Care%20Hospital%2C%20Bahekar%20Super%20Speciality%20Hospital%20%26%20Medical%20Research%20Center!5e0!3m2!1sen!2sin!4v1583924193402!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

        </div>
        <div class="footer">
            <p class="text-center">Copyright @2020 <span class="highlight-heading">BSH</span></p>
        </div>
    </section>


    <!-- JQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!--    <script src="https://getbootstrap.com.vn/examples/equal-height-columns/equal-height-columns.css"></script>-->

    <!-- Owl Carousel JS -->
    <script src="js/owl-carousel/owl.carousel.min.js"></script>

    <!-- Waypoints -->
    <script src="js/waypoints/jquery.waypoints.min.js"></script>

    <!-- Responsive Tabs JS -->
    <script src="js/responsive-tabs/jquery.responsiveTabs.min.js"></script>

    <!-- Isotope -->
    <script src="js/isotope/isotope.pkgd.min.js"></script>

    <!-- Magnific Popup -->
    <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Counter -->
    <script src="js/counter/jquery.counterup.min.js"></script>

    <!-- Google Map JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVXqFZF9JEMJdig_6ZFsBJjIFZ57DI2ac&sensor=false"></script>

    <!-- Easing -->
    <script src="js/easing/jquery.easing.1.3.min.js"></script>

    <!-- WOW JS -->
    <script src="./js/wow/wow.min.js"></script>

    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>

</html>
