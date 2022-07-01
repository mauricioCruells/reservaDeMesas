<?php

namespace App\Controllers;

use App\Models\ConcertModel;
use App\Views\StaticView;

use App\Models\TableModel;

class TableSelectionController implements Controller
{
    public function processRequest()
    {

        $tablesAvailable = (new TableModel(new ConcertModel()))->readTablesAvailable();


        return StaticView::make(
            "generalLayout",
            ["main" => StaticView::make("tables", ["tablesAvailable" => $tablesAvailable])]
        );
    }
}
