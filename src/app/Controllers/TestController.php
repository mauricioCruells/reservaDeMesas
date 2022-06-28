<?php

namespace App\Controllers;


use App\View;

class TestController implements Controller
{
    public function processRequest()
    {
        return (new View('test'))->render();
    }
}
