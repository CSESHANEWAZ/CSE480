<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "myDB";

    //create connection
    $conn = new mysqli($servername, $username, $password, $database);

    //check connection
    if($conn -> connect_error){
        die("ERROR: Database could not connect. " . $conn -> connect_error);
    }
    echo "Database Connected successfully. <br><br>";


    //drop table in database
    $drop_table = "DROP TABLE users_2";

    if($conn -> query($drop_table) == TRUE){
        echo "Dropped users_2 table successfully. <br><br>";
    }else{
        echo "Error: could not able to execute $drop_table. " . $conn -> error . "<br><br>";
    }

    //create table in database 
    $table = "CREATE TABLE users_2(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        age INT(3),
        cgpa DOUBLE(3, 2)
    )";

    if($conn -> query($table) == TRUE){
        echo "users_2 table is created successfully. <br><br>";
    }else{
        echo "ERROR Creating Table. " . $conn -> error . "<br><br>";
    }

    
    //prepare sql statement template 
    $stmt = $conn -> prepare("INSERT INTO users_2(firstname, lastname, email, age, cgpa) VALUES(?, ?, ?, ?, ?)");

    
    //bind the values to the parameters
    $stmt -> bind_param("sssid", $firstname, $lastname, $email, $age, $cgpa);

    
    //set parameters and execute
    $firstname = "John";
    $lastname = "Rambo";
    $email = "johnrambo@gmail.com";
    $age = 25;
    $cgpa = 3.20;

    $stmt -> execute();

    
    $firstname = "Clark";
    $lastname = "Kent";
    $email = "clarkkent@gmail.com";
    $age = 27;
    $cgpa = 3.50;

    $stmt -> execute();

    
    $firstname = "Harry";
    $lastname = "Potter";
    $email = "harrypotter@gmail.com";
    $age = 23;
    $cgpa = 3.00;

    $stmt -> execute();

    echo "Data inserted into users_2 table. <br><br>";

    $stmt -> close();
    $conn -> close();

?>