<?php

class Transaction {
    public $name;
    public $amount;

    // function __construct(){

    // }

    function __construct($name, $amount){
        $this->amount = $amount;
        $this->name = $name;
    }


    function setName($name){
        $this->name = $name;
    }

    function setAmount($amount){
        $this->amount = $amount;
    }


    function getName(){
        return $this->name;
    }

    function getAmount(){
        return $this->amount;
    }
}
    
?>
