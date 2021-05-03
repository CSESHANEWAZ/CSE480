<?php

    require 'vendor/autoload.php';

    //connect to server
    $conn = new MongoDB\Client;

    echo "Database connected. <br><br>";

    //connect to a database
    $db = $conn->university;

    echo "Database university selected."




    //access collection

    //insert document

?>