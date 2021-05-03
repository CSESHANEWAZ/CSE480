<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bank";

    $conn = mysqli_connect($servername, $username, $password, $database);

    //check connection
    if(!$conn){
        die("Error: Database could not connect. " . mysqli_connect_error());
    }
    echo "Database Connected. <br><br>";


    $affectedRow = 0;


    // //create database
    // $database = "CREATE DATABASE bank";
    // if(mysqli_query($conn, $database)){
    //     echo "Database created successfully";
    // }else{
    //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    // }

    // echo "<br><br>";




    // //create table inside mysql database
    $table = "CREATE TABLE accounts(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        account_number INT(10) NOT NULL,
        account_type VARCHAR(30) NOT NULL,
        openDate VARCHAR(30) NOT NULL,
        Balance DOUBLE(10, 2) NOT NULL,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL
    )";

    if(mysqli_query($conn, $table)){
        echo "Table created successfully <br><br>";
    }else{
        echo "ERROR: Could not able to execute $table. " . mysqli_error($conn);
    }

    $xml = simplexml_load_file("bank.xml") or die("Error: Cannot create object");

    foreach($xml->children() as $row){
        $account_number = $row->account_number;
        $account_type = $row->account_type;
        $openDate = $row->openDate;
        $Balance = $row->balance;
        $first_name = $row->accountholder->firstname;
        $last_name = $row->accountholder->lastname;

        $sql = "INSERT INTO accounts(account_number,account_type,openDate,Balance,first_name,last_name) 
                VALUES ('" . $account_number . "','" . $account_type . "','" . $openDate . "','" . $Balance . "','" . $first_name . "','" . $last_name . "')";

        

                
        $result = mysqli_query($conn, $sql);

        if (! empty($result)) {
            $affectedRow ++;
        } else {
            $error_message = mysqli_error($conn) . "\n";
        }
    }
?>


    <h2>Insert XML Data to MySql Table Output</h2>

    <?php
    if ($affectedRow > 0) {
        $message = $affectedRow . " records inserted";
    } else {
        $message = "No records inserted";
    }
    ?>


<style>
body {
	max-width: 550px;
	font-family: Arial;
}

.affected-row {
	background: #cae4ca;
	padding: 10px;
	margin-bottom: 20px;
	border: #bdd6bd 1px solid;
	border-radius: 2px;
	color: #6e716e;
}

.error-message {
	background: #eac0c0;
	padding: 10px;
	margin-bottom: 20px;
	border: #dab2b2 1px solid;
	border-radius: 2px;
	color: #5d5b5b;
}
</style>
<div class="affected-row">
    <?php  echo $message; ?>
</div>
<?php if (! empty($error_message)) { ?>
<div class="error-message">
    <?php echo nl2br($error_message); ?>
</div>
<?php } ?>


