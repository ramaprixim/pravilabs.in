<?php 
$title = basename($_SERVER['PHP_SELF']);
switch($title){
    case 'index.php':
        $title = "";
        $description = "";
        $keywords = "";
        "https://pravilabs.in";
       break;
       
    case 'contact-us.php':
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