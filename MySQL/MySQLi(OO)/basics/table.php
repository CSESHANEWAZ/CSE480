<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "myDBOO";

    //create connection
    $conn = new mysqli($servername, $username, $password, $database);

    //check connection
    if($conn -> connect_error){
        die("ERROR: Database could not connect. " . $conn -> connect_error);
    }
    echo "Database Connected successfully. <br><br>";


    
    //drop table in database
    $drop_table = "DROP TABLE users";

    if($conn -> query($drop_table) == TRUE){
        echo "Dropped users table successfully. <br><br>";
    }else{
        echo "Error: could not able to execute $drop_table. " . $conn -> error . "<br><br>";
    }
    
    
    
    //create table in database 
    $table = "CREATE TABLE users(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP
    )";

    if($conn -> query($table) == TRUE){
        echo "Table created successfully. <br><br>";
    }else{
        echo "ERROR Creating Table. " . $conn -> error . "<br><br>";
    }


    
    //insert data into users table
    $data = "INSERT INTO users(firstname, lastname, email) VALUES
    ('Tom', 'Cruise', 'cruise@yahoo.com'),
    ('John', 'Rambo', 'johnrambo@gmail.com'),
    ('Clark', 'Kent', 'clarkkent@gmail.com'),
    ('John', 'Carter', 'johncarter@gmail.com'),
    ('Harry', 'Potter', 'harrypotter@gmail.com'),
    ('Robert', 'John', 'john@gmail.com'),
    ('Alba', 'Flores', 'alba@mail.com')";

    if($conn -> query($data) == TRUE){

        $last_id = $conn -> insert_id;      //get id of last inserted record
        echo "Data inserted successfully. Last inserted id is: " . $last_id . "<br><br>";

    }else{
        echo "Error inserting data into users table " . $conn ->error . "<br><br>";
    }


    
    //insert more data into users table using another formate
    $data = "INSERT INTO users(firstname, lastname, email) VALUES
    ('Michael', 'Sheen', 'sheen@yahoo.com');";
    $data .= "INSERT INTO users(firstname, lastname, email) VALUES
    ('Daniel', 'Craig', 'daniel@mail.com');";
    $data .= "INSERT INTO users(firstname, lastname, email) VALUES
    ('Tom', 'Hardy', 'hardy@mail.com');";

    if($conn -> multi_query($data) == TRUE){

        $last_id = $conn -> insert_id;      //get id of last inserted record
        echo "Data inserted successfully. Last inserted id is: " . $last_id . "<br><br>";

    }else{
        echo "Error inserting data into users table " . $conn ->error;
    }



    
    //close connection
    $conn -> close();


?>