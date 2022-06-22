<?php
$x = 3;

function add_five(&$x) {
    $x += 5;
    echo $x . "<br>";
}

add_five($x);
echo $x . "<br>";