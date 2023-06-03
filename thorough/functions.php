<?php

    function sum(int $a, int $b){
        return $a + $b;
    }

    $total = sum(14,6);

    echo $total . '</br>';

    function isEven(int $num){
        if($num % 2 == 0){
            echo "Number " . $num . " Is Even";
        }else{
            echo "Number ". $num ." Is Odd";
        }
    }

    isEven(15);
?>