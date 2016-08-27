<?php

$a = 0;
$b = 5;

if ($a == $b) {
    echo ' values are equal ';
}  elseif ($a < $b) {
    echo ' $a is less than $b ';
} elseif ($a > $b) {
    echo ' $a is greater than $b ';
} else {
    echo ' values are NOT equal ';
}

$score = 30;
if ($score >= 59) {
    echo 'You completed the level!';
} elseif ($score <= 30) {
    echo 'You should practice some more before trying this level again.';
} else {
    echo 'Please try again';
}

?>
