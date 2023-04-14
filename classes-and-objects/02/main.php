<?php
require_once 'Points.php';

$p1 = new Points(5, 2);
$p2 = new Points(-3, 6);
$p1->swapPoints($p1, $p2);

echo "(" . $p1->x . ", " . $p1->y . ")";
echo "(" . $p2->x . ", " . $p2->y . ")";