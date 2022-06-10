<?php
/*
    Class table handles Reservation object creation, modifing status of table when reserved and storing table ID.
    
    It's called from Event class when a reservation is requested from the html page.
*/

require 'Reservation.php';

class Table
{
    private $tableID;
    private $isReserved;
    private $reservation;

    public function __construct(int $tableID)
    {
        $this->isReserved = false; // table is not reserved when created
        $this->tableID = $tableID;
    }

    public function createReservation($name, $lastName, $email) // reservation process
    {
        $this->reservation = new Reservation($name, $lastName, $email);
        $this->reserveTable();
        echo $this->showConfirmationMessage();
    }

    public function reserveTable() // changes status of table to reserved
    {
        $this->isReserved = true;
    }

    public function showConfirmationMessage() // output to html page when reserved
    {
        return "Reserva para mesa: " . $this->getTableID() . " completa!";
    }

    public function getTableID()
    {
        return $this->tableID;
    }

    public function getIsReserved()
    {
        return $this->isReserved;
    }
}
