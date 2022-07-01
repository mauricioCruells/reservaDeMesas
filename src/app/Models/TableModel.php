<?php

namespace App\Models;

use \PDO;
use App\Models\ConcertModel;

class TableModel extends Model
{

    public function __construct(protected ConcertModel $concert)
    {
        parent::__construct(); // to allow this class to access DB connection
    }

    public function readTablesAvailable()
    {

        //$parsedURI = 'concert' . substr($_SERVER['REQUEST_URI'], -1);

        $concertID = $this->concert->getConcertIDFromURI($_SERVER['REQUEST_URI']);

        $query =
            "SELECT tableNumber 
            FROM concertTables 
            WHERE isReserved = 0 AND concertID = " . "'" . $concertID[0] . "'" . " ORDER BY tableNumber";

        $availableTables = $this->db->query($query)->fetchAll(PDO::FETCH_COLUMN, 0);


        return $availableTables;
    }
}
