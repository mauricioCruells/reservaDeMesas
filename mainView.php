<?php
require 'Event.php';

$tableNumber = 5;
$mainEvent = new Event($tableNumber);

if (isset($_GET["submit"])) {
    $name = $_GET["name"];
    $lastName = $_GET["lastName"];
    $email = $_GET["email"];
    $tableIDToReserve = $_GET["tableSelected"];

    $mainEvent->updateTable($tableIDToReserve, $name, $lastName, $email);
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
            <form action="./mainView.php" method="get">
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
                        <?php $mainEvent->checkTablesAvailable() ?>
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