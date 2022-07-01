<?php

namespace App\Models;

use \PDO;

class ConcertModel extends Model
{

    public function __construct(/*we can pass other models here to acess their methods within this model, like a submodel*/)
    {
        parent::__construct(); // to allow this class to access DB connection
    }

    public function readConcertsAvailable()
    {

        $query = 'SELECT eventName FROM concerts WHERE isFull = 0 ORDER BY eventName';

        $availableConcerts = $this->db->query($query)->fetchAll(PDO::FETCH_COLUMN, 0);

        return $availableConcerts;
    }
}
