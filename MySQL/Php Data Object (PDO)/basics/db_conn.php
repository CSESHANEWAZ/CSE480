<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "myDBPDO";
    $dsn = "mysql: host=$servername; dbname=$database";

    
    try {

        $conn = new PDO($dsn, $username, $password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "connected successfully. <br><br>";
    }
    catch(PDOException $error){
        echo "ERROR: Database connection failed: " . $error -> getMessage();
    }

    
    
    //create database in localhost

    // try {

    //     $sql = "CREATE DATABASE myDBPDO";
    //     $conn -> exec($sql);
    //     echo "Database created successfully. <br><br>";

    // } catch (PDOException $error) {
    //     echo "Error: Could not able to execute $sql." . $error -> getMessage() . "<br><br>";
    // }

    
    




    
    //close connection
    //$conn = NULL;

?>