<?php

    require "db_conn.php";

    //drop table from database

    try{
        $drop_table = "DROP TABLE users2";

        $conn -> exec($drop_table);
        echo "Table users2 dropped successfully. <br><br>";

    } catch (PDOException $error){
        echo "Error: could nit able to execute $drop_table. " . $error -> getMessage();
    }


    
    //create table in database
    
    try{
        
        $table = "CREATE TABLE users2(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP
        )";

        $conn -> exec($table);
        echo "Table users2 created successfully. <br><br>";

    } catch (PDOException $error){
        echo "Error: could not able to execute $table. " . $error -> getMessage();
    }


    try{
        //transaction start
        $conn -> beginTransaction();

        $conn -> exec("INSERT INTO users(firstname, lastname, email) VALUES
        ('Michael', 'Sheen', 'sheen@yahoo.com')");
        $conn -> exec("INSERT INTO users(firstname, lastname, email) VALUES
        ('Daniel', 'Craig', 'daniel@mail.com')");
        $conn -> exec("INSERT INTO users(firstname, lastname, email) VALUES
        ('Tom', 'Hardy', 'hardy@mail.com')");

        //transaction end
        $conn -> commit();

        echo "Data inserted into users2 table. <br><br>";

    } catch (PDOException $error){
        echo "Error inserting data into users2 table. " . $error -> getMessage();
    }

?>