<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   header('Location:http://localhost/delfinai-php/017/web7.php');
die; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document 017</title>
</head>
<body style="background-color:<?= $_SERVER['REQUEST_METHOD'] == 'POST' ? '#FAFA33' :'lime'?> ">
    <div class="two-links">
    <form action="http://localhost/delfinai-php/017/web7.php" method="get">
        <button type="submit">GET</button>
        </form>
        </div>
        <div class="two-links">
    <form action="http://localhost/delfinai-php/017/web7.php" method="post">
        <button type="submit">POST</button>
        </form>
    </div>
</html>