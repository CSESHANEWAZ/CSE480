<?php if(!defined('PREPEND_PATH')) define('PREPEND_PATH', ''); ?>
<?php if(!defined('datalist_db_encoding')) define('datalist_db_encoding', 'UTF-8'); ?>
<?php include("db_conn.php"); ?>
<?php include("libs/fetch_data.php"); ?>
<?php include("libs/count_records.php"); ?>
<?php session_start(); ?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<title>SCHOOL MANAGEMENT SYSTEM | Homepage</title>

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
   
    <!-- JavaScript CDN link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>


    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!-- CSS file link -->
    <link rel="stylesheet" href="css/students.css">

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-background-color="black" data-active-color="danger">
        <div class="sidebar-wrapper">
                <div class="logo"><a href="index.php" class="simple-text">School Management System</a></div>

                <ul class="nav">
                    <li class="active">
                        <a href="dashboard.html">
                            <i class="ti-dashboard"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="students_view.php">
                            <i class="ti-user"></i>
                            <p>Students</p>
                        </a>
                    </li>
                    <li>
                        <a href="feescollection_view.php">
                            <i class="ti-wallet"></i>
                            <p>FeesCollection</p>
                        </a>
                    </li>

                    <li>
                        <a href="classes_view.php">
                            <i class="ti-crown"></i>
                            <p>Classes</p>
                        </a>
                    </li>
                    <li>
                        <a href="sessions_view.php">
                            <i class="ti-key"></i>
                            <p>Sessions</p>
                        </a>
                    </li>


                    <li>
                        <a href="classattendance_view.php">
                            <i class="ti-bar-chart-alt"></i>
                            <p>Attendance</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        
        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="header-user.php">DASHBOARD</a>
                    </div>
                    

                    <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-user"></i>
                                <p class="notification"></p>
                                <p><strong><?php echo $_SESSION['username'] ?></strong></p>
                                <b class="caret"></b>
                            </a>
                        </li>
                        
                        <li><a href="myProfile.php" class="btn btn-dark" style="float: right;"> <i class="fa fa-user"></i><strong>My Profile</strong> </a></li>
                        <li><a href="logout.php" class="btn navbar-btn btn-warning" style="float: right;"> <i class="fa fa-power-off"></i><strong style="color:black">Logout</strong> </a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>





            <?php include 'main.php';?>



        </div>



        
        


