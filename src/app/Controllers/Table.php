<?php

require_once './Classes/TableHandler.php';

class Table
{

    public static function selectTable()
    {
        $databaseInfo = 'mysql:host=localhost;dbname=eventReservations';
        $user = 'root';
        $password = 'password1234';


        $tableHandler = new TableHandler($databaseInfo, $user, $password);
        $availableTableOptions = $tableHandler->executeSQL([]);


        return //view  ->>> tableSelection.php
    }
}
