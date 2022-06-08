<?php
// Array con le chiavi numeriche
$names = ["Federico", "Luca", "Daniele", "Carlo", "Sara"];
var_dump($names);
var_dump($names[2]);

// Per aggiungere un alemento alla fine dell'array
$names[] = "Davide";
var_dump($names);

// Array associativo
$student = [
    "name" => "Mario",
    "lastname" => "Rossi",
    "age" => 34
];

$student["vote_average"] = 9;

var_dump($student);
var_dump($student["name"]);

$students_array = [
    [
        "name" => "Mario",
        "lastname" => "Rossi",
        "age" => 34,
        "votes" => [3,5,7]
    ],
    [
        "name" => "Giovanni",
        "lastname" => "Neri",
        "age" => 24
    ],
];

$lorenzo = [
    "name" => "Lorenzo",
    "lastname" => "Bianchi",
    "age" => 21
];


$students_array[] = $lorenzo;

var_dump($students_array);
var_dump($students_array[1]["lastname"]);


var_dump(array_key_exists("vote", $lorenzo));