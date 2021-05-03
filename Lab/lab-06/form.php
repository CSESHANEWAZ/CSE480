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