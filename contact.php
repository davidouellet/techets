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
          <div class="site-logo col-6"><a href="index.php">TechÉts</mark></a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-lg-block">
              <li><a href="index.php" class="nav-link">Home</a></li>
              <li><a href="contact.php" class="active">Réserver</a></li>
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
            <h1>Réservation:</h1>
            <div class="mx-auto w-75">
              <p>Rendez vous au micro-onde #11 à 12:15 am</p>
            </div>
		
          </div>
        </div>
      </div>
        
      <!-- VIDEO -->
      <div class="video-container">
        <video autoplay loop="true">
          <source type="video/mp4" src="videos/video.mp4">
        </video>
      </div>

      <a href="#next-section" class="smoothscroll scroll-button">
        <span class=" icon-keyboard_arrow_down"></span>
      </a>

    </section>

    <section class="site-section" id="next-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <form action="#" class="">
			<div class="container">
			<div class="row align-items-left justify-content-center">
			<div class="col-md-8 text-left">
            <h1 style="padding-bottom: 20px;">Contactez-nous:</h1>
            </div>
            </div>
            </div>
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Prénom</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Nom de famille</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Sujet</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Écrivez votre question ici..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Envoyez" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-lg-5 ml-auto">
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Adresse</p>
              <p class="mb-4">1100 rue Notre-Dame Ouest</p>

         

              <p class="mb-0 font-weight-bold">Adresse Email</p>
              <p class="mb-0"><a href="#">TechETS@hotmail.com</a></p>

            </div>
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
          
            </ul>
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

  </body>
</html>
