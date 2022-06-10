<?php

class Reservation
{
    private $name;
    private $lastName;
    private $email;

    public function __construct($name, $lastName, $email)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
