<form action="/reservaDeMesas/" method="post">
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
        <select name="tableSelected" id="tableDropdown">' . $availableTableOptions . '</select>
    </div>

    <div>
        <input type="submit" name="submit" value="Reservar Mesa">
    </div>
    </div>
</form>