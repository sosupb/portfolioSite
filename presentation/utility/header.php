<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/autoloader.php";

    session_start();

    if(!isset($_SESSION['counter'])) {
        $file = fopen("counter.txt", "r");
        if(is_null($file)){
            ActivityLogger::warning("Could not open file for counter!");
        } else {
            $counter = (int)fread($file,20);
            fclose($file);
            $counter++;
            ActivityLogger::info("Updated unique visit sounter to: " . $counter . "!");
            $file = fopen("counter.txt", "w");
            fwrite($file, $counter);
            fclose($file);
            $_SESSION['counter'] = $counter;
        }
    }

    $navService = new NavBarService();
    $navService = new ActivityLogger($navService);
?>