<?php

session_start();
require "php/hours.php";

?>

<!-- For modals: data-toggle="modal" data-target="#modal1" -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHS Engineering</title>
    <meta name="description"
          content="Welcome to Parkland High School Engineering!"/>

    <!-- Favicons (created with http://realfavicongenerator.net/)-->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicons/manifest.json">
    <link rel="shortcut icon" href="img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#00a8ff">
    <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Normalize -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- Owl -->
    <link rel="stylesheet" type="text/css" href="css/owl.css">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
    <!-- Elegant Icons -->
    <link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
<style>
    iframe{
        width:90%;
    }
    .mission{
        background-color:deepskyblue;
        padding:80px;
    }
    .logo{
        width:50px;
        height:50px;
    }

</style>
</head>

<body>
<div class="preloader">
    <img src="img/loader.gif" alt="Preloader image">
</div>
<nav class="navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="img/logo.png" class="logo" data-active-url="img/logo.png" alt=""></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-nav">
                <li><a href="#top">Home</a></li>
                <li><a href="/newpage1">Fill Name</a></li>
                <li><a href="/newpage2">Fill name</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<header id="top">
    <div class="container">
        <div class="table">
            <div class="header-text">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="light white">Parkland High School Engineering</h3>
                        <h1 class="white typed">Vex Robotics Competitors</h1>
                        <span class="typed-cursor">|</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section>

    <div class="cut cut-top"></div>
    <div class="container">
        <div class="row intro-tables">
            <div class="col-md-4">
                <div class="intro-table intro-table-first">
                    <h5 class="white heading">Our Club Hours</h5>
                    <div class="owl-carousel owl-schedule bottom">
                        <div class="item">
                            <h5 class="white heading soft_heading">Activity Days</h5>
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">Monday</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white"><?php global $snack_bar_hours;
                                        echo $snack_bar_hours['Monday']; ?></h5>
                                </div>
                            </div>
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">Tuesday</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white"><?php global $snack_bar_hours;
                                        echo $snack_bar_hours['Saturday']; ?></h5>
                                </div>
                            </div>
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">Friday</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white"><?php global $snack_bar_hours;
                                        echo $snack_bar_hours['Sunday']; ?></h5>
                                </div>
                            </div>

    </section>
<section class="section section-padded mission">

    <center><h4 class="white">Our Mission</h4></center>
    <center><p class="white" style="width: 50%">As the engineers of the future, we intend to show off the best of our skills in all the competitions we attend and give it our all despite any obscure measure.</p>
    </center>
</section>
<section id="services" class="section section-padded">
    <div class="container">
        <div class="row text-center title">
            <h2>About us</h2>
            <h4 class="light muted">Get to know us better!</h4>
        </div>
        <div class="row services">
            <div class="col-md-4">
                <div class="service">
                    <div class="icon-holder">
                        <img src="https://d1nhio0ox7pgb.cloudfront.net/_img/i_collection_png/256x256/plain/hammer.png" alt="" class="icon">
                    </div>
                    <h4 class="heading">Team Building</h4>
                    <p class="description">From our projects to general conversation, we intend to keep our team strong and coordinated both physically and mentally.
                        <br><br>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <div class="icon-holder">
                        <img src="data:image/png;base64,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" alt="" class="icon">
                    </div>
                    <h4 class="heading">Dedication and Deadlines</h4>
                    <p class="description">As a talented group of individuals, we hold ourselves to standards that challenge us as engineers. From deadlines to tweaking, the Parkland High School Robotics Team strives to produce quality!
                        <br><br>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <div class="icon-holder">
                        <img src="http://www.myiconfinder.com/uploads/iconsets/256-256-007bcbfbd7c9d2c7d7b4b021ee745e22.png" alt="" class="icon">
                    </div>
                    <h4 class="heading">Insert Text</h4>
                    <p class="description">Stomach growling? Satisfy your appetite with food from popcorn to mr yocums snacks.
                        <br><br>
                    </p>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="section section-padded">
    <center><h2>Location</h2></center>
    <center><h4 class="light muted">Stop by for a great time!</h4></center>
    <center><h5 class="light muted">2700 N Cedar Crest Blvd, Allentown, PA 18104<br>
        Allentown, PA 18101 </h5></center>
    <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3027.5887864451975!2d-75.54915788402148!3d40.63894977934011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c4376d80699e0d%3A0x83acd0264db91b74!2sParkland+High+School!5e0!3m2!1sen!2sus!4v1547218429873" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>" </center>

</section>

<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <h3 class="white">Sign Up</h3>
            <form action="" class="popup-form">
                <input type="text" class="form-control form-white" placeholder="Full Name">
                <input type="text" class="form-control form-white" placeholder="Email Address">
                <div class="dropdown">
                    <button id="dLabel" class="form-control form-white dropdown" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        Pricing Plan
                    </button>
                    <ul class="dropdown-menu animated fadeIn" role="menu" aria-labelledby="dLabel">
                        <li class="animated lightSpeedIn"><a href="#">1 month membership ($150)</a></li>
                        <li class="animated lightSpeedIn"><a href="#">3 month membership ($350)</a></li>
                        <li class="animated lightSpeedIn"><a href="#">1 year membership ($1000)</a></li>
                        <li class="animated lightSpeedIn"><a href="#">Free trial class</a></li>
                    </ul>
                </div>
                <div class="checkbox-holder text-left">
                    <div class="checkbox">
                        <input type="checkbox" value="None" id="squaredOne" name="check"/>
                        <label
                            for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                    </div>
                </div>
                <button type="submit" class="btn btn-submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row bottom-footer text-center-mobile">
            <div class="col-sm-8">
                <p>&copy; <?php echo date("Y"); ?> This site is for the Parkland High School Engineering Team</p>
            </div>
        </div>
    </div>
</footer>
<!-- Holder for mobile navigation -->
<div class="mobile-nav">
    <ul>
    </ul>
    <a href="#" class="close-link"><i class="arrow_up"></i></a>
</div>
<!-- Scripts -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/typewriter.js"></script>
<script src="js/jquery.onepagenav.js"></script>
<script src="js/main.js"></script>
<script src="js/scrollnav.js"></script>
</body>

</html>
