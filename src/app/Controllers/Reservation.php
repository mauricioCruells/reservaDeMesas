<?php
require_once './Classes/ReservationHandler.php';

class Reservation
{
    public static function processReservation()
    {
        $databaseInfo = 'mysql:host=localhost;dbname=eventReservations';
        $user = 'root';
        $password = 'password1234';


        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $tableID = $_POST['tableSelected'];
        $eventID = 1;

        if ($name == "" or $lastName == "" or $email == "") {

            return '<h1>ERROR debe ingresar sus datos</h1>
            <a href="/reservaDeMesas">Regresar</a>';
        } else {

            $reservationHandler = new ReservationHandler($databaseInfo, $user, $password);
            $reservationHandler->executeSQL([
                $name,
                $lastName,
                $email,
                $tableID,
                $eventID
            ]);

            return '<h1>mesa <?php $tableID ?> reservada!</h1>
                <a href="/reservaDeMesas">Regresar</a>';
        }
    }
}
