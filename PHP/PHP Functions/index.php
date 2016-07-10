<?php

$name = 'Jeffrey';

$greet = function()  use($name) {
    echo "Hello $name!";
};

$greet();