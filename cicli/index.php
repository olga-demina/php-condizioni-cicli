<?php
for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}

$students_array = [
    [
        "name" => "Mario",
        "lastname" => "Rossi",
        "age" => 34,
        "votes" => [3, 5, 7]
    ],
    [
        "name" => "Giovanni",
        "lastname" => "Neri",
        "age" => 24
    ],
];

// for ($i = 0; $i < count($students_array); $i++) {
//     $current_student = $students_array[$i];
//     var_dump($current_student);
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        <?php for ($i = 0; $i < count($students_array); $i++) {
            $current_student = $students_array[$i];
            // var_dump($current_student);
            // die();
        ?>
            <li>
                <h2>Stundente:
                    <?php echo $current_student["name"]; ?>
                    <?php echo $current_student["lastname"]; ?>
                </h2>
                <h3>Età:
                    <?php echo $current_student["age"]; ?>
                </h3>
            </li>
        <?php } ?>


        <?php
        // Versione con un unico echo
        for ($i = 0; $i < count($students_array); $i++) {
            $current_student = $students_array[$i];
            echo "<li><h2>Studente " . $current_student["name"] . " " . $current_student["lastname"] . "</h2></li>";
        }
        ?>

        <h1> Stampo con ciclo while</h1>
        <?php
        // Version while
        $i = 0;
        while ($i < count($students_array)) {
            // stampare gli elementi
            $current_student = $students_array[$i];
            echo "<li><h2>Studente " . $current_student["name"] . " " . $current_student["lastname"] . "</h2></li>";
            // incremento
            $i++;
        }
        ?>
    </ul>

</body>

</html>