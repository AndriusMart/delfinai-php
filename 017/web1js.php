<?php

if(isset($_GET['color'])){
   $color = $_GET['color'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="app.js" defer></script>
    <title>Document 017</title>
</head>



<body style="background-color:black>">
    <div class="two-links">
            <a href="http://localhost/delfinai-php/017/web1js.php">black</a>
            <a href="http://localhost/delfinai-php/017/web1js.php?color=1">red</a>
    </div>


</body>
</html>