

<?php 
    session_start();
    if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
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
                    <?php echo ucwords('School Management System'); ?> | <?php echo "Sign In"; ?>
                </title>

                <link id="browser_favicon" rel="shortcut icon" href="<?php echo PREPEND_PATH; ?>images/favicon.png">

                <!-- bootstrap link -->
                <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"  
                integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
                integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

                <!-- Font Awesome link -->
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" 
                integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

                <!-- css file link -->
                <link rel="stylesheet" href="css/login-page.css">
                <link rel="stylesheet" href="css/password.css">


                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
                        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
                        crossorigin="anonymous">
                </script>
                

                <style>
                    body{
                        background-image: url("images/school.jpg");
                        background-position: center;
                    }
                    .heading{
                        background-color: #A9A9A9;
                        text-align: center;
                        position: justify;
                        font-family: cambria, sans-serif;
                        font-size: 28px;
                    }
                    .sign-up-btn{
                        text-align: left;
                    }
                    button {
                        float: right;
                        background: #555;
                        padding: 10px 15px;
                        color: #fff;
                        border-radius: 5px;
                        margin-left: 10px;
                        border: none;
                    }
                    .error{
                        color: red;
                    }
                </style>

            </head>


            <body>
                <div>
                    <p class="heading"> <strong>School Management System</strong> </p>
                </div>

                <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">

                    <form class="border shadow p-3 rounded" action="verify/login-check.php" method="post" style="width: 450px; background-color: #A9A9A9; font-size: 15px;" >
                        
                        <h4 class="text-center p-3">LOGIN</h4>
                        <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?=$_GET['error']?>
                        </div>
                        <?php } ?>

                        <div class="sign-up-btn">
                            <small>Create an account. <a href="signup.php" class="btn btn-primary btn-sm">Sign up</a> </small>
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <span class="error">* </span>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                        </div>

                        <div class="mb=3">
                            <label for="password" class="form-label">Password</label>
                            <span class="error">* </span>
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



                            
                            <input type="checkbox" onclick="toggle()" id = "tog">Show Password
                        </div>

                        </br>
                        <div class="mb-0">
                            <label class="form-label">Select User Type:</label>
                            <span class="error">* </span>
                        </div>

                        <select class="form-select mb-3" name="user_type" aria-label="Default select example">
                            <option selected value="student">Student</option>
                            <option value="faculty">Admin</option>
                            <option value="faculty">Faculty</option>
                            <option value="parent">Parent</option>
                        </select>

                        <div class="checkbox">
                            <label class="control-label" for="rememberMe">
                                <input type="checkbox" name="rememberMe" id="rememberMe" value="1">
                                <?php echo "Remember me"; ?>
                                <!-- <?php echo $Translation['remember me']; ?> -->
                            </label>
                        </div>

                        <small>Forget your password? <a href="#">Click here</a></small>

                        

                        <div class="row">
                            <div class="col-sm-offset-1 col-sm-6">
                                </br>
                                <button name="signIn" type="submit" id="submit" value="signIn" class="btn btn-primary"><?php echo 'sign in'; ?></button>
                            </div>
					    </div>
                    </form>

                </div>
            </body>

        
            
            <!-- javascript file link -->
            <script type = "text/javascript" src="js/show-password.js"></script>
            <script type = "text/javascript" src="js/password-validation.js"></script>

        </html>
        <?php
    }
    else{
        header("Location: header-user.php");
    } 
?>
