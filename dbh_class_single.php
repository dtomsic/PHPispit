<?php

// require_once 'config_class.php';

class Databaseconnection extends ConfigDb{

    private static $instance;
    private $conn;

    

    private function __construct($dbHost,$dbName, $dbUsername, $dbPassword, ) {
        
        $this->conn=null;    
        $this->conn=new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName,$this->dbUsername, $this->dbPassword);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if ($this->conn=null) {
            die("Neuspjelo spajanje na bazu: " . $this->conn->connect_error);
        }
        else {
            echo "Uspješno spajanje na bazu!";
        }
    }

    public static function getInstance($dbHost, $dbUsername, $dbPassword, $dbName) {
        if (!self::$instance) {
            self::$instance = new self($dbHost, $dbUsername, $dbPassword, $dbName);
        }
        return self::$instance;
    }

    public function getConnection()
    {          
        return $this->conn;
    }

    
}



?>