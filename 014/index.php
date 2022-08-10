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
echo '<br>';
echo '====1====';
echo '<br>';
$_3x3 =[];
foreach(range(1,30) as $v){
    $v = rand(5,25);
    $_3x3[] = $v;
}

print_r($_3x3);
echo '<br>';
echo '====2.a====';
echo '<br>';
$count = 0;
foreach($_3x3 as $b){
    if($b > 10){
        $count++;
    }

}

echo $count;
echo '<br>';
echo '====2.b====';
echo '<br>';
echo max($_3x3);
echo '<br>';
echo array_search(max($_3x3), $_3x3);
echo '<br>';
echo '====2.c====';
echo '<br>';
$countPoriniai = 0;
foreach($_3x3 as $b){
    if($b%2===0){
        $countPoriniai++;
    }

}
echo $countPoriniai;
echo '<br>';
echo '====2.d====';
echo '<br>';

$newMas = [];
foreach($_3x3 as $i => $b){
    $minus = $b - $i;
    $newMas[]= $minus;
}
print_r($newMas);
echo '<br>';
echo '====2.e====';
echo '<br>';
foreach(range(1,10) as $v){
    $v = rand(5,25);
    $_3x3[] = $v;
}
print_r($_3x3);
echo '<br>';
echo '====2.f====';
echo '<br>';

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
echo '<br>';
echo '====2.g====';
echo '<br>';
foreach($_3x3 as $i => $b){
    if($i%2===0 && $b>15){
        $b = 0;
        $_3x3[$i] = $b;
    }


}

echo '<br>';
print_r($_3x3);
echo '<br>';
echo '====2.h====';
echo '<br>';
echo '<br>';
$indexMin =[];
foreach($_3x3 as $i => $b){
    if($b>10){
        $indexMin[] = $i;
    }
}
print_r($indexMin[0]);
echo '<br>';
echo '====2.i====';
echo '<br>';
$_noPorinis = [];
foreach($_3x3 as $i => $b){
    if($i%2===0){
            unset($_3x3[$i]);
    }


}
print_r($_3x3);

echo '<br>';
echo '====3====';
echo '<br>';
$abcd= ['A','B','C','D'];
$_3 =[];
foreach(range(1,200) as $v){
    $v = $abcd[rand(0,3)];
    $_3[] = $v;
}

print_r($_3);
echo '<br>';
echo '====4====';
echo '<br>';
sort($_3);
print_r($_3);
echo '<br>';
echo '====5====';
echo '<br>';
$_5_1 =[];
foreach(range(1,200) as $_1){
    $_1 = $abcd[rand(0,3)];
    $_5_1[] = $_1;
}

$_5_2 =[];
foreach(range(1,200) as $_2){
    $_2 = $abcd[rand(0,3)];
    $_5_2[] = $_2;
}

$_5_3 =[];
foreach(range(1,200) as $_3){
    $_3 = $abcd[rand(0,3)];
    $_5_3[] = $_3;
}
$mix = [];
foreach($_5_1 as $index => $value){
    $elem = $value . $_5_2[$index] . $_5_3[$index];
    $mix[]= $elem;
}
$unique =array_unique($mix);
print_r(count($unique));
echo '<br>';
echo '====6====';
echo '<br>';
$_6_1 =[];
foreach(range(1,100) as $v){
    $v = rand(100,999);
           $_6_1[] = $v;
}
$_6_1unique = array_unique($_6_1);
$_6_2 =[];
foreach(range(1,100) as $v){
    $v = rand(100,999);
           $_6_2[] = $v;
}
$_6_2unique = array_unique($_6_2);


echo '<br>';
echo '====7====';
echo '<br>';

echo '<br>';
echo '====8====';
echo '<br>';

echo '<br>';
echo '====9====';
echo '<br>';
 $uniarrr = [];
 foreach($_6_1unique as $v){
    $uniarrr[$_6_1unique[$i]] = $_6_2unique[$i];
}
print_r($uniarrr);
echo '<br>';
echo '====10====';
echo '<br>';
$_10 =[];
foreach(range(1,2) as $v){
    $v = rand(5,25);
    $_10[] = $v;
}
for($i = 0; $i < 8; $i++){
    $n = $_10[$i]+$_10[$i+1];
    $_10[]= $n;
}
print_r($_10);