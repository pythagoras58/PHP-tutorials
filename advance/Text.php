<?php

    require '../advance/Transaction.php';

    $transaction = new Transaction("Papi", 343);

   var_dump($transaction->getAmount());
   var_dump($transaction->getName());

   $transaction->setAmount(1232);
   $transaction->setName("Pythagoras");


   var_dump($transaction->getAmount());
   var_dump($transaction->getName());

?>