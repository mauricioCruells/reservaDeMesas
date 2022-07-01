<?php

namespace App\Controllers;

session_start();

use App\Views\StaticView;
use App\Models\LoginModel;
use App\Models\ConcertModel;
use App\Controllers\TableSelectionController;

class LoginController implements Controller
{
    public function processRequest()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'GET' and !isset($_SESSION['userID'])) {
            return $this->notLoggedIn();
        } elseif (!isset($_SESSION['userID'])) {
            return $this->login();
        } else {
            (new TableSelectionController)->processRequest();
        }
    }


    public function notLoggedIn()
    {

        return StaticView::make(
            "generalLayout",
            ["main" => StaticView::make("login")]
        );
    }

    public function login()
    {
        $userID = (new LoginModel())->verifyLogin($_POST['userLogIn'], $_POST['pass']);

        $_SESSION['userID'] = $userID;

        if ($userID == 'Usuario no existe') {
            return
                StaticView::make(
                    "generalLayout",
                    ["main" => StaticView::make("loginFailed")]
                );
        } else {

            return StaticView::make(
                "generalLayout",
                ["main" => StaticView::make("loginSucessful")]
            );
        }
    }
}
