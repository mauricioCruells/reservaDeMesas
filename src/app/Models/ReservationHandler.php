<?php

require_once './Classes/DatabaseHandler.php';

class ReservationHandler extends DatabaseHandler
{
    public function executeSQL($params)
    {

        $reservationStatement = $this->databaseConnection->prepare(
            'INSERT INTO reservations (name, last_name, email, table_id, event_id) VALUES (?,?,?,?,?)'
        );

        $reservationStatement->execute([
            $params[0],
            $params[1],
            $params[2],
            $params[3],
            $params[4]
        ]);
    }
}
