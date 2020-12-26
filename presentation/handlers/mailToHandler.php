<?php

/**
 * This file is called before the contact page to check for form submissions 
 */

require_once $_SERVER['DOCUMENT_ROOT'] . "/autoloader.php";
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Mailgun\Mailgun;
use Mailgun\HttpClient\HttpClientConfigurator;

if($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $message = "From: " . $_POST['name'] . "\nEmail: " . $_POST['email'] . "\nMessage: " . $_POST['message'];
    $message = wordwrap($message, 70);
    
    $results = false;
    
    try {
        $httpClient = new HttpClientConfigurator();
        $httpClient->setApiKey('04a9c293ecb17f6b5dce7d96fdc09f00-b6190e87-2f09670a');
        $mgClient = new Mailgun($httpClient);
        $domain = "https://api.mailgun.net/v3/sandbox73434ced47974576958f2c94c24fdc54.mailgun.org";
        
        $results = $mgClient->sendMessage($domain, array(
            'from' => $_POST['name'] . " <mailgun@https://api.mailgun.net/v3/sandbox73434ced47974576958f2c94c24fdc54.mailgun.org>",
            'to'   => "sosupb@gmail.com",
            'subject' => "Webstie Contact From: " . $_POST['name'], 
            'text' => $message));
    }
    catch(Exception $e) {
        $results = false;
        ActivityLogger::warning("There was a problem while emailing: " . $e->getMessage());    
    }
    
    if($results) {
        ActivityLogger::info("Email was sent from contact page!");
        header("Location: /presentation/pages/ContactSuccessPage.php");
    } else {
        ActivityLogger::warning("Could not send email!");  
    }
}