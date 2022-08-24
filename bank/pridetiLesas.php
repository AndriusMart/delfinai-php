<?php

//GET
$sarasas = json_decode(file_get_contents(__DIR__ . '/data.json', 1));    

if(isset($_GET)){
    $indexPasirinkto = ($_GET['index']);

}



//POST
if('POST' == $_SERVER['REQUEST_METHOD']){


    $norimaSuma = $_POST ;
    var_dump($norimaSuma['likutis']);
   
    $sarasas = json_decode(file_get_contents(__DIR__ . '/data.json'),1);
    foreach($sarasas as $index => $value){
        if($indexPasirinkto == $index && $norimaSuma['likutis'] > 0 ){
            $sarasas[$index]['likutis'] += (int)$norimaSuma['likutis'];
        }
    }



    file_put_contents(__DIR__ . '/data.json', json_encode($sarasas));
    // print_r($norimaSuma);

    header("Location: http://localhost/delfinai-php/bank/sarasas.php");
     die;

}


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
    <div>
    <?php foreach($sarasas as $indexas => $value):?>
        <?php if($indexas == $indexPasirinkto):   ?>    
             
        <?php foreach($value as $index => $duomenys): ?>

            <li><?= $duomenys ?></li>

            <?php endforeach ?>
            <?php endif ?>
    <?php endforeach ?>
    </div>

    <div>
    <form  method="post">

        Norima suma
    <input type="number" name="likutis" required>
       
    <button type="submit">Prideti</button>
    </form>
    </div>
</body>
</html>