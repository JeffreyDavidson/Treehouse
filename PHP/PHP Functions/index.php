<?php

function hello() {
    echo "Hello, World!";
}

$current_user = "Mike";
function is_mike() {
    global $current_user;
    if($current_user == "Mike") {
        echo "It is Mike!";
    } else {
        echo "Nope, it is not Mike.";
    }
}

is_mike();

