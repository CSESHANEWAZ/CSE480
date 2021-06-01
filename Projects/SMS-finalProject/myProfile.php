<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && !isset($_SESSION['id'])) {   
?>

<!DOCTYPE html>
<html>
<head>
	<title>School Management System | My Profile</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

	<!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" /> -->

</head>
<body>
	<div class="container d-flex justify-content-center align-items-center"
	style="min-height: 100vh">
	<?php if ($_SESSION['user_type'] == 'faculty') {?>
		<!-- For Admin -->
		<div class="card" style="width: 18rem;">
			<img src="images/admin-default.png" class="card-img-top" alt="admin image">
			<div class="card-body text-center">
				<h5 class="card-title">
				<?php echo "Welcome " . $_SESSION['username'] . " !" ?>
				</h5>
				<a href="profile.php" class="">Edit Profile</a> </br>
				<a href="changePass.php" class="">Change Password</a> </br>
				<a href="users.php" class="">View Users</a> </br></br>
				<a href="logout.php" class="btn btn-dark">Back</a>

			</div>
		</div>
		</div>

	<?php }else { ?>

		<!-- FORE USERS -->
		<div class="card" style="width: 18rem;">
			<img src="images/user-default.png" class="card-img-top" alt="admin image">
				<div class="card-body text-center">
				<h5 class="card-title">
					<?php echo "Welcome " . $_SESSION['username'] . " !" ?>
				</h5> </br>
				<a href="profile.php" class="btn btn-primary">Edit Profile</a> </br> </br>
				<a href="changePass.php" class="btn btn-primary">Change Password</a> </br></br>
				<hr>
				<a href="index.php" class="btn btn-dark"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
			</div>
		</div>
	<?php } ?>
	</div>


		<footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <!-- <ul>
                        <li>
                            <a href="#">
                               <strong>School</strong>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                              <strong>Management</strong>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <strong>System</strong>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <strong>Admin</strong>
                            </a>
                        </li>
                    </ul> -->
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, All right reserved &nbsp;<i class="ti-heart heart"></i> &nbsp;Developed By <a target="_blank" href="https://cseshanewaz.me/">Md. Shanewaz Akib</a>
                </div>
            </div>
        </footer>

</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>

