<?php
// 1. Inserire delle parole all’interno di un array
// 2. controllare che la parola passata dall’utente è presente nell'array.

$words = [
    "casa",
    "gatto",
    "telescopio",
    "termosifone",
    "democrazia"
];

$user_word = $_GET["word"];
$word_in_array = in_array($user_word, $words);

// OK se esiste e KO altrimenti
if ($word_in_array) {
    echo "OK";
} else {
    echo "KO";
}

$random_number = rand(1, 10);
echo "<br>" . $random_number;

?>