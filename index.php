<?php
    ini_set('display_errors', 1);
    // $action = new DbAction();
	// $action->execute();

?>

<!doctype html>
<html lang="en">
  <head>
    <title>TechÉts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">

    <script src="js/jquery.min.js"></script>
    <script src="jsCustom/index.js"></script>

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">    
  </head>
  <body>

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
    

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3" id="top">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="index.php">TechÉts</a></div>


          

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-lg-block">
              <li><a href="index.php" class="nav-link active">Home</a></li>
              <li><a href="contact.php">Réserver</a></li>
            </ul>
          </nav>
          
          <div class="col-6 site-burger-menu d-block d-lg-none text-right">
            <a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a>
          </div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="home-section section-hero overlay slanted" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8 text-center">
            <div class="mx-auto w-75">
              <h3 style="color:white;">Réservez un micro-onde de la cafétéria en appuyant sur le bouton</h3>
            </div>
            <p class="mt-5"><a href="contact.php" class="btn btn-outline-white btn-md ">Réserver</a></p>
            <button type="button" id="btn-clickMe">Click me!</button>
          </div>
        </div>
      </div>
        
      <!-- VIDEO -->
      <div class="video-container">
        <video autoplay loop="true">
          <source type="video/mp4" src="videos/video.mp4">
        </video>
      </div>

      <a href="#about-us-section" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down"></span>
      </a>

    </section>
    
    <!-- ABOUT US -->
    <section class="site-section about-us-section" id="about-us-section">
      

        <div class="row pb-0 border-top pt-5 block__19738 section-counter">

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <span class="icon-line-mobile mr-3"></span>
              <strong class="number" data-number="2393">0</strong>
            </div>
            <span class="caption">Nombre d'usager<br> par jour</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <span class="icon-line-lightbulb mr-3"></span>
              <strong class="number" data-number="54">0</strong>
            </div>
            <span class="caption">Temps d'utilisation total<br>en minute</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <span class="icon-line-trophy mr-3"></span>
              <strong class="number" data-number="120">0</strong>
            </div>
            <span class="caption">Nombre d'utilisation<br>total</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <span class="icon-line-puzzle mr-3"></span>
              <strong class="number" data-number="550">0</strong>
            </div>
            <span class="caption">Temps d'attente moyen</span>
          </div>

            
        </div>

      </div>
    </section>

    

    <footer class="site-footer slanted-footer">

      <a href="#top" class="smoothscroll scroll-top">
        <span class="icon-keyboard_arrow_up"></span>
      </a>

      <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
          
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
           
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
         
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
         
          </div>
        </div>

        <div class="row text-center">
          <div class="col-12">
            <p class="copyright"><small class="block">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </small></p>
          </div>
        </div>
      </div>
    </footer>
  
  </div>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    
    <script src="js/custom.js"></script>
    <!-- <script src="Communication.js"></script>   -->
  </body>
</html>
