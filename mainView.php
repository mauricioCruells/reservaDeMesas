<?php
require 'Event.php';

$mainEvent = new Event(20);

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
            <form action="./submitHandler.php">
                <div>
                    <label for="name"></label>
                    <input type="text" name="name" id="name">
                </div>

                <div>
                    <label for="lastName"></label>
                    <input type="text" name="lastName" id="lastName">
                </div>

                <div>
                    <label for="email"></label>
                    <input type="text" name="email" id="email">
                </div>

                <div>
                    <input type="submit" value="Reservar Mesa">
                </div>

                <div>
                    <select name="tableSelected" id="tableDropdown">
                        <?php $mainEvent->checkTablesAvailable() ?>
                    </select>
                </div>
            </form>
        </div>


    </div>

</body>

</html>