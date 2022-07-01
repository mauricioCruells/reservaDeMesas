<?php

$options = '';

foreach ($tablesAvailable as $table) {
    $options = $options . '<option value=' . strval($table) . '>' . 'Mesa ' . strval($table) .  '</option>';
}

echo ('
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
                    <select name="tableSelected" id="tableDropdown">' . $options . '
                    </select>
                </div>

                <div>
                    <input type="submit" name="submit" value="Reservar Mesa">
                </div>
');
