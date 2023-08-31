<?php

class ConfigDb {

    protected $dbHost = 'localhost';
    protected $dbUsername = 'root';
    protected $dbPassword = '';
    protected $dbName = 'korisnici_db';

    public function getDbHost() {
        return $this->dbHost;
    }

    public function getDbUsername() {
        return $this->dbUsername;
    }

    public function getDbPassword() {
        return $this->dbPassword;
    }

    public function getDbName() {
        return $this->dbName;
    }
}

?>