<?php
session_start();
if(!isset($_SESSION['uid'])){
  header('location:registration/login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Transport</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">transpot@gmail.com</a>
        <i class="fa fa-phone"></i> +91 8003649945
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">Tran<span>Sport</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Home</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
           <li><a href="ticket.php">your tickets</a></li>
          <li><a href="#"><?php echo $_SESSION['uname'];?></a></li>
          <li><a href="registration/logout.php">logout</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>Making <span>your Ride</span><br>happen!</h2>
      <div>
        <a href="registration/bussearch.php" class="btn-get-started scrollto">Ticket Book</a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/bus1.jpg');"></div>
      <div class="item" style="background-image: url('img/bus2.jpg');"></div>
      <div class="item" style="background-image: url('img/bus3.jpg');"></div>
      <div class="item" style="background-image: url('img/bus4.jpg');"></div>
      <div class="item" style="background-image: url('img/bus5.jpg');"></div>
      <div class="item" style="background-image: url('img/bus6.jpg');"></div>
      <div class="item" style="background-image: url('img/bus7.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">
       <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Portfolio</h2>
          <p>“The Impulse to Travel is one of the hopeful symptoms of life” ... </p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port1.jpg" class="portfolio-popup">
                <img src="img/port1.jpg" alt="" style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port2.jpg" class="portfolio-popup">
                <img src="img/port2.jpg" alt="" style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port3.jpg" class="portfolio-popup">
                <img src="img/port3.jpg" alt=""style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port4.jpg" class="portfolio-popup">
                <img src="img/port4.jpg" alt=""style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port5.jpg" class="portfolio-popup">
                <img src="img/port5.jpg" alt=""style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port6.jpg" class="portfolio-popup">
                <img src="img/port6.jpg" alt=""style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port7.jpg" class="portfolio-popup">
                <img src="img/port7.jpg" alt=""style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port8.jpg" class="portfolio-popup">
                <img src="img/port8.jpg" alt=""style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->
     <section id="Partners" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Partners</h2>
          <p>With there Help and Corporation we make your travel full of Joy and Memorable</p>
        </div>

        <div class="owl-carousel clients-carousel">
          <img src="img/partner1.png" alt="">
          <img src="img/partners2.jpeg" alt="">
          <img src="img/partner3.jpg" alt="">
          <img src="img/partner4.jpg" alt="">
          <img src="img/partner5.png" alt="">
        </div>

      </div>
    </section><

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="img/port3.jpg" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing</h2>
            <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Services</h2>
          <p>But at the great labor pain there are every time great film program come any be professional engineers for export what's what come any was our bad no film avoids the fault to be currently no customer wants to export cost information that would be</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-picture-o"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata nodera clas.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trinige zareta lobur trade.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Clients Section
    ============================-->
  <!-- #clients -->

    <!--==========================
      Our Portfolio Section
    ============================-->
  
  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Traveler</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
        Designed by <a href="https://bootstrapmade.com/">Bus Transport</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
