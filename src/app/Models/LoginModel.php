<?php

namespace App\Models;

use \PDO;


class LoginModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function verifyLogin(string $passedUser, string $passedPass)
    {
        $queryuser = 'SELECT userID FROM users 
        WHERE userLogIn = ' . "'" . $passedUser . "'" . 'AND pass = ' . "'" . $passedPass . "'";
        $userID = $this->db->query($queryuser)->fetchAll(PDO::FETCH_COLUMN, 0);

        if (empty($userID)) {
            return 'Usuario no existe';
        } else {
            return $userID[0];
        }
    }
}
