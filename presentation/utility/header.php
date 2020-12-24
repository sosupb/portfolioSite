<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/autoloader.php";

    session_start();

    if(!isset($_SESSION['counter'])) {
        
        $counter = 0;
        
        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/resources/default/counter.txt", "r")) {
            try {
                $file = fopen($_SERVER['DOCUMENT_ROOT'] . "/resources/default/counter.txt", "r");
                if(is_null($file)){
                    ActivityLogger::warning("Counter file came back NULL!");
                } else {
                    $counter = (int)fread($file,20);
                    fclose($file);
                    $counter++;
                    ActivityLogger::info("Updated unique visit counter to: " . $counter . "!");
                    $file = fopen($_SERVER['DOCUMENT_ROOT'] . "/resources/default/counter.txt", "w");
                    fwrite($file, $counter);
                    fclose($file);
                }
            }
            catch (Exception $e) {
                ActivityLogger::warning("There was a problem while attempting to access unique counter! " . $e->getMessage());
                $counter = 0;
            }
        } else {
            $counter = 1;
            $file = fopen($_SERVER['DOCUMENT_ROOT'] . "/resources/default/counter.txt", "w");
            fwrite($file, $counter);
            fclose($file);
        }
        $_SESSION['counter'] = $counter;
    }

    $navService = new NavBarService();
    $navService = new ActivityLogger($navService);
?>