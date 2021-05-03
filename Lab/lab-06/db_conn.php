<?php

    //session_start();


    $sql = $result = $name = $password = "";




    $servername='localhost';
    $username='root';
    $password='';
    //$database='spring2021';

    $conn=mysqli_connect($servername, $username, $password);

    if (!$conn) 
    {
        die("ERROR: Database could not connect. " . mysqli_connect_error());
    }
    // else{
    //     header("Location: result.php");
    //     exit();
    // }

    //if database connected

    //drop database
    $drop_db = "DROP DATABASE spring2021";
    if(mysqli_query($conn, $drop_db)){
        echo "Database Dropped Successfully";
    }else{
        echo "Error: Could not able to execute $drop_db. " . mysqli_error($conn);
    }

    echo "<br><br>";


    //create database
    $database = "CREATE DATABASE spring2021";
    if(mysqli_query($conn, $database)){
        echo "Database created successfully";
        //header('location: query.php ');
    }else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }



    $conn = mysqli_connect("localhost", "root", "", "spring2021");

    //check connection 

    if(!$conn){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    echo "<br><br>";
    echo "<hr>";


    $table = "CREATE TABLE user(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL,
        password VARCHAR(30) NOT NULL,
        ip_address VARCHAR(30) NOT NULL,
        website VARCHAR(30) NOT NULL,
        birthday VARCHAR(20) NOT NULL,
        gender VARCHAR(10) NOT NULL,
        mobile_num VARCHAR(20),
        comment VARCHAR(50)
    )";


    if(mysqli_query($conn, $table)){
        echo "Table created successfully <br><br>";
    }else{
        echo "ERROR: Could not able to execute $table. " . mysqli_error($conn);
    }




    //close connection
    mysqli_close($conn);
?>