<?php

    function sum(int $a, int $b){
        return $a + $b;
    }

    $total = sum(14,6);

    echo $total;

    function isEven(int $num){
        if($num % 2 == 0){
            echo "Number Is Even";
        }else{
            echo "Number Is Odd";
        }
    }

    isEven(13);
?>