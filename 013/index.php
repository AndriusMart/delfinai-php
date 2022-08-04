<link rel="stylesheet" href="main.css">
<?php

echo'<pre>';
echo '<br> ------for-----<br><br>';
for($i = 0; $i < 5; $i++){
    echo "dabar: $i \n";
}

$x = 0;

echo '<br> ------do..while-----<br><br>';
do{
    echo "dabar: $x \n";
    $x++;
}while($x < 5);

echo '<br> ------while-----<br><br>';
$y = 0;

while($y < 5){
    echo "dabar: $y \n";
    $y++;
}
echo '</pre>';


echo '<br>';
echo '======1======';
echo '<br>';
for($i = 0; $i < 400; $i++){
    echo "*";
}
echo '<br>';
echo '======a======';
echo '<br>';
echo '<div class="stars">';
for($i = 0; $i < 400; $i++){
    echo "*";
}
echo "</div>";
echo '<br>';
echo '======b======';
echo '<br>';
for($i = 0; $i < 8; $i++){
    echo '<br>';
    for($t = 0; $t < 50; $t++){
        echo "*";
    }
}

echo '<br>';
echo '======2======';
echo '<br>';
$DidesniSkaiciai = 0;
for($i = 0; $i < 300; $i++){
    $rand2= rand(0,300);
    if($rand2 >150){
        $DidesniSkaiciai++;
    }
    if($rand2 >275){
        $_2randString = '<span class="red">'.$rand2.' '.'</span>';
    }else{
        $_2randString = $rand2.' ';
    }
    echo $_2randString;
}
echo '<br>'.'<br>'.$DidesniSkaiciai;
echo '<br>';
echo '======3======';
echo '<br>';
$sring3 = '';
for($i = 0; $i < rand(3000,4000); $i++){
    if($i%77===0){
        $_3randString = $i.',';
        $sring3 .= $_3randString;
    
    }
}
$newarraynama = rtrim($sring3, ",");
echo $newarraynama;

echo '<br>';
echo '======5.6======';
echo '<br>';
echo '<div class="box">';
for($i = 0; $i < 50; $i++){
    echo '<br>';
    for($t = 0; $t < 50; $t++){
        echo "*";
    }
}
echo '</div>';