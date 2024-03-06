<?php

$newMessage = str_ireplace($_GET['bword'], '***', $_GET['message']);
//echo $newMessage;



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Censura :-)</h1>

    <h3> Il messagio originale è: (lunghezza <?php echo strlen($_GET['message']) ?> ) </h3>
    <h4> <?php echo $_GET['message'] ?> </h4>

    <h3> Il messagio censurato è: (lunghezza <?php echo strlen($newMessage) ?> ) </h3>
    <h4> <?php echo $newMessage ?> </h4>





</body>

</html>