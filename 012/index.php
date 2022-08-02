<?php

$p = ['S', 'M', 'L','XL'][rand(0,3)];

echo 'Senukas atnese: '  . $p;


if($p == 'S'){
    echo '<br>'. 'Tikrinam S';
}
if($p == 'S'|| $p == 'M'){
    echo '<br>'. 'Tikrinam M';
}
if($p == 'S'|| $p == 'M' || $p == 'L'){
    echo '<br>'. 'Tikrinam L';
}
if($p == 'S'|| $p == 'M' || $p == 'L' || $p == 'XL'){
    echo '<br>'. 'Tikrinam XL';
}


switch($p){
    case 'S': echo '<br>'. 'Tikrinam S';
    case 'M': echo '<br>'. 'Tikrinam M';
    case 'L': echo '<br>'. 'Tikrinam L';
    case 'XL': echo '<br>'. 'Tikrinam XL';
}

echo '<br>';
echo '----------1----------';
echo '<br>';

$name = 'Johnny';
$surname = 'Sins';
echo strlen($name) < strlen($surname) ? $name: $surname;

echo '<br>';
echo '----------2----------';
echo '<br>';
echo strtoupper($name) . ' ';

echo strtolower($surname);
echo '<br>';
echo '----------3----------';
echo '<br>';

echo substr($name, 0, 1).substr($surname, 0, 1);

echo '<br>';
echo '----------4----------';
echo '<br>';
echo substr($name, -3, 3).substr($surname, -3, 3);
echo '<br>';
echo '----------5----------';
echo '<br>';
$film = 'An American in Paris';
$aA = array("a","A");
$replaced = str_replace($aA, '*', $film);
echo $replaced;
echo '<br>';
echo '----------6----------';
echo '<br>';
echo substr_count($film,'a') + substr_count($film,'A');
echo '<br>';
echo '----------7----------';
echo '<br>';
echo str_ireplace(array('a','e','i','o','u',' '), '', $film) .'<br>' ;
echo str_ireplace(array('a','e','i','o','u',' '), '', "Breakfast at Tiffany's").'<br>';
echo str_ireplace(array('a','e','i','o','u',' '), '', '2001: A Space Odyssey').'<br>';
echo str_ireplace(array('a','e','i','o','u',' '), '', "It's a Wonderful Life");
echo '<br>';
echo '----------8----------';
echo '<br>';
$epizodai = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $epizodai . '<br>';
$int = (int) filter_var($epizodai, FILTER_SANITIZE_NUMBER_INT);  
echo("Serijos numeris yra: $int \n"); 

echo '<br>';
echo '----------9----------';
echo '<br>';
$fulltext = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$words = array_filter(explode(' ', $fulltext), function($val){
    return mb_strlen($val) <= 5;
});
$fulltext_method_solution = implode(' ', $words);
echo $fulltext_method_solution. '<br>';
$fulltext2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$words = array_filter(explode(' ', $fulltext2), function($val){
    return mb_strlen($val) <= 5;
});
$fulltext_method_solution2 = implode(' ', $words);
echo $fulltext_method_solution2;

echo '<br>';
echo '----------10----------';
echo '<br>';

function generateRandomString($length = n) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
echo generateRandomString(3);