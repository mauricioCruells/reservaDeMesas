<?php
session_start();
include "Event.php";

$currentEvent = unserialize($_SESSION["currentEvent"]);

$name = $_POST["name"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$tableIDToReserve = $_POST["tableSelected"];

$currentEvent->updateTable($tableIDToReserve, $name, $lastName, $email);
