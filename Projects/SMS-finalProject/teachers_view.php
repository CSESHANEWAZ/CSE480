<?php

include("db_conn.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>School Management System | Teachers </title>

	<!-- Bootstrap core CSS     -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">



    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

    <!-- JavaScript link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

	<!-- CSS files -->
	<link rel="stylesheet" href="css/students.css">

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">


	<style>

	</style>

</head>
<body>

	<div>
		<p class="heading"> <strong>School Management System</strong> </p>
	</div>

	<a href="index.php" class="btn btn-dark"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
	<a href="add_teachers.php" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add Teacher</a>

	

	<div class="container-fluid">

		<!--row begins-->
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						</br></br>
						<h4 class="title">List of the Teachers</h4>
						<p class="category"></p>
					</div>
					<div class="content table-responsive table-full-width">
						<?php
						
						//selecting data from database table
						$select_data = "SELECT * FROM teachers";       //attempt select query execution
						if($result = mysqli_query($conn, $select_data)){
							if(mysqli_num_rows($result) > 0){

								echo "<table  border='1'>";
									echo "<tr>";
										echo "<th>FullName</th>";
										echo "<th>Gender</th>";
										echo "<th>Age</th>";
										echo "<th>Phone</th>";
                                        echo "<th>Email Address</th>";
									echo "</tr>";
									while($row = mysqli_fetch_array($result)){
										echo "<tr>";

											echo "<td>" . $row['Name'] . "</td>";
											echo "<td>" . $row['Gender'] . "</td>";
											echo "<td>" . $row['Age'] . "</td>";
											echo "<td>" . $row['Phone'] . "</td>";
                                            echo "<td>" . $row['Email'] . "</td>";

										echo "</tr>";
									}
								echo "</table>";
								mysqli_free_result($result);      
							}else{
								echo "No records matching your query were found.";
							}
						}else{
							echo "ERROR: Could not able to execute $select_data." . mysqli_error($conn);
						}
						
						?>

					</div>
					</div>
				</div><!--row ends-->
				
			</div>
		</div>

	</div>
	
</body>
</html>