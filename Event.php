<?php
require 'Table.php';

class Event
{
    private $tables = [];
    private $eventName = "";
    private $eventID;

    public function __construct($numberOfTables, $eventName, $eventID)
    {
        $this->createTables($numberOfTables);
        $this->eventName = $eventName;
        $this->eventID = $eventID;
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

    public function getEventName()
    {
        return $this->eventName;
    }

    public function getEventID()
    {
        return $this->enventID;
    }
}
