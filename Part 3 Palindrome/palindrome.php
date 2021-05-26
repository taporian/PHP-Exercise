<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Palindrome Checker</h1>

    <form method="POST" action="palindrome.php">

        <label for="fname">Enter your word</label>
        <input type="text" id="fname" name="word"><br><br>
        <input type="submit" value="Submit">

    </form><br><br>
    <?php

    $palindrome = $_POST['word'];


    if (strtolower($palindrome) == strrev(strtolower($palindrome))) {
        echo "The word $palindrome is a palindrome";
    } else {
        echo "The word $palindrome is not a palindrome";
    }

    ?>

    <body>

    </body>

</html>