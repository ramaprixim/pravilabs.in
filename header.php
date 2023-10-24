<?php include("title.php") ;?>
<!doctype html>
<html class="no-js" lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title><?php echo $title ?></title>
   <meta name="description" content="<?php  echo  $description ?>">
   <meta name="keywords" content="<?php  echo  $keywords ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet" href="assets/css/swiper-bundle.css">
   <link rel="stylesheet" href="assets/css/slick.css">
   <link rel="stylesheet" href="assets/css/aos.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
   <link rel="stylesheet" href="assets/css/flaticon.css">
   <link rel="stylesheet" href="assets/css/nice-select.css">
   <link rel="stylesheet" href="assets/css/spacing.css">
   <link rel="stylesheet" href="assets/css/meanmenu.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Days+One&display=swap" rel="stylesheet">
</head>

<body>
   <button class="scroll-top scroll-to-target" data-target="html">
      <i class="fas fa-angle-up"></i>
   </button>
   <div id="preloadertp">
      <img src="assets/img/pravi lab favicon red blue LOGO.png" alt="">
   </div>
   <header class="d-none d-xl-block">
      <div class="header-custom" id="header-sticky">
         <div class="header-logo-box">
            <a href="index.php"><img src="assets/img/logo/pravi lab LOGO.png" alt="logo"></a>
         </div>

         <div class="header-menu-box">
            <div class="header-menu-top">
               <div class="row align-items-center">
                  <div class="col-lg-4">
                     <div class="header-top-mob">

                     </div>
                  </div>

                  <div class="col-lg-8">
                     <div class="header-time">
                        <span><i class="fa-light fa-phone"></i> +91 9137655589</span>
                        <span style="text-transform: lowercase;"> <i class="fa-light fa-envelope"></i> care@pravilabs.in</span>
                     </div>
                  </div>
                  
               </div>
            </div>

            <div class="header-menu-bottom">
               <div class="row">
                  <div class="col-lg-9">
                     <div class="main-menu main-menu-second">
                        <nav id="mobile-menu">
                           <ul>
                              <li class=""><a class="<?php if($page=='home') {echo 'active';} ?>" href="index.php">Home
                                 </a>
                              </li>
                              <li class=""><a class="<?php if($page=='about-us') {echo 'active';} ?>" href="about-us.php">About Us</a>
                              </li>
                              <li class=""><a class="<?php if($page=='health-packages') {echo 'active';} ?>" href="health-packages.php">Health Packages</a>
                              </li>
                              <li><a href="#">Tests</a></li>
                              <li class=""><a href="#">Our Partners</a>
                              </li>
                              <li><a href="contact-us.php"
                                    class="nav-link <?php if($page=='contact-us') {echo 'active';} ?>">Contact Us</a>
                              </li>
                              <li class=""><a href="#">Blogs</a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>

                  <div class="col-lg-3">
                     <div class="header-cart-order d-flex align-items-center ">
                        <a class="header-bottom-btn" href="contact-us.php">Book Appointment</a>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </header>
   
   <div id="header-mob-sticky" class="tp-mobile-header-area pt-15 pb-15 d-xl-none">
      <div class="container">
         <div class="row align-items-center">
            <d iv class="col-md-4 col-10">
               <div class="tp-mob-logo">
                  <a href="index.php"><img src="assets/img/logo/pravi lab LOGO.png" alt="logo" style="width: 143px;height: 95px;"></a>
               </div>
            </d>
            <div class="col-md-8 col-2">
               <div class="tp-mobile-bar d-flex align-items-center justify-content-end">
                
                  <button class="tp-menu-toggle"><i class="far fa-bars"></i></button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="tpsideinfo tp-side-info-area">
      <button class="tpsideinfo__close"><i class="fal fa-times"></i></button>
      <div class="tpsideinfo__logo mb-40">
         <a href="index.php"><img src="assets/img/logo/pravi lab LOGO white.png" alt="logo"></a>
      </div>

      <div class="mobile-menu"></div>
      <div class="tpsideinfo__socialicon">
         <a href="#"><i class="fa-brands fa-youtube"></i></a>
         <a href="#"><i class="fa-brands fa-twitter"></i></a>
         <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
         <a href="#"><i class="fa-brands fa-skype"></i></a>
      </div>
   </div>
   <div class="body-overlay"></div>
   <main>