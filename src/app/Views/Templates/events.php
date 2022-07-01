<?php

$concertsTemplate = '';

foreach ($concertsAvailable as $index => $concert) {

    $movedIndex = $index + 1;

    $concertsTemplate = $concertsTemplate .
        "
    <div>
    <a href='/concert" . (string) $movedIndex . "'>
        <h3>" . $concertsAvailable[$index] . "</h3>
    </a>
    </div>
    ";
}

echo $concertsTemplate;
