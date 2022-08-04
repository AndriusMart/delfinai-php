<?php
echo '<pre>';

$mas = ['balta', 9 =>'juoda', 'geltona'];

//$mas = array('balta', 9 =>'juoda', 'geltona'); //nedaryt taip !!1

$mas['super'] = 'super Kate';

$mas[] = 'Kate';

$mas[7] = 'Suo';

$mas['0.22'] = 'Dramblys';

$mas[] = 'Kate';



echo count($mas);

echo '<br>';

print_r($mas);

echo '<br>';

/*
for($i = 0; $i < 5; $i++){
    echo "dabar: $i \n";
}
*/
$colors = ['red', 'green', 'blue', 'yellow'];
foreach ($colors as &$value) {

}
unset($value);
foreach ($colors as &$value) {

}
print_r($colors);