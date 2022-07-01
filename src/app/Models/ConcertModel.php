<?php

namespace App\Models;

use \PDO;

class ConcertModel extends Model
{

    public function __construct()
    {
        parent::__construct(); // to allow this class to access DB connection
    }

    public function readConcertsAvailable()
    {

        $query = 'SELECT eventName FROM concerts WHERE isFull = 0 ORDER BY eventName';

        $availableConcerts = $this->db->query($query)->fetchAll(PDO::FETCH_COLUMN, 0);

        return $availableConcerts;
    }

    public function getConcertIDFromURI(string $uri)
    {
        $parsedURI = 'Concierto ' . substr($uri, -1);

        $query = 'SELECT concertID FROM concerts WHERE eventName = ' . "'" . $parsedURI . "'";

        return $this->db->query($query)->fetchAll(PDO::FETCH_COLUMN, 0);
    }
}
