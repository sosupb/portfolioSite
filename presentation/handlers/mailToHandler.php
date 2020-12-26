<?php

/**
 * This file is called before the contact page to check for form submissions 
 */

require_once $_SERVER['DOCUMENT_ROOT'] . "/autoloader.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $message = "From: " . $_POST['name'] . "\nEmail: " . $_POST['email'] . "\nMessage: " . $_POST['message'];
    $essage = wordwrap($message, 70);
    
    mail("sosupb@gmail.com", "Webstie Contact From: " . $_POST['name'], $message);
    header("Location: /presentation/pages/ContactSuccessPage.php");
}