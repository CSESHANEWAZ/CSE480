<?php

    require "db_conn.php";   //database connection

    
    //drop table from database

    try{
        $drop_table = "DROP TABLE users";

        $conn -> exec($drop_table);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Table users dropped successfully. <br><br>";

    } catch (PDOException $error){
        echo "Error: could nit able to execute $drop_table. " . $error -> getMessage();
    }


    
    //create table in database
    try{
        
        $table = "CREATE TABLE users(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP
        )";

        $conn -> exec($table);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Table users created successfully. <br><br>";

    } catch (PDOException $error){
        echo "Error: could not able to execute $table. " . $error -> getMessage();
    }


    
    
    
    //insert data into user table
    try{

        $data = "INSERT INTO users(firstname, lastname, email) VALUES
        ('Tom', 'Cruise', 'cruise@yahoo.com'),
        ('John', 'Rambo', 'johnrambo@gmail.com'),
        ('Clark', 'Kent', 'clarkkent@gmail.com'),
        ('John', 'Carter', 'johncarter@gmail.com'),
        ('Harry', 'Potter', 'harrypotter@gmail.com'),
        ('Robert', 'John', 'john@gmail.com'),
        ('Alba', 'Flores', 'alba@mail.com')";

        
        $conn -> exec($data);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $last_id = $conn -> lastInsertId();     //get id of last inserted record
        
        echo "Data inserted into users table successfully. Last inserted id is: " . $last_id . "<br><br>";
        
    } catch (PDOException $error){
        
        echo "Error: could not able to execute $data. " . $error -> getMessage();
    }





    //insert data into user table using another format
    try{
        
        $conn -> beginTransaction();    //transaction start

            $conn -> exec("INSERT INTO users(firstname, lastname, email) VALUES
            ('Michael', 'Sheen', 'sheen@yahoo.com')");
            $conn -> exec("INSERT INTO users(firstname, lastname, email) VALUES
            ('Daniel', 'Craig', 'daniel@mail.com')");
            $conn -> exec("INSERT INTO users(firstname, lastname, email) VALUES
            ('Tom', 'Hardy', 'hardy@mail.com')");

        $conn -> commit();      //transaction end
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Data inserted into users table. <br><br>";

        
    } catch (PDOException $error){

        $conn -> rollback();    //rollback the transaction if something is failed
        echo "Error inserting data into users table. " . $error -> getMessage();
    }



    //delete data from users table
    try{
        $delete_data = "DELETE FROM users WHERE id=3";

        $conn -> exec($delete_data);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        echo "Data deleted from users table successfully. <br><br>";

    } catch (PDOException $error){
        echo "Error: could not able to execute $delete_data. " . $error -> getMessage();
    }




    //update data in users table
    try{
        $update_data = "UPDATE users SET email = 'tom_hardy@yahoo.com'  WHERE id = 10";

        $conn -> exec($update_data);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        echo "Data updated in users table successfully. <br><br>";

    } catch (PDOException $error){
        echo "Error: could not able to execute $update_data. " . $error -> getMessage();
    }





    
    $conn = NULL;       //close connection

?>