<?php

// include (__DIR__ . '\autoloader.php');


include_once(__DIR__ . '\config_class.php');
include_once(__DIR__ . '\dbh_class_single.php');


$config = new ConfigDb();
$dbHost = $config->getDbHost();
$dbUsername = $config->getDbUsername();
$dbPassword = $config->getDbPassword();
$dbName = $config->getDbName();

// Dohvatiti instance veze s bazom
$dbConnection=Databaseconnection::getInstance($dbHost, $dbUsername, $dbPassword, $dbName);
$conn=$dbConnection->getConnection($dbHost, $dbUsername, $dbPassword, $dbName);


?>
