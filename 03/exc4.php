<?php
$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
//var_dump($items);
echo "{$items[0][1][name]} {$items[0][1][surname]} {$items[0][1][age]}";
echo PHP_EOL;