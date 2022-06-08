<?php
//MAIL:
// 1. Controllare che la mail passata in GET sia ben formata e contenga un punto e una chiocciola.
// 2. Se è corretta stampare un div che contenga “OK”, altrimenti che contenga “KO”.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    $mail = $_GET["mail"];
    // var_dump($mail);
    $at_position = strpos($mail, "@");
    var_dump($at_position);
    $point_position = strpos($mail, ".");
    var_dump($point_position);
    // Se atposition è  false oppure pointposition è falso, allora non è trovato
    // altrimenti è trovato
    // if ($at_position === false || $point_position === false) {
    //     echo "<div><h2>E il risultato è</h2><h1>KO</h1><p>Paragrafo</p></div>";
    // } else {
    //     echo "OK";
    // }
    //  Sintassi ternaria
    //     $result = ($at_position === false || $point_position === false) ? "KO" : "OK";
    //     echo $result;

    ?>

    <?php if ($at_position === false || $point_position === false) { ?>
        <div>
            <h2>E il risultato è</h2>
            <h3 class="result-ko">KO</h3>
            <p>Paragrafo</p>
        </div>
    <?php } else { ?>
        <h3 class="result-ok">OK</h3>
    <?php } ?>


    <!-- <div>
        <h2>E il risultato è</h2>
        <h1>KO</h1>
        <p>Paragrafo</p>
    </div> -->
</body>

</html>