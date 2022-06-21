<?php

abstract class DatabaseHandler
{
    public $databaseConnection;

    public function __construct($databaseInfo, $user, $password)
    {
        $this->databaseConnection = new PDO($databaseInfo, $user, $password);
    }

    abstract public function executeSQL(array $params);
}
