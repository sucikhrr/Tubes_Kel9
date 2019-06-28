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

  <!-- home -->
  <section class="home">
    <!-- home bg -->
    <div class="owl-carousel home__bg">
      <div class="item home__cover" data-bg="assets/img/home/home__bg.jpg"></div>
      <div class="item home__cover" data-bg="assets/img/home/home__bg2.jpg"></div>
      <div class="item home__cover" data-bg="assets/img/home/home__bg3.jpg"></div>
      <div class="item home__cover" data-bg="assets/img/home/home__bg4.jpg"></div>
    </div>
    <!-- end home bg -->

    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="home__title"><b>NOW</b> SHOWING</h1>

          <button class="home__nav home__nav--prev" type="button">
            <i class="icon ion-ios-arrow-round-back"></i>
          </button>
          <button class="home__nav home__nav--next" type="button">
            <i class="icon ion-ios-arrow-round-forward"></i>
          </button>
        </div>

        <div class="col-12">
          <div class="owl-carousel home__carousel">
            <div class="item">
              <!-- card -->
              <div class="card card--big">
                <div class="card__cover">
                  <img src="assets/img/covers/xman.jpg" alt="">
                  <a href="<?php echo base_url();?>Movie/xman" class="card__play">
                    <i class="icon ion-ios-play"></i>
                  </a>
                </div>
                <div class="card__content">
                  <h3 class="card__title"><a href="<?php echo base_url();?>Movie/xman">X-Men: Dark Phoenix</a></h3>
                  <span class="card__category">
                    <a> Action, Adventure, Sci-Fi</a>
                    
                  </span>
                  <span class="card__rate"><i class="icon ion-ios-star"></i>8.7</span>
                </div>
              </div>
              <!-- end card -->
            </div>

            <div class="item">
              <!-- card -->
              <div class="card card--big">
                <div class="card__cover">
                  <img src="<?php echo base_url();?>assets/img/covers/mib.jpg" alt="">
                  <a href="<?php echo base_url();?>Movie/mib" class="card__play">
                    <i class="icon ion-ios-play"></i>
                  </a>
                </div>
                <div class="card__content">
                  <h3 class="card__title"><a href="<?php echo base_url();?>Movie/mib">Men in Black: International</a></h3>
                  <span class="card__category">
                    <a> Action, Adventure, Comedy </a>
                  </span>
                  <span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>
                </div>
              </div>
              <!-- end card -->
            </div>

            <div class="item">
              <!-- card -->
              <div class="card card--big">
                <div class="card__cover">
                  <img src="assets/img/covers/toystory.jpg" alt="">
                  <a href="<?php echo base_url();?>Movie/toystory" class="card__play">
                    <i class="icon ion-ios-play"></i>
                  </a>
                </div>
                <div class="card__content">
                  <h3 class="card__title"><a href="<?php echo base_url();?>Movie/toystory">Toy Story 4</a></h3>
                  <span class="card__category">
                    <a> Animation, Adventure, Comedy</a>
                  
                  </span>
                  <span class="card__rate"><i class="icon ion-ios-star"></i>8.0</span>
                </div>
              </div>
              <!-- end card -->
            </div>

            
              <!-- end card -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end home -->

  <!-- content -->
  <section class="content">
    <div class="content__head">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- content title -->
            <h2 class="content__title">Coming soon</h2>
            <!-- end content title -->           
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <!-- content tabs -->
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
          <div class="row">
            <!-- card -->
            <div class="col-6 col-sm-12 col-lg-6">
              <div class="card card--list">
                <div class="row">
                  <div class="col-12 col-sm-4">
                    <div class="card__cover">
                      <img src="assets/img/covers/spider.jpg" >
                      
                
                    </div>
                  </div>

                  <div class="col-12 col-sm-8">
                    <div class="card__content">
                      <h3 class="card__title">Spider-Man: Far From Home</h3>
                      <span class="card__category">
                       <a> Action, Adventure, Sci-Fi</a>
                      </span>
                      <div class="card__wrap">
                        <span class="card__rate"> July 5 2019</span>
                      </div>

                     

                      <div class="card__description">
                        <p>Shortly after the events of Avengers: Endgame, Peter Parker goes on a school trip to Europe with his classmates.While abroad, he is recruited by Nick Fury to team up Mysterio, a master of trickery and illusion, to battle the Elementals</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end card -->

            <!-- card -->
            <div class="col-6 col-sm-12 col-lg-6">
              <div class="card card--list">
                <div class="row">
                  <div class="col-12 col-sm-4">
                    <div class="card__cover">
                      <img src="assets/img/covers/hobs.jpg" alt="">
                     
                    </div>
                  </div>

                  <div class="col-12 col-sm-8">
                    <div class="card__content">
                      <h3 class="card__title">Fast & Furious: Hobbs & Shaw</h3>
                     
                      <span class="card__category">
                        <a>Action</a>
                      </span>
                        <div class="card__wrap">
                        <span class="card__rate">July 31 2019</span>
                      </div>

                     

                      <div class="card__description">
                        <p>Two years after the events of The Fate of the Furious, two men who dislike each other extremely, are forced to team up to stop a new threat emerging from Brixton Lore, a cyber-genetically enhanced international terrorist who created a deadly virus that could threaten the human race.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end card -->

            <!-- card -->
              <div class="col-6 col-sm-12 col-lg-6">
              <div class="card card--list">
                <div class="row">
                  <div class="col-12 col-sm-4">
                    <div class="card__cover">
                      <img src="assets/img/covers/anna.jpg" alt="">
                     
                    </div>
                  </div>
            <div class="col-12 col-sm-8">
                    <div class="card__content">
                      <h3 class="card__title">Annabelle Comes Home</h3>
                      <span class="card__category">
                       <a> Horror,Thriler</a>
                      </span>
                      <div class="card__wrap">
                        <span class="card__rate">June 26 2019</span>
                      </div>

                     

                      <div class="card__description">
                        <p>Determined to keep Annabelle from wreaking more havoc, demonologists Ed and Lorraine Warren  placing her "safely" behind sacred glass and enlisting a priest's holy blessing. But an unholy night of horror awaits as Annabelle awakens the evil spirits in the room, who all set their sights on a new target the Warren's ten-year-old daughter Judy, and her babysitters </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end card -->

          <!-- card -->
            <div class="col-6 col-sm-12 col-lg-6">
              <div class="card card--list">
                <div class="row">
                  <div class="col-12 col-sm-4">
                    <div class="card__cover">
                      <img src="assets/img/covers/lion.jpg" alt="">
                     
                    </div>
                  </div>

                  <div class="col-12 col-sm-8">
                    <div class="card__content">
                      <h3 class="card__title">The Lion King </h3>
                     
                      <span class="card__category">
                        <a>Drama,Advanture</a>
                      </span>
                        <div class="card__wrap">
                        <span class="card__rate">July 17 2019</span>
                      </div>

                     

                      <div class="card__description">
                        <p>Simba, the son of Mufasa and the Prince of the Pride Lands, hopes to follow in his father's footsteps. Mufasa's brother, Scar, plots to betray Mufasa and take over the Pride Lands, forcing Simba into exile, Simba has to make an alliance and rebuild himself fully to take what is rightfully </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            

            <!-- end card -->
          </div>
        </div>
          
       
        <!-- end card -->

        <!-- section btn -->
        
        <!-- end section btn -->
      </div>
    </div>
  </section>
  <!-- end expected premiere -->

  

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