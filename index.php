<?php

var_dump($_GET);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" type="get">
        <p><label for="message">Paragraph to send</label></p>
        <div>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Type here your messag"></textarea>
        </div>
        <p><label for="bword">Word to erase</label></p>
        <div>
            <input type="text" name="bword" id="bword">
        </div>
        <div>
            <p><button type="submit">Send message to the server</button></p>
        </div>
    </form>


</body>

</html>