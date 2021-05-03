<?php

  

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);

    //check connection
    if(!$conn){
        die("Error: Database could not connect. " . mysqli_connect_error());
    }
    echo "Database Connected. Host info: " . mysqli_get_host_info($conn) . "<br><br>";

    
    //drop database
    $drop_db = "DROP DATABASE myDB";
    if(mysqli_query($conn, $drop_db)){
        echo "Database Dropped Successfully";
    }else{
        echo "Error: Could not able to execute $drop_db. " . mysqli_error($conn);
    }

    echo "<br><br>";

    

    //create database
    $database = "CREATE DATABASE myDB";
    if(mysqli_query($conn, $database)){
        echo "Database created successfully";
        header('location: query.php ');
    }else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    echo "<br><br>";



    //close connection
    mysqli_close($conn);
?>