<?php

    $conn = mysqli_connect("localhost", "root", "", "myDB");

    //check connection 

    if(!$conn){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }


    //drop table inside mysql database
    // $drop_tb = "DROP TABLE users";
    
    // if(mysqli_query($conn, $drop_tb)){
    //     echo "Table dropped successfully. <br><br>" ;
    // }else{
    //     echo "ERROR: Could not able to execute $drop_tb . " . mysqli_error($conn);
    // }


    //create table inside mysql database
    $table = "CREATE TABLE users(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL UNIQUE
    )AUTO_INCREMENT = 101";


    if(mysqli_query($conn, $table)){
        echo "Table created successfully <br><br>";
    }else{
        echo "ERROR: Could not able to execute $table. " . mysqli_error($conn);
    }

    
    //alter column into database table
    $alter_col = "ALTER TABLE users ADD age INT NOT NULL";

    if(mysqli_query($conn, $alter_col)){
        echo "Table altered successfully <br><br>";
    }else{
        echo "ERROR: Could not able to execute $alter_col. " . mysqli_error($conn);
    }


    //insert data into table
    $data = "INSERT INTO users(first_name, last_name, email, age) VALUES
    ('Tom', 'Cruise', 'cruise@yahoo.com', 25),
    ('John', 'Rambo', 'johnrambo@gmail.com', 28),
    ('Clark', 'Kent', 'clarkkent@gmail.com', 29),
    ('John', 'Carter', 'johncarter@gmail.com', 25),
    ('Harry', 'Potter', 'harrypotter@gmail.com', 28),
    ('Robert', 'John', 'john@gmail.com', 28),
    ('Alba', 'Flores', 'alba@mail.com', 26)";

    if (mysqli_query($conn, $data)) {

        $last_id = mysqli_insert_id($conn);     //get id of last inserted record
        echo "Inserted successfully. Last inserted id is: " . $last_id . "<br><br>";

    }else{
        echo "ERROR: Could not able to execute $data. " . mysqli_error($conn);
    }




    //selecting data from database table
    $select_data = "SELECT * FROM users";       //attempt select query execution
    if($result = mysqli_query($conn, $select_data)){
        if(mysqli_num_rows($result) > 0){
            echo "<h2>Dataset:</h2>";
            echo "<table>";
                echo "<tr>";
                    echo "<th>Id</th>";
                    echo "<th>First_name</th>";
                    echo "<th>Last_name</th>";
                    echo "<th>Email</th>";
                    echo "<th>Age</th>";
                echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['first_name'] . "</td>";
                        echo "<td>" . $row['last_name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['age'] . "</td>";
                    echo "</tr>";
                }
            echo "</table>";
            mysqli_free_result($result);         //free result set, mysqli_free_result() function frees the memory associated with the result 
        }else{
            echo "No records matching your query were found.";
        }
    }else{
        echo "ERROR: Could not able to execute $select_data." . mysqli_error($conn);
    }


    echo "<br><br>";

    //update database table
    $update_data = "UPDATE users SET email = 'robert_john@yahoo.com' WHERE id = 6";

    //checking 
    if (mysqli_query($conn, $update_data)) {
        echo "Record updated successfully. <br><br>";
    }else{
        echo "ERROR: Could not able to execute $update_data. " . mysqli_error($conn);
    }



    echo "<br>";
    echo "<hr>";

    //selecting data from database table
    $select_data = "SELECT * FROM users";       //attempt select query execution
    if($result = mysqli_query($conn, $select_data)){
        if(mysqli_num_rows($result) > 0){
            echo "<h2>Dataset:</h2>";
            echo "<table>";
                echo "<tr>";
                    echo "<th>Id</th>";
                    echo "<th>First_name</th>";
                    echo "<th>Last_name</th>";
                    echo "<th>Email</th>";
                    echo "<th>Age</th>";
                echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['first_name'] . "</td>";
                        echo "<td>" . $row['last_name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['age'] . "</td>";
                    echo "</tr>";
                }
            echo "</table>";
            mysqli_free_result($result);         //free result set, mysqli_free_result() function frees the memory associated with the result 
        }else{
            echo "No records matching your query were found.";
        }
    }else{
        echo "ERROR: Could not able to execute $select_data." . mysqli_error($conn);
    }


    echo "<br><br>";

    //delete data from database table
    $del_data = "DELETE FROM users WHERE first_name='John'";

    if(mysqli_query($conn, $del_data)){
        echo "Data deleted successfully. <br><br>";
    }else{
        echo "ERROR: Could not able to execute $del_data." . mysqli_error($conn);
    }


    echo "<br>";
    echo "<hr>";

    //selecting data from database table
    $select_data = "SELECT * FROM users";       //attempt select query execution
    if($result = mysqli_query($conn, $select_data)){
        if(mysqli_num_rows($result) > 0){
            echo "<h2>Dataset:</h2>";
            echo "<table>";
                echo "<tr>";
                    echo "<th>Id</th>";
                    echo "<th>First_name</th>";
                    echo "<th>Last_name</th>";
                    echo "<th>Email</th>";
                    echo "<th>Age</th>";
                echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['first_name'] . "</td>";
                        echo "<td>" . $row['last_name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['age'] . "</td>";
                    echo "</tr>";
                }
            echo "</table>";
            mysqli_free_result($result);         //free result set, mysqli_free_result() function frees the memory associated with the result 
        }else{
            echo "No records matching your query were found.";
        }
    }else{
        echo "ERROR: Could not able to execute $select_data." . mysqli_error($conn);
    }



    echo "<br>";
    echo "<hr>";

    //filtering records from database table

    $filter_data = "SELECT * FROM users WHERE age=28";       //attempt select query execution
    if($result = mysqli_query($conn, $filter_data)){
        if(mysqli_num_rows($result) > 0){
            echo "<h4>Dataset after filtering against to age attribute:</h4>";
            echo "<table>";
                echo "<tr>";
                    echo "<th>Id</th>";
                    echo "<th>First_name</th>";
                    echo "<th>Last_name</th>";
                    echo "<th>Email</th>";
                    echo "<th>Age</th>";
                echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['first_name'] . "</td>";
                        echo "<td>" . $row['last_name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['age'] . "</td>";
                    echo "</tr>";
                }
            echo "</table>";
            mysqli_free_result($result);         //free result set, mysqli_free_result() function frees the memory associated with the result 
        }else{
            echo "No records matching your query were found.";
        }
    }else{
        echo "ERROR: Could not able to execute $filter_data." . mysqli_error($conn);
    }

    echo "<br>";
    echo "<hr>";

    //limiting result sets

    $limited_data = "SELECT * FROM users LIMIT 3";       //attempt select query execution
    if($result = mysqli_query($conn, $limited_data)){
        if(mysqli_num_rows($result) > 0){
            echo "<h4>Limited Dataset From Database :</h4>";
            echo "<table>";
                echo "<tr>";
                    echo "<th>Id</th>";
                    echo "<th>First_name</th>";
                    echo "<th>Last_name</th>";
                    echo "<th>Email</th>";
                    echo "<th>Age</th>";
                echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['first_name'] . "</td>";
                        echo "<td>" . $row['last_name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['age'] . "</td>";
                    echo "</tr>";
                }
            echo "</table>";
            mysqli_free_result($result);         //free result set, mysqli_free_result() function frees the memory associated with the result 
        }else{
            echo "No records matching your query were found.";
        }
    }else{
        echo "ERROR: Could not able to execute $limited_data." . mysqli_error($conn);
    }


    echo "<br>";
    echo "<hr>";

    //Ordering on dataset according to age 

    $ordered_data = "SELECT * FROM users ORDER BY age";       //attempt select query execution; (ascending order)
    if($result = mysqli_query($conn, $ordered_data)){
        if(mysqli_num_rows($result) > 0){
            echo "<h4>Ordered Data According to age:</h4>";
            echo "<table>";
                echo "<tr>";
                    echo "<th>Id</th>";
                    echo "<th>First_name</th>";
                    echo "<th>Last_name</th>";
                    echo "<th>Email</th>";
                    echo "<th>Age</th>";
                echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['first_name'] . "</td>";
                        echo "<td>" . $row['last_name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['age'] . "</td>";
                    echo "</tr>";
                }
            echo "</table>";
            mysqli_free_result($result);         //free result set, mysqli_free_result() function frees the memory associated with the result 
        }else{
            echo "No records matching your query were found.";
        }
    }else{
        echo "ERROR: Could not able to execute $ordered_data." . mysqli_error($conn);
    }



    echo "<br>";
    echo "<hr>";

    //Ordering on dataset according to age 

    $ordered_data = "SELECT * FROM users ORDER BY age DESC";       //attempt select query execution; (descending order)
    if($result = mysqli_query($conn, $ordered_data)){
        if(mysqli_num_rows($result) > 0){
            echo "<h4>Ordered Data According to age:</h4>";
            echo "<table>";
                echo "<tr>";
                    echo "<th>Id</th>";
                    echo "<th>First_name</th>";
                    echo "<th>Last_name</th>";
                    echo "<th>Email</th>";
                    echo "<th>Age</th>";
                echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['first_name'] . "</td>";
                        echo "<td>" . $row['last_name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['age'] . "</td>";
                    echo "</tr>";
                }
            echo "</table>";
            mysqli_free_result($result);         //free result set, mysqli_free_result() function frees the memory associated with the result 
        }else{
            echo "No records matching your query were found.";
        }
    }else{
        echo "ERROR: Could not able to execute $ordered_data." . mysqli_error($conn);
    }




    mysqli_close($conn);
?>