<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

   <!-- CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/nouislider.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/plyr.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/photoswipe.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/default-skin.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/icon/favicon-32x32.png" sizes="32x32">
  <link rel="apple-touch-icon" href="<?php echo base_url();?>assets/icon/favicon-32x32.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/icon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>assets/icon/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>assets/icon/apple-touch-icon-144x144.png">

  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Dmitry Volkov">
  <title>FlixGo – Online Movies, TV Shows & Cinema </title>

</head>
<body class="body">
  
  <!-- header -->
  <header class="header">
    <div class="header__wrap">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="header__content">
              <!-- header logo -->
              <a href="<?php echo base_url();?>Client" class="header__logo">
                <img src="<?php echo base_url();?>assets/img/logo.svg" alt="">
              </a>
              <!-- end header logo -->

              <!-- header nav -->
              <ul class="header__nav">
                <!-- dropdown -->
                <li class="header__nav-item">
                  <a href="<?php echo base_url();?>Client" class="header__nav-link">Home</a>

                </li>
                <!-- end dropdown -->

                <!-- dropdown -->
              
                <!-- end dropdown -->

                <li class="header__nav-item">
                  <a href="<?php echo base_url();?>Client/list" class="header__nav-link">Order ticket</a>
                </li>

                <li class="header__nav-item">
                  <a href="<?php echo base_url();?>Client/about"" class="header__nav-link">About Us</a>
                </li>

               
              </ul>
              <!-- end header nav -->

              <!-- header auth -->
              <div class="header__auth">
                 <ul class="footer__social">
            <li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
            <li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
            <li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
           
          </ul>
                </button>

               
              </div>
              <!-- end header auth -->

              <!-- header menu btn -->
              <button class="header__btn" type="button">
                <span></span>
                <span></span>
                <span></span>
              </button>
              <!-- end header menu btn -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- header search -->
    <form action="#" class="header__search">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="header__search-content">
              <input type="text" placeholder="Search for a movie, TV Series that you are looking for">

              <button type="button">search</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- end header search -->
  </header>
  <!-- end header -->

  <!-- details -->
  <section class="section details">
    <!-- details background -->
    <div class="details__bg" data-bg="<?php echo base_url();?>assets/img/home/home__bg.jpg"></div>
    <!-- end details background -->

    <!-- details content -->
    <div class="container">
      <div class="row">
        <!-- title -->
        <div class="col-12">
          <h1 class="details__title">Toy Story 4</h1>
        </div>
        <!-- end title -->

        <!-- content -->
        <div class="col-12 col-xl-6">
          <div class="card card--details">
            <div class="row">
              <!-- card cover -->
              <div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-5">
                <div class="card__cover">
                  <img src="<?php echo base_url();?>assets/img/covers/toystory.jpg" alt="">
                </div>
              </div>
              <!-- end card cover -->

              <!-- card content -->
              <div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-7">
                <div class="card__content">
                  <div class="card__wrap">
                    <span class="card__rate"><i class="icon ion-ios-star"></i>8.0</span>

                    <ul class="card__list">
                      
                      <li>SU</li>
                    </ul>
                  </div>

                  <ul class="card__meta">
                    <li><span>Genre:</span>  Animation, Adventure, Comedy</li>
                    <li><span>Release year:</span> 2019</li>
                    <li><span>Running time:</span> 100 min</li>
                    <li><span>Country:</span>USA</li>
                  </ul>

                  <div class="card__description card__description--details">
                   When a new toy called "Forky" joins Woody and the gang, a road trip alongside old and new friends reveals how big the world can be for a toy.
                  </div>
                </div>
              </div>
              <!-- end card content -->
            </div>
          </div>
        </div>
        <!-- end content -->

        <!-- player -->
        <div class="col-12 col-xl-6">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/wmiIUN-7qhE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </video>
        </div>
        <!-- end player -->

        
        

            
          </div>
        </div>
      </div>
    </div>
    <!-- end details content -->
  </section>
  <!-- end details -->
 

                 


        
  <!-- footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        
        <!-- end footer list -->

        <!-- footer list -->
        <div class="col-6 col-sm-4 col-md-3">
          <h6 class="footer__title">Resources</h6>
          <ul class="footer__list">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        </div>
        <!-- end footer list -->

        <!-- footer list -->
        <div class="col-6 col-sm-4 col-md-3">
          <h6 class="footer__title"></h6>
          <ul class="footer__list">
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Security</a></li>
          </ul>
        </div>
        <!-- end footer list -->

        <!-- footer list -->
        <div class="col-12 col-sm-4 col-md-3">
          <h6 class="footer__title">Contact</h6>
          <ul class="footer__list">
            <li><a href="tel:+18002345678">+1 (800) 234-5678</a></li>
            
          </ul>
         
        </div>
        <!-- end footer list -->

        <!-- footer copyright -->
        <div class="col-12">
          <div class="footer__copyright">
            <small><a target="_blank">Copyright © 2019 All rights reserved</a></small>

            <ul>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
        <!-- end footer copyright -->
      </div>
    </div>
  </footer>
  <!-- end footer -->

    <!-- JS -->
  <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.mousewheel.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.mCustomScrollbar.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/wNumb.js"></script>
  <script src="<?php echo base_url();?>assets/js/nouislider.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/plyr.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.morelines.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/photoswipe.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/photoswipe-ui-default.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>

</html>