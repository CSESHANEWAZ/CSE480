<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    //create connection with localhost
    $conn = new mysqli($servername, $username, $password);

    //check connection
    if($conn -> connect_error){
        die("Error: Connection Failed " . $conn -> connect_error);
    }
    echo "Connection Successful. <br><br>";

    
    
    //create database
    $sql = "CREATE DATABASE testDB";
    if($conn -> query($sql) == TRUE){
        echo "Database Created Successfully. <br><br>";
    }else{
        echo "Error: Could to able to execute $sql. " . $conn -> error ;
    }


    //close connection
    $conn -> close();
?>