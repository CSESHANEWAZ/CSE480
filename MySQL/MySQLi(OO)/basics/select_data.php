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
        age INT(3),
        reg_date TIMESTAMP
    )";

    if($conn -> query($table) == TRUE){
        echo "Table created successfully. <br><br>";
    }else{
        echo "ERROR Creating Table. " . $conn -> error . "<br><br>";
    }


    
    
    //insert data into users table
    $data = "INSERT INTO users(firstname, lastname, email, age) VALUES
    ('Tom', 'Cruise', 'cruise@yahoo.com', 20),
    ('John', 'Rambo', 'johnrambo@gmail.com', 25),
    ('Clark', 'Kent', 'clarkkent@gmail.com', 23),
    ('John', 'Carter', 'johncarter@gmail.com', 28),
    ('Harry', 'Potter', 'harrypotter@gmail.com', 26),
    ('Robert', 'John', 'john@gmail.com', 29),
    ('Alba', 'Flores', 'alba@mail.com', 22)";

    if($conn -> query($data) == TRUE){

        $last_id = $conn -> insert_id;      //get id of last inserted record
        echo "Data inserted successfully. Last inserted id is: " . $last_id . "<br><br>";

    }else{
        echo "Error inserting data into users table " . $conn ->error . "<br><br>";
    }


    


    //selecting data from database table
    $select_data = "SELECT * FROM users LIMIT 5 OFFSET 2";       
    $result = $conn -> query($select_data);

    if($result){

        if($result->num_rows > 0){
            echo "<h2>Dataset:</h2>";
            echo "<table border='1px solid red'>";
                echo "<tr>";
                    echo "<th>Id</th>";
                    echo "<th>First_name</th>";
                    echo "<th>Last_name</th>";
                    echo "<th>Email</th>";
                    echo "<th>Age</th>";
                echo "</tr>";

                while($row = $result->fetch_assoc()){
                    echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['firstname'] . "</td>";
                        echo "<td>" . $row['lastname'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['age'] . "</td>";
                    echo "</tr>";
                }
            echo "</table>";

            $result -> free_result();         //free result set,

        }else{

            echo "No records matching your query were found.";
        }

    }else{

        echo "ERROR: Could not able to execute $select_data." . $conn -> error;

    }




    //close connection
    $conn -> close();


?>