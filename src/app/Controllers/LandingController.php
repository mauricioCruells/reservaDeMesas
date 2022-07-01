<?php

namespace App\Controllers;


use App\Views\StaticView;
use App\App;
use App\Models\ConcertModel;

class LandingController implements Controller
{
    public function processRequest()
    {

        $concertsAvailable = (new ConcertModel())->readConcertsAvailable();


        return StaticView::make(
            "generalLayout",
            ["events" => StaticView::make("events", ["concertsAvailable" => $concertsAvailable])]
        );
    }
}
