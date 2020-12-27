<?php

/**
 * This file is called before the contact page to check for form submissions 
 */

require_once $_SERVER['DOCUMENT_ROOT'] . "/autoloader.php";
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

if($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $message = "From: " . $_POST['name'] . "\nEmail: " . $_POST['email'] . "\nMessage: " . $_POST['message'];
    $message = wordwrap($message, 70);
    
    $results = false;
    
    $mailer = new PHPMailer();
    
    $mailer->IsSMTP();
    $mailer->Mailer = "smtp";
    
    $mailer->SMTPDebug  = 1;
    $mailer->SMTPAuth   = TRUE;
    $mailer->SMTPSecure = "ssl";
    $mailer->Port       = 587;
    $mailer->Host       = "smtp.gmail.com";
    $mailer->Username   = getenv('MAIN_EMAIL');
    $mailer->Password   = getenv('MAIN_EMAIL_PASSWORD');
    
    $mailer->IsHTML(true);
    $mailer->AddAddress(getenv('SECONDARY_EMAIL'), "Marc Teixeira");
    $mailer->SetFrom($_POST['email'], $_POST['name']);
    $mailer->Subject = "Website Contact Email From: " . $_POST['name'];
    $content = $message;
    
    try {        
        $mailer->MsgHTML($content);
        $results = $mailer->Send();
    }
    catch(Exception $e) {
        $results = false;
        var_dump($mailer);
        ActivityLogger::warning("There was a problem while emailing: " . $e->getMessage());    
    }
    
    if($results) {
        ActivityLogger::info("Email was sent from contact page!");
        header("Location: /presentation/pages/ContactSuccessPage.php");
    } else {
        var_dump($mailer);
        ActivityLogger::warning("Could not send email!");  
    }
}