<?php
$store = [
    ['name' => 'Apple',
     'weight' => 45
    ],
    ['name' => 'Grapes',
        'weight' => 8
    ],
    ['name' => 'Strawberries',
        'weight' => 5
    ],
    ['name' => 'Papaya',
        'weight' => 325
    ],
    ['name' => 'Dourian',
        'weight' => 785
    ]
];

function checkWeight( $array,  $key,  $key2)
{
    foreach ($array as $value) {
       if($value[$key] > 10){
           echo "{$value[$key2]} weight is: {$value[$key]}, the shipping costs 2euro. \n";
       } else {
           echo "{$value[$key2]} weight is: {$value[$key]}, the shipping costs 1euro. \n";
       }
    }
}
checkWeight($store, 'weight', 'name');