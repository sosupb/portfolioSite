<?php

require_once getcwd() . "/businessServices/logger/AbstractActivityLogger.php";
require_once getcwd() . "/businessServices/logger/ActivityLogger.php";

/**
 * autoloader.php
 * This file adds all of the required class dependencies when set as required.
 */

spl_autoload_register(function($class){
    
    // get the difference in folders between location of autoloader and the file that callled it
    $lastDirectories = substr(getcwd(), strlen(__DIR__));
    ActivityLogger::info("Called autoloader from: " . getcwd() . ", Calling class was :" . $class);
    
    //convert lastDirectories as needed
    $lastDirectories = str_replace('\\', '/', $lastDirectories);
    
    // count number of slashes (folder depth)
    $numberOfLastDirectories = substr_count($lastDirectories, '/');
    
    // echo "number of directories different : " . $numberOfLastDirectories . "<br>";
    
    // list of possible locations that classes are found in this project
    $directories = ['businessServices', 'businessServices/models', 'businessServices/logger', 'presentation/Layouts', 'presentation/pages', 'presentation/utility', 'resources/default/img', 'resources/default/css'];
    
    foreach($directories as $d){
        $currentDirectory = $d;
        for ($x = 0; $x < $numberOfLastDirectories; $x++){
            $currentDirectory = "../" . $currentDirectory;
        }
        $classfile = $currentDirectory . '/' . $class . '.php';
        if(is_readable($classfile)){
            ActivityLogger::info("Found class! Attempting to load classfile: " . $classfile);
            if(require $d . '/' . $class . '.php'){
                ActivityLogger::info("Class loaded: " . $class);
                break;
            }
        }
    }
});