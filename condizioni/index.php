<?php
$number = 10;

if ($number === 5) {
    echo "Il numero è 5";
} elseif ($number === 2) {
    echo "Il numero è 2";
} else {
    echo "Il numero non è 5 e neanche 2";
}

$number += 2;

var_dump($number);

$name = "Olga";
$name .= " Demina";
var_dump($name);

?>