<?php
class Presenter
{

    public static function create()
    {
        $numberOfTables = 5;
        //crear array de mesas ya reservadas en db

        $db = new PDO('mysql:host=localhost;dbname=eventReservations', 'root', 'password1234');

        $query = 'SELECT table_id FROM reservations';

        $tablesReserved = $db->query($query)->fetchAll(); // lista de mesas que estan reservadas dentro de base de datos

        return '
        <form action="/create" method="post">
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
                    <select name="tableSelected" id="tableDropdown">' .

            //foreach ($tablesReserved as $row => $tableID) {
            //       if()
            // }
            //para  la cantidad de mesas del evento
            //mostrar solo las que no aparescan en la base de datos
            //borrar     v
            '' . '</select>
                </div>

                <div>
                    <input type="submit" name="submit" value="Reservar Mesa">
                </div>
            </div>
        </form>
        ';
    }

    public static function store() //executed on post request
    {

        // FALTA IMPLEMENTAR ESCRITURA A BASE DE DATOS DE INFO DE RESERVACION

        // FALTA IMPLEMENTAR MOSTRAR MENSAJE DE CONFIRMACION

        // FALTA IMPLEMENTAR VALIDACION DE DATOS DE FORMA

    }
}
