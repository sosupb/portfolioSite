<?php
    require_once __DIR__ . "/autoloader.php";

    session_start();

    if(isset($_SESSION['visited'])) {
    
    } else {
        $_SESSION['visited'] =  1;
    }

    $navService = new NavBarService();
    $navService = new ActivityLogger($navService);
?>