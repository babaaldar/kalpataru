<!DOCTYPE html>
<html lang="en">

<head>

    <!-- important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Kalpataru</title>

    <?php

        include "include/html_head.php";
    ?>

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
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

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
    <link rel="stylesheet" href="css/responsive.css">


</head>

<body>


    <div id="wrapper" class="container-fluid">

        <div class="overlay">

            <div class="wrapper">
                <header>
                    <nav class="navbar nav-fixed-top">
                        <div class="container-fluid">
                            <div class="site-nav-wrapper">
                                <div class="navbar-header">
                                    <span class="hidden-md hidden-lg" id="mobile-nav-open-btn">&#9776;</span>
                                    <a href="#home" class="navbar-brand smooth-scroll">
                                        <span class="logo">
                                            <img src="./img/logo.PNG" alt="Bahekar Super Speciality center logo">
                                        </span>
                                    </a>
                                </div>

                                <div class="container">
                                    <div class="collapse navbar-collapse">
                                        <ul class="nav navbar-nav pull-right">
                                            <li class="active"><a href="#home" class="smooth-scroll">Home</a></li>
                                            <li class=""><a href="#about" class="smooth-scroll">About</a></li>
                                            <!--
                                   <li class=""><a href="#team" class="smooth-scroll">Team</a></li>
                                   <li class=""><a href="#services" class="smooth-scroll">Services</a></li>
                                   <li class=""><a href="#work" class="smooth-scroll">Work</a></li>
                                   <li class=""><a href="#blog" class="smooth-scroll">Blog</a></li>
-->
                                            <li class=""><a href="#contacts" class="smooth-scroll">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!--                       mobile-menu-->


                                <!--
                      <div id="mobile-nav">
                          <span id="mobile-nav-close-btn">   &times;</span>
                          
                          <div id="mobile-nav-content">
                              <ul class="nav">
                                    <li class="active"><a href="#home" >Home</a></li>
                                   <li><a href="#about" class="">About</a></li>
                                   <li><a href="#team" class="">Team</a></li>
                                   <li><a href="#services" class="">Services</a></li>
                                   <li><a href="#portfolio" class="">Work</a></li>
                                   <li><a href="#blog" class="">Blog</a></li>
                                   <li><a href="#contacts" class="">Contact</a></li>
                              </ul>
                          </div>
                      </div>
-->
                            </div>
                        </div>
                    </nav>
                </header>

            </div>
            <section id="hero" class="m-t-30">
                <div class="container-fluid">
                    <div class="row">
                    
                        <div class="col-md-12 login-section">
                           
                                <!-- /.login-logo -->
                                <div class="card">
                                    <div class="card-body login-card-body">
                                        <p class="login-box-msg">Sign in </p>

                                        <form action="./verifyuser.php" method="post">
                                            <div class="input-group mb-3">

                                                <input type="text" class="form-control" placeholder="User name" id="uname" name="uname">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-user"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">

                                                <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-lock"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <!-- /.col -->
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                        </form>
                                        <!---->
                                        <!--            <div class="social-auth-links text-center mb-3">-->
                                        <!--                <p>- OR -</p>-->
                                        <!--                <a href="#" class="btn btn-block btn-primary">-->
                                        <!--                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook-->
                                        <!--                </a>-->
                                        <!--                <a href="#" class="btn btn-block btn-danger">-->
                                        <!--                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+-->
                                        <!--                </a>-->
                                        <!--            </div>-->

                                        <!--            <p class="mb-1">-->
                                        <!--                <a href="forgot-password.html">I forgot my password</a>-->
                                        <!--            </p>-->
                                        <!--            <p class="mb-0">-->
                                        <!--                <a href="register.html" class="text-center">Register a new membership</a>-->
                                        <!--            </p>-->
                                    </div>
                                    <!-- /.login-card-body -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="about">

            </section>
        </div>


    </div>
    <section id="about" class="m-t-50">
        <div class="container">
            <div class="horizontal-heading">
                <h5><span class="highlight-heading">About </span> Us</h5>
            </div>


            <div class="row">
                <div class="col-md-6 img-responsive about-1">
                    <img src="./img/logo-white.PNG" alt="">
                </div>
                <div class="col-md-6">
                    <div class="content-about m-t-70">
                        <p class="m-50">In the year 1983, Dr Deepak and Dr Alka Bahekar came to Gondia.
                            They joined Government Hospital Gondia, as part of the post graduation
                            training. <br> <br>Over the mandatory one-year registrar-ship they developed a
                            bond with the people. It grew so strong that they settled in this foreign
                            land, making it their very own! The commitment to bring in a change
                            drove them to modernise the practice of medicine in this small town. In 1985, against all odds the foundation of Bahekar Nursing Home
                            was laid. Hard work, passion, kindness and morality - the four
                            cornerstones on which the foundation was set. It was started as a 10
                            bedded Hospital set up with 2-bedded ICU, an operation theatre and 24 *
                            7 dedicated services to the locals. The dedication, devotion and the
                            sincerity in the efforts turned this nursing home into a healthcare hotspot. <br><br> <a href="./docs/BAHEKAR%20SUPER%20option%202.pdf.pdf" class="read-more">Read More</a>
                        </p>

                        <p class="d-none more-content">
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
    </section>


    <section id="contact">
        <div class="horizontal-heading">
            <h5 class=""><span class="highlight-heading">Reach</span> Us</h5>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3713.2929555052738!2d80.20326191470687!3d21.457018885767994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a2baeb936aaaaab%3A0x8d7edaa62eb131b6!2sGondia%20Care%20Hospital%2C%20Bahekar%20Super%20Speciality%20Hospital%20%26%20Medical%20Research%20Center!5e0!3m2!1sen!2sin!4v1583924193402!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

        </div>
        <div class="footer">
            <p class="text-center">Copyright @2020 <span class="highlight-heading">KJSCE</span></p>
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
