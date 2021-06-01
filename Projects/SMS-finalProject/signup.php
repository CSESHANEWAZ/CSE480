<?php


?>

<!DOCTYPE html>
     <?php if(!defined('PREPEND_PATH')) define('PREPEND_PATH', ''); ?>
     <?php if(!defined('datalist_db_encoding')) define('datalist_db_encoding', 'UTF-8'); ?>
<html>
     <head>
          <meta charset="<?php echo datalist_db_encoding; ?>">
          <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
          <meta name="description" content="">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <title>
          <?php echo ucwords('School Management System'); ?> | <?php echo "Sign Up"; ?>
          </title>

          <link id="browser_favicon" rel="shortcut icon" href="<?php echo PREPEND_PATH; ?>images/favicon.png">

          <link rel="stylesheet" href="css/signup.css">
          <link rel="stylesheet" href="css/password.css">
     
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     

     <style>
          body{
               background-image: url("images/school.jpg");
          }
          form{
               background-color: #A9A9A9;
          }
          label{
               color: black;
               font-size: 15px;
          }
          .err{
               color: red;
          }
          h4{
               text-align: center;
          }
     </style>


     </head>

     <body>
          <form action="signup-check.php" method="post">
               <h4>SIGN UP</h4>

               <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
               <?php } ?>

               <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
               <?php } ?>



               <label>Username</label>
               <?php if (isset($_GET['uname'])) { ?>
                    <input type="text" name="uname" placeholder="Enter Username"
                         value="<?php echo $_GET['uname']; ?>"><br>
               <?php }else{ ?>
                    <input type="text" name="uname" placeholder="Enter username"><br>
               <?php }?>


               <label>Email Address</label>
               <?php if (isset($_GET['email'])) { ?>

                    <input type="text" name="email" placeholder="Enter your email address" value="<?php echo $_GET['email']; ?>"><br>

               <?php }else{ ?>

                    <input type="text" name="email" placeholder="Enter your email"><br>

               <?php }?>


               <label>Select your type</label>
               <?php if (isset($_GET['user_type'])) { ?>
               <select class="form-select mb-3" name="user_type" aria-label="Default select example">
                    <option selected value="student">Student</option>
                    <option value="faculty">Faculty</option>
                    <option value="parent">Parent</option>
                    <option value="guest">Guest</option>
               </select>

               <?php } else{ ?>

               <select class="form-select mb-3" name="user_type" aria-label="Default select example">
                    <option selected>Student</option>
                    <option>Faculty</option>
                    <option>Parent</option>
                    <option>Guest</option>
               </select>

               <?php } ?>
                    
               <label>Password</label>
               <!-- <input type="password" name="password" placeholder="Password"><br> -->
               <div class="input-group">
                    <input type="password" name="password" id="password" class="form-control" data-toggle="password" placeholder="Enter password"
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required
                    >
               </div>

               <div id="message">
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
               </div>
               

               <label>Confirm Password</label>
               <input type="password" name="re_password" placeholder="confirm password"><br>

               <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

               <button type="submit" class="btn btn-primary">Sign Up</button>
               <a href="index.php" class="">Already have an account? Click here</a>
          </form>

     </body>

     <script type = "text/javascript" src="js/password-validation.js"></script>
</html>