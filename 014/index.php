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
/*
$colors = ['red', 'green', 'blue', 'yellow'];
foreach ($colors as &$value) {

}
unset($value);
foreach ($colors as &$value) {

}
print_r($colors);
*/


$colors = [
    ['red', 'green', 'blue', 'yellow'],
    'labas',
    ['drambys', 'bebras', 'briedis', 'barsukas','traktorius'],
    ['77', '12']
];

echo $colors[1][0];

foreach($colors as $stalcius){
    if(is_array($stalcius)){
        foreach($stalcius as $daiktas){
            echo "$daiktas\n";
        }
    }else {
            echo "$stalcius\n";
    }
}

$_3x3 =[];
$count = 0;
/*
foreach(range(1,3) as $_){
    $_3 = [];
        foreach(range(1,3) as $_){
            $_3[] = ++$count;
        }
    $_3x3[] = $_3;
}*/

foreach(range(0,2) as $a){
        foreach(range(0,2) as $b){
            $_3x3[$a][$b] = ++$count;
        }
}
print_r($_3x3);