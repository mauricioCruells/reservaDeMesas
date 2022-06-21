<?php

class databaseSingleton
{
    private static $database = null;
    private $databasePDO;

    private $host = "localhost";
    private $user = "root";
    private $pass = "password1234";
    private $name = "eventReservations";


    private function __construct()
    {
        $this->databasePDO = new PDO(
            "mysql:host=$this->host;dbname=$this->name",
            $this->user,
            $this->pass
        );
    }

    public static function getInstance()
    {
        if (self::$database == null) {
            self::$database = new databaseSingleton();
        }

        return self::$database;
    }

    public function getDatabasePDO()
    {
        return $this->databasePDO;
    }
}
