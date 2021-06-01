<?php  
session_start();
include "../db_conn.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['user_type'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$user_type = test_input($_POST['user_type']);

	if (empty($username)) {
		header("Location: ../index.php?error=Username is Required");
	}else if (empty($password)) {
		header("Location: ../index.php?error=Password is Required");
	}else {

		// Hashing the password
		$password = md5($password);
        
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		
        $result = mysqli_query($conn, $sql);


        // if (mysqli_num_rows($result) === 1) {
        // 	// the user name must be unique
        // 	$row = mysqli_fetch_assoc($result);

        // 	if ($row['password'] === $password && $row['user_type'] == $user_type) {

        // 		// $_SESSION['name'] = $row['name'];
        // 		// $_SESSION['id'] = $row['id'];
        // 		$_SESSION['user_type'] = $row['user_type'];
        // 		$_SESSION['username'] = $row['username'];

        // 		header("Location: ../header-user.php");

        // 	}else {
        // 		header("Location: ../index.php?error=Incorect User Id or password");
        // 	}
        // }else {
        // 	header("Location: ../index.php?error=Incorect User Id or password");
        // }

        if ($result -> num_rows > 0) {

        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
        	
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
			$_SESSION['user_type'] = $row['user_type'];
			$_SESSION['username'] = $row['username'];

			header("Location: ../header-user.php");


        }else {
        	header("Location: ../index.php?error=Incorrect username or password");
        }

	}
	
} else {
	header("Location: ../index.php");
}