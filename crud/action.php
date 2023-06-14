<?php 
    include 'db.php';

    $d = new Database();

    print_r( $d->readData());
?>