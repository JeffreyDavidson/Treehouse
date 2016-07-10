<?php

function add_up($a, $b) {
    $arr = array(
        $a,
        $b,
        $a + $b
    );
    return $arr;
}

$value = add_up(2, 4);

echo $value[2];

