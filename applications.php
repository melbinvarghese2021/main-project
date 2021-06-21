<?php 
session_start();
include 'model/model.php';
$model=new Model();
if(isset($_SESSION['code']))
{
    $code  = $_SESSION['code'];
    ?>
    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">

        <!--====== Title ======-->
        <title>e-Patrol</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
        <!--====== Animate CSS ======-->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!--====== Line Icons CSS ======-->
        <link rel="stylesheet" href="assets/css/LineIcons.2.0.css">
        <!--====== Bootstrap CSS ======-->
        <link rel="stylesheet" href="assets/css/bootstrap-4.5.0.min.css">
        <!--====== Default CSS ======-->
        <link rel="stylesheet" href="assets/css/default.css">
        <!--====== Style CSS ======-->
        <link rel="stylesheet" href="assets/css/style.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/60640fc5f7ce18270935a5fa/1f23dr7br';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
    </head>

    <body>
        <!--====== PRELOADER PART START ======-->

        <div class="preloader">
            <div class="loader">
                <div class="ytp-spinner">
                    <div class="ytp-spinner-container">
                        <div class="ytp-spinner-rotator">
                            <div class="ytp-spinner-left">
                                <div class="ytp-spinner-circle"></div>
                            </div>
                            <div class="ytp-spinner-right">
                                <div class="ytp-spinner-circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--====== PRELOADER PART ENDS ======-->

        <!--====== HEADER PART START ======-->

        <header class="header-area">
            <div class="navbar-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg">
                                <a class="navbar-brand" href="index.html">
                                    <p style="color: black">e-PATROL</p>
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul id="nav" class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="page-scroll" href="index.html">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#features">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="services.php">Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="contact.php">Contact Us</a>
                                        </li>
                                    </ul>
                                </div> <!-- navbar collapse -->

                                <div class="navbar-btn d-none d-sm-inline-block">
                                    <a class="main-btn" data-scroll-nav="0" href="signout.php" rel="nofollow">Sign Out</a>
                                </div>
                            </nav> <!-- navbar -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- navbar area -->

            <div id="home" class="header-hero bg_cover" style="background-image: url(assets/images/banner-bg.svg)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="header-hero-content text-center">
                                <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Welcome to </h3>
                                <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">e-Patrol</h2>
                            </div> <!-- header hero content -->
                        </div>
                    </div> <!-- row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.4s">
                                <img src="assets/images/header-hero.png" alt="hero">
                            </div> <!-- header hero image -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
                <div id="particles-1" class="particles"></div>
            </div> <!-- header hero -->
        </header>

        <!--====== HEADER PART ENDS ======-->


        <!--====== SERVICES PART START ======-->

        <section id="features" class="services-area pt-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-7 col-sm-8">
                        <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="services-icon">
                                <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                                <img class="shape-1" src="assets/images/services-shape-1.svg" alt="shape">
                                <i class="lni lni-baloon"></i>
                            </div>
                            <div class="services-content mt-30">
                                <h4 class="services-title"><a href="#">Apply for services</a></h4><br>
                                <center> <div class="row mb-4 px-3"> <small class="font-weight-bold"><a class="btn btn-success" data-toggle="modal" data-target="#complaintModal" style="color: white">Apply</a></small> </div></center>
                            </div>
                        </div>
                    </div> <!-- single services -->
                    </div><!-- 
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="assets/images/services-shape-3.svg" alt="shape">
                            <i class="lni lni-bolt-alt"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Powerful</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.</p>
                            <a class="more" href="#">Learn More <i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div> -->

            </div> <!-- container -->
        </section>

        <div class="modal fade" id="complaintModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Applications</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <form action="action/action_application.php" method="POST" role="form">
                <div col-sm6>
                    <div class="form-group">
                        <label> Applications</label>
                        <select name="application" id="application" class="form-control selectpicker"  data-live-search="true" required="required">
                            <option value="">Your application type</option>
                            <option value="Police Verification">Police Verification</option>
                            <option value="Character Certificate">Character Certificate</option>
                        </select>
                    </div>
                </div>
                <div col-sm6>
                    <div class="form-group">
                        <label> Address</label>
                        <textarea name="address" id="address" class="form-control" rows="3" required="required" placeholder="Your address"></textarea>
                    </div>
                </div>
                <center><button type="submit" class="btn btn-primary">Submit application</button></center>
            </form>
<!--     <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-12">
                    <div class="card2 card border-0 px-4 py-5">
                        <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Email Address</h6>
                        </label> <input class="mb-4" type="text" name="email" placeholder="Enter a valid email address"> </div>
                        <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label> <input type="password" name="password" placeholder="Enter password"> </div>
                        <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">Register</button> </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
</div>
</div>
</div>
</div>
<!--====== FOOTER PART START ======-->

<footer id="footer" class="footer-area pt-120">
    <div class="container">
        <div class="footer-widget pb-100">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <a class="logo" href="#">
                            <h2 style="color: white"><b>e-PATROL</b></h2>
                        </a>
                        <p class="text">Lorem ipsum dolor sit amet consetetur sadipscing elitr, sederfs diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                        <ul class="social">
                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                            <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
                            <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                        </ul>
                    </div> <!-- footer about -->
                </div>
                <div class="col-lg-5 col-md-7 col-sm-7">
                    <div class="footer-link d-flex mt-50 justify-content-md-between">
                        <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="footer-title">
                                <h4 class="title">Quick Link</h4>
                            </div>
                            <ul class="link">
                                <li><a href="#">Road Map</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Pricing</a></li>
                            </ul>
                        </div> <!-- footer wrapper -->
                        <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="footer-title">
                                <h4 class="title">Resources</h4>
                            </div>
                            <ul class="link">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div> <!-- footer wrapper -->
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-3 col-md-5 col-sm-5">
                    <div class="footer-contact mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="footer-title">
                            <h4 class="title">Contact Us</h4>
                        </div>
                        <ul class="contact">
                            <li>+91 8606852619</li>
                            <li>melbinvarghese2021@mca.ajce.in</li>
                            <li>www.linkedin.com/melbinvarghese</li>
                            <li>Idukki, Kerala<br> India.</li>
                        </ul>
                    </div> <!-- footer contact -->
                </div>
            </div> <!-- row -->
        </div> <!-- footer widget -->
    </div> <!-- container -->
    <div id="particles-2"></div>
</footer>

<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TOP TOP PART START ======-->

<a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

<!--====== BACK TOP TOP PART ENDS ======-->   

<!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->

<!--====== PART ENDS ======-->




<!--====== Jquery js ======-->
<script src="assets/js/vendor/jquery-3.5.1-min.js"></script>
<script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

<!--====== Bootstrap js ======-->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap-4.5.0.min.js"></script>

<!--====== Plugins js ======-->
<script src="assets/js/plugins.js"></script>

<!--====== Counter Up js ======-->
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>



<!--====== Scrolling Nav js ======-->
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/scrolling-nav.js"></script>

<!--====== wow js ======-->
<script src="assets/js/wow.min.js"></script>

<!--====== Particles js ======-->
<script src="assets/js/particles.min.js"></script>

<!--====== Main js ======-->
<script src="assets/js/main.js"></script>

</body>
</html>
<?php
}
else
{
    echo '<script type="text/javascript" >window.location="index.html";alert("Please login to view this section.");</script>';
}
?>
