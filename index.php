<?php
session_start();
include "Event.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
</head>

<body>
    <div class="event">
        <img src="" alt="artist 1">
        <p>Concierto 1</p>
        <form action="./reservationLayout.php" method="post">
            <input type="hidden" name="eventName" valUe="artist1">
            <input type="submit" value="ver disponibilidad">
        </form>
    </div>

    <div class="event">
        <img src="" alt="artist 2">
        <p>Concierto 2</p>
        <form action="./reservationLayout.php" method="post">
            <input type="hidden" name="eventName" value="artist2">
            <input type="submit" value="ver disponibilidad">
        </form>
    </div>
</body>

</html>