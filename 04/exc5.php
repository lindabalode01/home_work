<?php
$persons = [
    [
        "name" => 'Lea',
        "surname" => 'Mon',
        "age" => 22,
        "day_of_birth" => '12 Sep 1998'
    ],
    [
        "name" => 'Julj',
        "surname" => 'Kat',
        "age" => 12,
        "day_of_birth" => '128 Sep 2010'
        ],
    [
        "name" => 'Bella',
        "surname" => 'Bob',
        "age" => 42,
        "day_of_birth" => '12 Aug 1980'
    ]
];
foreach ($persons as $person){
    echo "{$person['name']} {$person['surname']} {$person['age']} {$person['day_of_birth']}";
    echo PHP_EOL;
}
