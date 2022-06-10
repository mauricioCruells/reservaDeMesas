<?php
require 'Table.php';

class Event
{
    private $tables = [];

    public function __construct($numberOfTables)
    {
        $this->createTables($numberOfTables);
    }

    public function checkTablesAvailable()
    {
        foreach ($this->tables as $table) {
            if (!$table->getIsReserved()) {
                echo '<option value=' . $table->getTableID() . '>' . 'Mesa ' . strval($table->getTableID()) .  '</option>';
            }
        }
    }

    public function updateTable($tableID, $name, $lastName, $email)
    {
        $this->tables[$tableID]->createReservation($name, $lastName, $email);
    }

    private function createTables($numberOfTables)
    {
        for ($i = 1; $i <= $numberOfTables; $i++) {
            $this->tables[$i] = new Table($i);
        }
    }
}
