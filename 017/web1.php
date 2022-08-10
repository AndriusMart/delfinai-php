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
    <title>Document 017</title>
</head>



<body style="background-color:  <?= $color ?>">

  
    <a href="?color=black">black</a>
    <a href="?color=red">red</a>

</body>
</html>