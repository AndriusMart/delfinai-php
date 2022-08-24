<?php
   
    $sarasas = json_decode(file_get_contents(__DIR__ . '/data.json', 1));
    //sortas
    usort($sarasas, function($a, $b) {return strcmp($a->pavarde, $b->pavarde);});
    file_put_contents(__DIR__ . '/data.json', json_encode($sarasas));

 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'header.php' ?>   
    <?php foreach($sarasas as $indexas => $value): ?>
        <div style="border: 2px red solid; margin: 50px">
    <?php foreach($value as $index => $name): ?>
    
        <li><?= $name ?></li>
         
    <?php endforeach ?>
        <a style="border: 2px red solid; background-color: green" href="http://localhost/delfinai-php/bank/pridetiLesas.php?index=<?= $indexas ?>">Pridėti</a>
        <a style="border: 2px red solid; background-color: red" href="http://localhost/delfinai-php/bank/nuskiatytiLestas.php?index=<?= $indexas ?>">Atimti</a>
        <a style="border: 2px red solid; background-color: skyblue" href="http://localhost/delfinai-php/bank/istrintiSaskaita.php?index=<?= $indexas ?>">Istrinti saskaita</a>
    </div>
    <?php endforeach ?>

 
</body>
</html>