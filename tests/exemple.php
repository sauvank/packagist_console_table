<?php

use ConsoleTable\Table;
use ConsoleTable\Readline;

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

$columns = [
    [
        'name' => 'title',
        'size' => 30
    ],
    [
        'name' => 'release',
        'size' => 10
    ],
    [
        'name' => 'release',
        'size' => 10
    ]
];

$lines = [];
for ($i = 0; $i <= 9; $i++){
    $lines[] = [
        uniqid("E"),
        uniqid("R"),
        uniqid("N")
    ];
}

$conf = [
    'margin' => 1, // Default 1
    'showNumberRow' => true, // Default true
];
$pt = new Table($columns, $lines, $conf);

//$readline= new Readline("line to show", ['y', 'n']);
//$readline = new Readline("line to show :", range(1, count($lines)));

$pt->show(); // Show all row
//$pt->showRow($readline->getAnswer()); // Show one specific row
