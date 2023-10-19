<?php $page="contact-us"; include("header.php") ?>       
      <!-- main-area -->
      <main>

         <!-- breadcrumb-area -->
         <section class="breadcrumb__area pt-100 pb-120 breadcrumb__overlay" data-background="assets/img/banner/breadcrumb-01.jpg">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-6 col-md-7 col-12">
                     <div class="tp-breadcrumb">
                        <h2 class="tp-breadcrumb__title">Get In Touch</h2>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-5 col-12">
                     <div class="tp-breadcrumb__link d-flex align-items-center">
                        <span>Bioxlab : <a href="blog-details.html"> Blog Details</a></span>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb-area-end -->
         
         <!-- contact-area -->
         <section class="contact-area pt-130 pb-115">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-md-5 col-12 wow fadeInLeft" data-wow-delay=".4s">
                     <div class="tpcontact mr-60 mb-60 wow fadeInUp" data-wow-delay=".2s">
                        <div class="tpcontact__item text-center">
                           <div class="tpcontact__icon mb-20">
                              <img src="assets/img/mail.png" alt="">
                           </div>
                           <div class="tpcontact__address">
                              <h4 class="tpcontact__title mb-15">Mail us on</h4>
                              <span><a href="mailto:care@pravilabs.in">care@pravilabs.in</a></span>
                           </div>
                        </div>
                     </div>
                     <div class="tpcontact mr-60 mb-60 wow fadeInUp" data-wow-delay=".4s">
                        <div class="tpcontact__item text-center">
                           <div class="tpcontact__icon mb-20">
                              <img src="assets/img/smartphone-call.png" alt="">
                           </div>
                           <div class="tpcontact__address">
                              <h4 class="tpcontact__title mb-15">Call us on</h4>
                              <span><a href="tel:+91 9137655589">+91 9137655589</a></span>
                           </div>
                        </div>
                     </div>
                     <div class="tpcontact mr-60 mb-60 wow fadeInUp" data-wow-delay=".6s">
                        <div class="tpcontact__item text-center">
                           <div class="tpcontact__icon mb-20">
                              <img src="assets/img/location.png" alt="">
                           </div>
                           <div class="tpcontact__address">
                              <h4 class="tpcontact__title mb-15">Locate us</h4>
                              <span>Shop 1, JN2, Jai Maharashtra 
Apartment, Near Mini Market, Vashi, 
Navi Mumbai - 400703</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-8 col-md-7 col-12">
                     <div class="contactform wow fadeInRight" data-wow-delay=".4s">
                        <h4 class="contactform__title mb-35">Drop Your Details Below</h4>
                        <div class="contactform__list mb-60">
                           <form id="contact-form" action="https://weblearnbd.net/tphtml/bioxlab/bioxlab/assets/mail.php" method="post">
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="contactform__input mb-30">
                                       <input name="name" type="text" placeholder="Enter your Name">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="contactform__input mb-30">
                                       <input name="email" type="email" placeholder="Enter your mail">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="contactform__input mb-30">
                                       <input name="number" type="text" placeholder="Enter your number">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="contactform__input mb-30">
                                       <input name="subject" type="text" placeholder="Enter your subject">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="contactform__input mb-30">
                                       <textarea name="message" placeholder="Type your message"></textarea>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="contactform__input mb-30-btn">
                                       <button type="submit" class="tp-btn">Send Massage</button>
                                    </div>
                                    <p class="ajax-response"></p>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="tpcontactmap">
                                 <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d56215.718841453985!2d-0.19959027821222705!3d51.48739183082915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1slondon%20eye!5e0!3m2!1sen!2sbd!4v1656749326947!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- contact-area-end -->

      </main>
      


     <?php include("footer.php"); ?>