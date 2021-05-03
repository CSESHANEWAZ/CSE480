<?php

    include "db_conn.php";

    $valid = "";

    if (isset($_POST['submit'])){

        $valid = true;

        function test_input($data) {

            $data = trim($data);
            $data = htmlentities($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
            $valid = false;
        }else {
            $name = test_input($_POST["name"]);
            $name_p = '/^[a-zA-Z\s]*$/';
            if (!preg_match($name_p, $name)) {
                $nameErr = "Only letters and white space allowed";
                $valid = false;
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
            $valid = false;
        }else {
            $email = test_input($_POST["email"]);
            $email_p = '/^[a-z\d\.-_]+@([a-z\d-]+\.)+[a-z]{2,6}$/i';
            if (!preg_match($email_p, $email)) {
                $emailErr = "Invalid email format";
                $valid = false;
            }
        }


        if (empty($_POST["password"])) {
            $passwordErr = "password is required";
            $valid = false;
        } else {
            $password = test_input($_POST["password"]);
            $password_p = '/^(?=.*\d)(?=.*[a-z]).{8,32}$/';
            if(!preg_match($password_p, $password)){
                $passwordErr = "use an uppercase, a lowercase, a number, and no special character";
                $valid = false;
            }
        }

        if (empty($_POST["ip_address"])) {
            $ip_addressErr = "IP address is required";
            $valid = false;
        } else {
            $ip_address = test_input($_POST["ip_address"]);
        }

        if (empty($_POST["website"])) {
            $websiteErr = "website is required";
            $valid = false;
        } else {
            $website = test_input($_POST["website"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) 
            {
                $websiteErr = "Invalid URL";
                $valid = false;
            }    
        }

        if (empty($_POST["birthday"])) {
            $valid = false;
        } else {
            $birthday = test_input($_POST["birthday"]);
        }


        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
            $valid = false;
        } else {
            $gender = test_input($_POST["gender"]);
        }

        if (empty($_POST["mobile_num"])) {
            $valid = false;
        } else {
            $mobile = test_input($_POST["mobile_num"]);
        }


        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

    }


    if($valid){
        
        //  insert data into table
        $data = "INSERT INTO user(name, email, password, ip_address, website, birthday, gender, mobile_num, info) VALUES
        ('$name', '$email', '$password', '$ip_address', '$website', '$birthday', '$gender', '$mobile', '$comment')";

        $result = mysqli_query($conn, $data);

        // if(mysqli_num_rows($result)){
        //     echo "success";
        // }

        if ($result) {
            echo "Data Inserted successfully. <br><br>";
        }else{
            echo "ERROR: Could not able to execute $data. " . mysqli_error($conn);
        }


        echo "<br><br>";
        echo "<hr>";


        //selecting data from database table
        $select_data = "SELECT * FROM user";       //attempt select query execution
        if($result = mysqli_query($conn, $select_data)){
            if(mysqli_num_rows($result) > 0){
                echo "<h2>Dataset:</h2>";
                echo "<table>";
                    echo "<tr>";
                        echo "<th>Id</th>";
                        echo "<th>Name</th>";
                        echo "<th>Email</th>";
                        echo "<th>Password</th>";
                        echo "<th>Ip_address</th>";
                        echo "<th>Website</th>";
                        echo "<th>Birthday</th>";
                        echo "<th>Gender</th>";
                        echo "<th>Mobile_NUM</th>";
                        echo "<th>Comment</th>";
                    echo "</tr>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['password'] . "</td>";
                            echo "<td>" . $row['ip_address'] . "</td>";
                            echo "<td>" . $row['website'] . "</td>";
                            echo "<td>" . $row['birthday'] . "</td>";
                            echo "<td>" . $row['gender'] . "</td>";
                            echo "<td>" . $row['mobile_num'] . "</td>";
                            echo "<td>" . $row['comment'] . "</td>";
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

    }




?>