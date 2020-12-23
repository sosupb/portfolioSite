<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/autoloader.php";

    session_start();

    if(isset($_SESSION['visited'])) {
    
    } else {
        $_SESSION['visited'] =  1;
    }

    $navService = new NavBarService();
    $navService = new ActivityLogger($navService);
?>