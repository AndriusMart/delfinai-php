<?php

echo'<pre>';
echo '------1-----';
echo "<br>";
function text($textas){
    return "<h1>$textas</h1>";
}

echo text('labas');
echo "<br>";
echo '------2-----';
echo "<br>";

function textas($textas,$tagas){
    return "<h$tagas>$textas</h$tagas>";
}

echo textas('labas', 2);
echo "<br>";
echo '------3-----';
echo "<br>";
$str = md5(time());
echo $str;

$n = preg_replace_callback('/[0-9]+/', function($m){
    return '<h1 style="display: inline">'.$m[0].'</h1>';
}, $str);

echo "<br>";
echo $n;


echo "<br>";
echo '------4-----';
echo "<br>";

function skaiciai(int $sk){
    static $c = 0;
         for($i = 2 ; $i < $sk; $i++){
        if($sk % $i===0 ){
            $c++;
        }
    }   
     return $c;
}
echo skaiciai(15);

echo "<br>";
echo '------5-----';
echo "<br>";

$_3x3 =[];
foreach(range(1,100) as $v){
    $v = rand(33,77);
    $_3x3[] = $v;
}

    function skaiciaia(array $s){
        foreach($s as $v){
        static $c = 0;
             for($i = 2 ; $i < $v; $i++){
            if($v % $i===0 ){
                $c++;
            }
        }
        return $c;
    }   
    }

    echo skaiciaia($_3x3);

    echo "<br>";
echo '------6-----';
echo "<br>";

$_6 =[];
foreach(range(1,100) as $v){
    $v = rand(333,777);
    $_6[] = $v;
}

function skaiciaiDel(array $_6arr){
    foreach($_6arr as $v){
    static $dalyba = 0;
         for($i = 2 ; $i < $v; $i++){
        if($v % $i===0 ){
            $dalyba++;
        }if($dalyba === 0){
      return  $_6arr = \array_diff($_6arr, $v);
    }
    }
    
}   
}
echo skaiciaiDel($_6);