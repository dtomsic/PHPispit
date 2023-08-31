<?php

spl_autoload_register('myAutoloader');

function myAutoLoader($className)
{
    $path = "";
    $extension = ".php";
    $fullPath = $path . $className . $extension;

    if (!file_exists($fullPath)){
        return false;
    }
    /*
    else {
        echo "Datoteka: ".$fullPath." postoji!";
    }
    */
    include_once $fullPath;
}

?>

