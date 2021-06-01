<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['email']) && isset($_POST['re_password']) 
	&& isset($_POST['user_type'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST["password"]);
	$re_pass = validate($_POST['re_password']);
	$user_type = validate($_POST['user_type']);

	$user_data = 'uname='. $uname. 'email='. $email ;


	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		//input fields are Validated with regular expression
		$validName="/^[a-zA-Z ]*$/";
		$validEmail="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
		$uppercasePassword = "/(?=.*?[A-Z])/";
		$lowercasePassword = "/(?=.*?[a-z])/";
		$digitPassword = "/(?=.*?[0-9])/";
		$spacesPassword = "/^$|\s+/";
		$symbolPassword = "/(?=.*?[#?!@$%^&*-])/";
		$minEightPassword = "/.{8,}/";


		//email validation
		if (!empty($_POST["email"])) {

			$email = validate($_POST["email"]);
			
			// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: signup.php?error=Invalid email format&$user_data");
				exit();
			}
		}

		
		//password validation
		// if(!empty($_POST["password"])){

		// 	$pass = validate($_POST["password"]);

		// 	if (!preg_match($uppercasePassword,$pass) || !preg_match($lowercasePassword,$pass) || 
		// 		!preg_match($digitPassword,$pass) || !preg_match($symbolPassword,$pass) || 
		// 		!preg_match($minEightPassword,$pass) || preg_match($spacesPassword,$pass)) {

		// 			header("Location: signup.php?error=Password must be at least one uppercase letter,\n lowercase letter, digit, 
		// 			a special char\n with no spaces and minimum 8 length&$user_data");
		// 			exit();
  		
		// 	}

		// }

	}


	if (empty($uname)) {
		header("Location: signup.php?error=Username is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}
	else if(empty($email)){
        header("Location: signup.php?error=Email is required&$user_data");
	    exit();
	}
	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}
	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE uname='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(username, password, email, user_type) VALUES('$uname', '$pass', '$email', '$user_type')";

           $result2 = mysqli_query($conn, $sql2);

           if ($result2) {
	           	header("Location: signup.php?success=Your account has been created successfully");
	         	exit();
           }else {
	           	header("Location: signup.php?error=oops! unknown error occurred. try agin&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}