<?php
$person1 = new stdClass();
$person1->name = 'Gabriela';
$person1->surname = 'Lsi';
$person1->age = 11;

$person2 = new stdClass();
$person2->name = 'Jane';
$person2->surname = 'Lsi';
$person2->age = 21;

function checkAge($object, $key)
{
if ($object->$key > 18)
{
    echo 'Person is atleast 18 years old';
}else{
    echo 'Person is under the age of 18';
}
}
checkAge($person1, 'age');
echo PHP_EOL;
checkAge($person2, 'age');



