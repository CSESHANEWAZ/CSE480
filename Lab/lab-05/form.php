<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

    <?php
        $nameErr = $fnameErr = $lnameErr = $ip_addressErr = $passwordErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $password = $ip_address = $website = $birthday = $gender = $mobile = $comment = $sql =$result = $valid="";
    

        // $valid = "";

        // if (isset($_POST['submit'])){

        //     $valid = true;

        //     if (empty($_POST["name"])) {
        //         $nameErr = "Name is required";
        //         $valid = false;
        //     }else {
        //         $name = test_input($_POST["name"]);
        //         $name_p = '/^[a-zA-Z\s]*$/';
        //         if (!preg_match($name_p, $name)) {
        //             $nameErr = "Only letters and white space allowed";
        //             $valid = false;
        //         }
        //     }

        //     if (empty($_POST["email"])) {
        //         $emailErr = "Email is required";
        //         $valid = false;
        //     }else {
        //         $email = test_input($_POST["email"]);
        //         $email_p = '/^[a-z\d\.-_]+@([a-z\d-]+\.)+[a-z]{2,6}$/i';
        //         if (!preg_match($email_p, $email)) {
        //             $emailErr = "Invalid email format";
        //             $valid = false;
        //         }
        //     }


        //     if (empty($_POST["password"])) {
        //         $passwordErr = "password is required";
        //         $valid = false;
        //     } else {
        //         $password = test_input($_POST["password"]);
        //         $password_p = '/^(?=.*\d)(?=.*[a-z]).{8,32}$/';
        //         if(!preg_match($password_p, $password)){
        //             $passwordErr = "use an uppercase, a lowercase, a number, and no special character";
        //             $valid = false;
        //         }
        //     }

        //     if (empty($_POST["ip_address"])) {
        //         $ip_addressErr = "IP address is required";
        //         $valid = false;
        //     } else {
        //         $ip_address = test_input($_POST["ip_address"]);
        //     }

        //     if (empty($_POST["website"])) {
        //         $websiteErr = "website is required";
        //         $valid = false;
        //     } else {
        //         $website = test_input($_POST["website"]);
        //         if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) 
        //         {
        //             $websiteErr = "Invalid URL";
        //             $valid = false;
        //         }    
        //     }

        //     if (empty($_POST["gender"])) {
        //         $genderErr = "Gender is required";
        //         $valid = false;
        //     } else {
        //         $gender = test_input($_POST["gender"]);
        //     }


        //     if (empty($_POST["comment"])) {
        //         $comment = "";
        //     } else {
        //         $comment = test_input($_POST["comment"]);
        //     }

        // }
    

        // function test_input($data) {

        //     $data = trim($data);
        //     $data = htmlentities($data);
        //     $data = stripslashes($data);
        //     $data = htmlspecialchars($data);
        //     return $data;
        // }

        // if($valid){
        //     header("Location: db_conn.php");
        // }



    
    ?>



    <div class="container">
        <h2>Registration Form</h2>
        <p><span class="error">* required field</span></p>

        <form method="post" action="process.php">

            <label for="fname">Name: </label>
            <input type="text" name="name" id="" size="25" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>" 
            placeholder="Enter first name" />
            <span class="error">* <?php echo $nameErr?></span>


            <br><br>
                
            <label for="email">E-mail:</label>
            <input type="text" name="email" size="25" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>" 
            placeholder="example@gmail.com">
            <span class="error">* <?php echo $emailErr?></span>
            <br><br>


            <label for="password">Password:</label>
            <input type="password" name="password">
            <span class="error">* <?php echo $passwordErr;?></span>
            <br><br>

            <label for="ip_address">IP-address:</label>
            <input type="text" name="ip_address" id="">
            <span class="error">* <?php echo $ip_addressErr;?></span>
            <br><br>

            <label for="website">Website:</label>
            <input type="text" name="website" id="" size="25" placeholder="www.example.com">
            <span class="error">* <?php echo $websiteErr;?></span>
            <br><br>

            <label for="birthday">Date of birthday:</label>
            <input type="date" name="birthday" id="">
            <br><br>

            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
            <span class="error">* <?php echo $genderErr;?></span>
            <br><br>

            <label for="mobile">Mobile:</label>
            <input type="text" name="mobile_num" id="">
            <br><br>

            <label for="comment">Brief info:</label> <br>
            <textarea name="comment" id="" cols="30" rows="5" maxlength="15"></textarea>


            <br><br>
            <input type="submit" class="registerbtn" name="submit" value="SUBMIT">
            
        </form>
    </div>
</body>
</html>