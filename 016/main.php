<?php


//echo '<pre>';

//echo 'start\n';

//echo __DIR__;

// $data = require __DIR__.'/d.php';
header('Content-type: image/png');
$data = file_get_contents(__DIR__.'/rose.jpg');
echo $data;
//print_r($data);

//require __DIR__.'/inc.php';
//include __DIR__.'/inc.php';
//include __DIR__.'/inc.php';


//echo 'end\n';