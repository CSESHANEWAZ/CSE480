<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['user_type'])) {   ?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php echo ucwords('School Management System'); ?> | <?php echo "Homepage"; ?>
        </title>

        <!-- CDN file -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"  
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <body>
            <div class="container d-flex justify-content-center align-items-center"
                    style="min-height: 100vh">
                        <?php if ($_SESSION['user_type'] == 'Faculty') {?>
                            <!-- For Admin -->
                            <div class="card" style="width: 18rem;">
                            <img src="images/admin-default.png" 
                                class="card-img-top" 
                                alt="admin image">
                            
                            <!-- logout -->
                            <div class="card-body text-center">
                                <h5 class="card-title">
                                    <?=$_SESSION['username']?>
                                </h5>
                                <a href="logout.php" class="btn btn-dark">Logout</a>
                            </div>

                            </div>

                            <?php include 'php/member.php'; ?>



                            <!-- student -->

                        <?php } elseif ($_SESSION['user_type'] == 'Student') { ?>
                            <!-- FOR USERS -->
                            <div class="card" style="width: 18rem;">
                            <img src="img/user-default.png" 
                                class="card-img-top" 
                                alt="admin image">
                            <div class="card-body text-center">
                                <h5 class="card-title">
                                    <?=$_SESSION['username']?>
                                </h5>
                                <a href="logout.php" class="btn btn-dark">Logout</a>
                            </div>
                            </div>


                        <?php }elseif ($_SESSION['user_type'] == 'Parent') { ?>
                            <!-- FORE USERS -->
                            <div class="card" style="width: 18rem;">
                            <img src="img/user-default.png" 
                                class="card-img-top" 
                                alt="admin image">
                            <div class="card-body text-center">
                                <h5 class="card-title">
                                    <?=$_SESSION['username']?>
                                </h5>
                                <a href="logout.php" class="btn btn-dark">Logout</a>
                            </div>
                            </div>


                        <?php }else { ?>
                            <!-- FORE USERS -->
                            <div class="card" style="width: 18rem;">
                            <img src="img/user-default.png" 
                                class="card-img-top" 
                                alt="admin image">
                            <div class="card-body text-center">
                                <h5 class="card-title">
                                    <?=$_SESSION['username']?>
                                </h5>
                                <a href="logout.php" class="btn btn-dark">Logout</a>
                            </div>
                            </div>
                        <?php } ?>

            </div>
    </body>
</html>


<?php }else{
	header("Location: index.php");
} ?>