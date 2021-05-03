<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    //create connection
    $conn = new mysqli($servername, $username, $password);

    //check connection
    if($conn -> connect_error){
        die("ERROR: Database could not connect. " . $conn -> connect_error);
    }
    echo "Connected successfully. <br><br>";


    
    //create database
    $sql = "CREATE DATABASE myDBOO";

    if($conn -> query($sql) == TRUE){
        echo "Database created successfully. <br><br>";
    }else{
        echo "ERROR Creating Database. " . $conn -> error;
    }


    //close connection
    $conn -> close();


?>