<?php
$ra = $_GET['color'] ?? 'Nieko nera';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 017</title>
</head>
<body style="background-color:  <?=$ra?>">

    <h1>Write background color in hex (#00000)</h1>
    <form action="http://localhost/delfinai-php/017/web2.php" method="get">
        <input type="text" name="color" />
        <button type="submit">Tikras</button>
    </form>
    <input type="color" id="colorpicker" value="#00000">
</body>
</html>