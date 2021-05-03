<?php

    //database connection    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "myDB";
    $dsn = "mysql: host=$servername; dbname=$database";

    
    try {

        $conn = new PDO($dsn, $username, $password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "connected successfully. <br><br>";
    }
    catch(PDOException $error){
        echo "ERROR: Database connection failed: " . $error -> getMessage();
    }


    //drop table from database
    try{
        $drop_table = "DROP TABLE users_2";

        $conn -> exec($drop_table);
        echo "Table users dropped successfully. <br><br>";

    } catch (PDOException $error){
        echo "Error: could nit able to execute $drop_table. " . $error -> getMessage();
    }



    //create table in database
    try{
        
        $table = "CREATE TABLE users_2(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            age INT(3),
            cgpa DOUBLE(3, 2)
        )";

        $conn -> exec($table);
        echo "Table users_2 created successfully. <br><br>";

        
        //prepare sql statement template 
        $stmt = $conn -> prepare("INSERT INTO users_2(firstname, lastname, email, age, cgpa) 
        VALUES(:firstname, :lastname, :email, :age, :cgpa)");

        
        //bind the values to the parameters
        $stmt -> bindParam(':firstname', $firstname);
        $stmt -> bindParam(':lastname', $lastname);
        $stmt -> bindParam(':email', $email);
        $stmt -> bindParam(':age', $age);
        $stmt -> bindParam(':cgpa', $cgpa);

        
        //set parameters and execute
        $firstname = "John";
        $lastname = "Rambo";
        $email = "johnrambo@gmail.com";
        $age = 25;
        $cgpa = 3.25;

        $stmt -> execute();

        
        $firstname = "Clark";
        $lastname = "Kent";
        $email = "clarkkent@gmail.com";
        $age = 27;
        $cgpa = 3.58;

        $stmt -> execute();

        
        $firstname = "Harry";
        $lastname = "Potter";
        $email = "harrypotter@gmail.com";
        $age = 23;
        $cgpa = 3.18;

        $stmt -> execute();

        echo "Data inserted into users_2 table. <br><br>";

    } catch (PDOException $error){
        echo "Error: could not able to execute $table. " . $error -> getMessage();
    }



    $stmt = NULL;
    $conn = NULL;

?>