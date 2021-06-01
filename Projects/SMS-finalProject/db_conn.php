<?php  

$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "smsdb";

$conn = mysqli_connect($server_name, $username, $password, $db_name);

//check connection
if(!$conn){
    die("Error: Database could not connect. " . mysqli_connect_error());
}
