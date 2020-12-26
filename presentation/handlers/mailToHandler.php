<?php

/**
 * This file is called before the contact page to check for form submissions 
 */

require_once $_SERVER['DOCUMENT_ROOT'] . "/autoloader.php";
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Mailgun\Mailgun;

if($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $message = "From: " . $_POST['name'] . "\nEmail: " . $_POST['email'] . "\nMessage: " . $_POST['message'];
    $message = wordwrap($message, 70);
    
    $results = false;
    
    try {
        $mgClient = Mailgun::create(getenv('MAILGUN_API_KEY'));
        $domain = getenv('MAILGUN_DOMAIN');
        
        $results = $mgClient->messages()->send($domain, array(
            'from' => getenv('HEROKU_EMAIL'),
            'to'   => getenv('MAIN_EMAIL'),
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