<?php

$iceCream = array(
    'Jeffrey' => 'Chocolate Chip Cookie Dough',
    'Jenna' => 'Vanilla Bean',
    'Cassandra' => 'Rocky Road',
    'David' => 'Strawberry'
);

$iceCream['jeffrey'] = 'Chocolate';
$iceCream['David'] = 'Pistachio';
$iceCream[] = 'Vanilla';
$iceCream['Andrew'] = true;
var_dump($iceCream);

$keys = array(
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
);

//var_dump($keys);
?>
