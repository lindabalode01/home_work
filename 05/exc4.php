<?php
$allPersons = [
    [
        "name" => 'Lea',
        "surname" => 'Fall',
        "age" => 11
    ],
    [
        "name" => 'True',
        "surname" => 'Fall',
        "age" => 51
    ],
    [
        "name" => 'Mia',
        "surname" => 'Fall',
        "age" => 1
    ],
    [
        "name" => 'Lilly',
        "surname" => 'Fall',
        "age" => 24
    ]
];
function checkAge($object, $key)
{
    for($i = 0; $i < count($object); $i++) {
        if ($object[$i][$key] > 18) {
            echo "Person is at least 18 years old \n";
        } else {
            echo "Person is under the age of 18 \n";
        }
    }
}
checkAge($allPersons, age);

