<?php 
if(isset($_POST['email'])) {
 
    
    $email_to = "khushbu.prixim@gmail.com";
    
    $email_subject = "Get In Touch";
 
    function died($error) {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    if(!isset($_POST['name']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['email']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 

     
    $name = $_POST['name']; 
    $phone = $_POST['phone']; 
    $email_from = $_POST['email']; 
    $subject = $_POST['subject']; 
    $comments = $_POST['message']; 
    $ip = $_SERVER['REMOTE_ADDR']; 

    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "Senders IP: ".clean_string($ip)."\n\n"; 
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Suject: ".clean_string($subject)."\n";
    $email_message .= "Message: ".clean_string($comments)."\n";
    
      
    
$headers = 'From: noreply@pravilabs.in'."\r\n";
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();

if (@mail($email_to, $email_subject, $email_message, $headers))
	  {
         ?>
    	<script language="javascript" type="text/javascript">
    		alert('Thank you for the message. We will contact you shortly.');
    		window.location = 'index.php';
    	</script>
    <?php
    }
    else { ?>
    	<script language="javascript" type="text/javascript">
    		alert('Message failed. Please, send an email to  care@pravilabs.in');
    		window.location = history.back();
    	</script>
    <?php
    }
   }
?>

<?php $page="contact-us"; include("header.php") ?>       
<main>
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
                        <span>PRAVILABS: <a href="blog-details.html"> CONTACT US</a></span>
                     </div>
                  </div>
               </div>
            </div>
         </section>
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
                              <span>Shop 1, JN2, Jai Maharashtra Apartment, Near Mini Market, Vashi, Navi Mumbai - 400703</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-8 col-md-7 col-12">
                     <div class="contactform wow fadeInRight" data-wow-delay=".4s">
                        <h4 class="contactform__title mb-35">Drop Your Details Below</h4>
                        <div class="contactform__list mb-60">
                           <form action=" " method="post">
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="contactform__input mb-30">
                                       <input name="name" type="text" placeholder="Enter your Name*" required>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="contactform__input mb-30">
                                       <input name="email" type="email" placeholder="Enter your mail*" required>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="contactform__input mb-30">
                                       <input name="phone" type="text" placeholder="Enter your number*" required>
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
                                       <button type="submit" name="submit" value="submit" class="tp-btn">Send Massage</button>
                                    </div>
                                   
                                 </div>
                              </div>
                           </form>
                        </div>
                     
                     </div>
                  </div>
               </div>
            </div>
         </section>
</main>
<?php include("footer.php"); ?>