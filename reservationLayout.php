<?php
session_start();
include "Event.php";

$numberOfTables = 5;
$_SESSION["eventSelected"] = $_POST["eventName"];
$events = [];
echo $_SESSION["eventSelected"];
echo $_SESSION["currentEvent"];

//EVENT CREATION

if (empty($events) or !isEventCreated($events, $_SESSION["eventSelected"])) {
    $events[] = new Event($numberOfTables, [$_SESSION["eventSelected"]], count($events));
    $currentEvent = $events[count($events) - 1];
    $_SESSION["currentEvent"] = serialize($currentEvent);
} else {
    $currentEvent = selectEvent($events, $eventName);
    $_SESSION["currentEvent"] = serialize($currentEvent);
}

//RESERVATION PROCESSING
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $tableIDToReserve = $_POST["tableSelected"];

    $currentEvent->updateTable($tableIDToReserve, $name, $lastName, $email);
}

//HELPER FUNCTIONS

function isEventCreated($events, $eventName)
{
    foreach ($events as $checkEvent) {
        if ($eventName == $checkEvent->getEventName()) {
            return true;
        }
    }
    return false;
}


function selectEvent($events, $eventName)
{
    foreach ($events as $checkEvent) {
        if ($eventName == $checkEvent->getEventName()) {
            return $checkEvent;
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de mesa</title>
</head>

<body>
    <div class="header">
        <h1>Sistema de reserva de mesa</h1>
    </div>

    <div class="main">
        <div class="userInfo">
            <form action="./reservationLayout.php" method="post">
                <div>
                    <label for="name">Nombre: </label>
                    <input type="text" name="name" id="name">
                </div>

                <div>
                    <label for="lastName">Apellido: </label>
                    <input type="text" name="lastName" id="lastName">
                </div>

                <div>
                    <label for="email">Correo: </label>
                    <input type="text" name="email" id="email">
                </div>
                <div>
                    <select name="tableSelected" id="tableDropdown">
                        <?php $currentEvent->checkTablesAvailable() ?>
                    </select>
                </div>

                <div>
                    <input type="submit" name="submit" value="Reservar Mesa">
                </div>

            </form>

        </div>

    </div>

</body>

</html>