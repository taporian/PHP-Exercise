<!DOCTYPE html>
<?php

$multiDimensional =
    array(
        "musicals" => array(0 => "Oklahoma", 1 => "The Music Man", 2 => "South Pacific"),
        "dramas" => array(0 => "Lawrence of Arabia", 1 => "To Kill a Mockingbird", 2 => "Casablanca"),
        "mysteries" => array(0 => "The Maltese Falcon", 1 => "Rear Window", 2 => "North by Northwest")

    );

foreach ($multiDimensional as $genre => $names) {

    echo strtoupper($genre) . '<br>';
    foreach ($names as $name => $namekeys) {
        echo "----> ";
        echo $name;
        echo  ' = ' . $namekeys . '<br>';
    }
}


arsort($multiDimensional) . '<br>';




?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>