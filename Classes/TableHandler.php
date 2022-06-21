<?php

require_once './Classes/DatabaseHandler.php';

class TableHandler extends DatabaseHandler
{
    public function executeSQL($params)
    {
        $numberOfTables = 5;

        $query = 'SELECT table_id FROM reservations WHERE event_id = 1';

        $tablesReserved = $this->databaseConnection->query($query)->fetchAll(PDO::FETCH_COLUMN, 0);

        $availableTableOptions = '';

        for ($tableNumber = 1; $tableNumber <= $numberOfTables; $tableNumber++) {
            if (!in_array($tableNumber, $tablesReserved)) {
                $availableTableOptions = $availableTableOptions . '<option value=' . $tableNumber . '>' . 'Mesa ' . strval($tableNumber) .  '</option> \n';
            }
        }

        return $availableTableOptions;
    }
}
