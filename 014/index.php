<?php
echo '<pre>';
/*
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
*/
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

/*
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
/*
foreach(range(0,2) as $a){
        foreach(range(0,2) as $b){
            $_3x3[$a][$b] = ++$count;
        }
}
print_r($_3x3);
*/
$_3x3 =[];
foreach(range(1,30) as $v){
    $v = rand(5,25);
    $_3x3[] = $v;
}
print_r($_3x3);
$count = 0;
foreach($_3x3 as $b){
    if($b > 10){
        $count++;
    }

}
echo $count;
echo '<br>';
echo max($_3x3);
echo '<br>';

echo array_search(max($_3x3), $_3x3);
echo '<br>';
$countPoriniai = 0;
foreach($_3x3 as $b){
    if($b%2===0){
        $countPoriniai++;
    }

}
echo $countPoriniai;

echo '<br>';
$newMas = [];
foreach($_3x3 as $i => $b){
    $minus = $b - $i;
    $newMas[]= $minus;
}
print_r($newMas);
echo '<br>';
foreach(range(1,10) as $v){
    $v = rand(5,25);
    $_3x3[] = $v;
}
print_r($_3x3);


$countPor = [];
$countNePor = [];
foreach($_3x3 as $b){
    if($b%2===0){
        $countPor[] = $b;
    }
    if($b%2!==0){
        $countNePor[] = $b;
    }

}

echo '<br>';
print_r($countPor);
echo '<br>';
print_r($countNePor);

foreach($_3x3 as $i => $b){
    if($i%2===0 && $b>15){
        $b = 0;
        $_3x3[$i] = $b;
    }


}

echo '<br>';
print_r($_3x3);

echo '<br>';
$indexMin =[];
foreach($_3x3 as $i => $b){
    if($b>10){
        $indexMin[] = $i;
    }
}
print_r($indexMin[0]);

$_noPorinis = [];
foreach($_3x3 as $i => $b){
    if($i%2===0){
            unset($_3x3[$i]);
    }


}
print_r($_3x3);