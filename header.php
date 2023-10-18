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
   
</head>

<body>
   <button class="scroll-top scroll-to-target" data-target="html">
      <i class="fas fa-angle-up"></i>
   </button>
   <div id="preloadertp">
      <img src="assets/img/logo/favicon.png" alt="">
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
                        <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle cx="2" cy="2" r="2" fill="#FF0123" />
                           <circle cx="7" cy="2" r="2" fill="#FF0123" />
                           <circle cx="12" cy="2" r="2" fill="#FF0123" />
                           <circle cx="12" cy="7" r="2" fill="#FF0123" />
                           <circle cx="12" cy="12" r="2" fill="#FF0123" />
                           <circle cx="7" cy="7" r="2" fill="#FF0123" />
                           <circle cx="7" cy="12" r="2" fill="#FF0123" />
                           <circle cx="7" cy="17" r="2" fill="#FF0123" />
                           <circle cx="2" cy="7" r="2" fill="#FF0123" />
                           <circle cx="2" cy="12" r="2" fill="#FF0123" />
                        </svg>
                        <span>Help Desk :</span>
                        <a href="tel:+9159008855"> +91 590 088 55 </a>
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <div class="header-time">
                        <span><i class="fa-light fa-clock-ten"></i> Monday - Friday 09:00 am - 05:00 Pm</span>
                        <span>Monday - Friday 09:00 am - 05:00 Pm</span>
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
                              <li class=""><a href="about-us.php">About Us</a>
                              </li>
                              <li class=""><a href="health-packages.php">Health Packages</a>
                              </li>
                              <li><a href="test.php">Tests</a></li>
                              <li class=""><a href="our-partners.php">Our Partners</a>
                              </li>
                              <li><a href="contact-us.php"
                                    class="nav-link <?php if($page=='contact-us') {echo 'active';} ?>">Contact Us</a>
                              </li>
                              <li class=""><a href="blog.html">Blogs</a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="header-cart-order d-flex align-items-center justify-content-end">
                        <a class="header-bottom-btn" href="contact.html">Book Appointment</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header-area-end -->

   <!-- tp-mobile-header-area start -->
   <div id="header-mob-sticky" class="tp-mobile-header-area pt-15 pb-15 d-xl-none">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-4 col-10">
               <div class="tp-mob-logo">
                  <a href="index.php"><img src="assets/img/logo/logo.png" alt="logo"></a>
               </div>
            </div>
            <div class="col-md-8 col-2">
               <div class="tp-mobile-bar d-flex align-items-center justify-content-end">
                  <div class="tp-bt-btn-banner d-none d-md-block d-xl-none mr-30">
                     <a class="tp-bt-btn" href="tel:123456">
                        <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle cx="2" cy="2" r="2" fill="#FF0123" />
                           <circle cx="7" cy="2" r="2" fill="#FF0123" />
                           <circle cx="12" cy="2" r="2" fill="#FF0123" />
                           <circle cx="12" cy="7" r="2" fill="#FF0123" />
                           <circle cx="12" cy="12" r="2" fill="#FF0123" />
                           <circle cx="7" cy="7" r="2" fill="#FF0123" />
                           <circle cx="7" cy="12" r="2" fill="#FF0123" />
                           <circle cx="7" cy="17" r="2" fill="#FF0123" />
                           <circle cx="2" cy="7" r="2" fill="#FF0123" />
                           <circle cx="2" cy="12" r="2" fill="#FF0123" />
                        </svg><span>Help Desk :</span>+91 590 088 55
                     </a>
                  </div>
                  <button class="tp-menu-toggle"><i class="far fa-bars"></i></button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- tp-mobile-header-area end -->

   <!-- sidebar-info -->
   <div class="tpsideinfo tp-side-info-area">
      <button class="tpsideinfo__close"><i class="fal fa-times"></i></button>
      <div class="tpsideinfo__logo mb-40">
         <a href="index.php"><img src="assets/img/logo/white-logo.png" alt="logo"></a>
      </div>

      <div class="mobile-menu"></div>

      <div class="tpsideinfo__content mb-60">
         <p class=" d-none d-xl-block">Our mission is to ensure the generation of accurate and precise findings.</p>
         <span>Contact Us</span>
         <a href="#"><i class="fa-solid fa-star"></i>Ta-134/A, Gulshan Badda Link </a>
         <a href="tel:61383766284"><i class="fa-solid fa-star"></i>61 383 766 284</a>
         <a href="https://weblearnbd.net/cdn-cgi/l/email-protection#254b4a574055495c65404b5344514a0b464a48"><i
               class="fa-solid fa-star"></i><span class="__cf_email__"
               data-cfemail="d5bbbaa7b0a5b9ac95b0bba3b4a1bafbb6bab8">[email&#160;protected]</span></a>
      </div>
      <div class="tpsideinfo__content-inputarea mb-60 d-none d-xl-block">
         <span>Get Update</span>
         <div class="tpsideinfo__content-inputarea-input">
            <form action="#">
               <input type="email" placeholder="Enter Mail">
               <button class="tpsideinfo__content-inputarea-input-btn"><i class="fa-solid fa-paper-plane"></i></button>
            </form>
         </div>
      </div>
      <div class="tpsideinfo__gallery mb-35 d-none d-xl-block">
         <span>Cheack Instagram Post</span>
         <div class="tpsideinfo__gallery-item">
            <a href="assets/img/blog/blog-in-01.jpg" class="popup-image"><img src="assets/img/blog/blog-in-01.jpg"
                  alt=""></a>
            <a href="assets/img/blog/blog-in-02.jpg" class="popup-image"><img src="assets/img/blog/blog-in-02.jpg"
                  alt=""></a>
            <a href="assets/img/blog/blog-in-03.jpg" class="popup-image"><img src="assets/img/blog/blog-in-03.jpg"
                  alt=""></a>
         </div>
      </div>
      <div class="tpsideinfo__socialicon">
         <a href="#"><i class="fa-brands fa-youtube"></i></a>
         <a href="#"><i class="fa-brands fa-twitter"></i></a>
         <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
         <a href="#"><i class="fa-brands fa-skype"></i></a>
      </div>
   </div>
   <!-- sidebar-info-end -->

   <div class="body-overlay"></div>

   <!-- main-area -->
   <main>