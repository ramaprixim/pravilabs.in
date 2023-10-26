<?php 
$title = basename($_SERVER['PHP_SELF']);
switch($title){
    case 'index.php':
        $title = "Reliable Blood Test | Pathology Lab | Diagnostic Centre";
        $description = "Get your full body tests done from Pravilabs, Our Pathology Lab offering a Blood Test Lab & Diagnostic Centre in Navi Mumbai. Book your appointment today";
        $keywords = "Complete Blood Tests, CBC Test, Complete Blood Test, Diagnostic Centre, Blood Test At Home, Liver Profile Test, Blood Examination, Thyroid Test, 
        Lipid Profile Test, Online Blood Test Booking, Blood Check, Pathology Laboratory, Hormone Test, Uric Acid Blood Test, B12 Test Cost, Sugar Check, Healthcare Provider, 
        Blood Test Laboratory Near Me, Diagnostic Centre Near Me, Pathology Near Me, Hemoglobin Test, Fasting Test, Dual Marker Test In Pregnancy, Complete CBC, Vitamin B12 Test, 
        Blood Collection, Overall Body Check Up, Full Body Checkup, Pathologists, Healthcare Professionals, Medical Diagnostics, Home Sample Collection, Obesity Panel";
        break;

    case 'about-us.php':
        $title = "About Us | Diagnostic Centre | Blood Test | Pathology Lab";
        $description = "Get accurate &reliable diagnostics at our leading Diagnostic Centre. We offer a wide range of blood tests & pathology lab services. Book your appointment now";
        $keywords = "Complete Blood Tests, CBC Test, Complete Blood Test, Diagnostic Centre, Blood Test At Home, Liver Profile Test, Blood Examination, Sugar Check, 
        Healthcare Provider, Blood Test Laboratory Near Me, Diagnostic Centre Near Me, Pathology Near Me, Blood Collection, Overall Body Check Up, Full Body Checkup, 
        Pathologists, Healthcare Professionals, Medical Diagnostics, Home Sample Collection, Obesity Panel";
        break;

    case 'add-test.php':
        $title = "";
        $description = "";
        $keywords = "";
       
       break;

    case 'health-packages.php':
        $title = "Full Body Checkup  | Complete Health Checkup Packages";
        $description = "Discover comprehensive health checkup packages at Pravilabs. Contact our blood test and pathology lab for a full body checkup today. Your health matters to us!";
        $keywords = "Full Body Checkup Test, Full Body Checkup Services, Full Body Checkup Packages, Complete Health Checkup Packages, Complete Body Check, Routine Health Checkup, 
        Health Checkup, Blood Sugar, Cholesterol, Kidney, Liver Function, Blood Work, Thyroid Tests, Full Body Checkup Price, Complete Body Checkup, Medical Checkup, Heart Check Up,
        Complete Blood Test At Home, Complete Blood Tests, CBC Test, Complete Blood Test, Diagnostic Centre, Blood Test At Home, Liver Profile Test, Blood Examination, 
        Thyroid Test, Lipid Profile Test, Online Blood Test Booking, Blood Check, Pathology Laboratory, Hormone Test, Uric Acid Blood Test, B12 Test Cost, Sugar Check,
        Healthcare Provider, Blood Test  Hemoglobin Test, Fasting Test, Dual Marker Test In Pregnancy, Complete CBC, Vitamin B12 Test";
        break;
       
    case 'contact-us.php':
        $title = "Contact Us | Pathology Lab | Diagnostic Centre ";
        $description = "Experience reliable and accurate diagnostic services with our Blood Test and Pathology Lab. Contact us now for all your diagnostic needs.";
        $keywords = "Contact Us, Submit a form, Contact With Us, Contact Website, Contact Us Phone, Complete Blood Test, Diagnostic Centre, Full Body Checkup, Full Body Checkup, 
        Pathologists, Healthcare Professionals, Medical Diagnostics, Healthcare Provider, Get in Touch, Submit a form, Contact with us, Contact Form, Contact Website, Contact Us Phone, 
        Contact us for more information, Get in touch with us, Reach out to us";
       
        break;

    case 'test.php':
            $title = "";
            $description = "";
            $keywords = "";
        
            break;    
        
    case 'privacy-policy.php':
        $title = "";
        $description = "";
        $keywords = "";
       
        break;
            
    case 'terms-and-conditions.php':
        $title = "Forex Outsource || Terms and Conditions";
        $description = "";
        $keywords = "";
       
        break;
        
    case 'disclaimer.php':
        $title = "Forex Outsource || Disclaimer";
        $description = "";
        $keywords = "";
        
        break;
    
    default:
        $title = "Title Here";
        break;
}