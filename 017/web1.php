<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document 017</title>
</head>



<body style="background-color:<?=isset($_GET['color']) ? 'red' : 'black' ?>">
    <div class="two-links">
            <a href="http://localhost/delfinai-php/017/web1.php">black</a>
            <a href="http://localhost/delfinai-php/017/web1.php?color=1">red</a>
    </div>


</body>
</html>