<?php

echo'<pre>';




$mas = [

    5,

    [4, 2, [

        8, 9

    ], 78, [

        87, 37

    ]],

    [4],

    8,

    [87, 96, [8, [98, [2], [69, [45, 47]]]], 66, 7]

    ];

   print_r($mas);

   

   function getSum(array|int $val, bool $resetStatic = false){
        static $sum = 0;
        if($resetStatic){
            $sum = 0;
        }
        if(is_int($val)){
            $sum += $val;
        } else{
            foreach($val as $v){
                getSum($v);
            }
        }
        return $sum;
   }
   print_r( getSum($mas, false));