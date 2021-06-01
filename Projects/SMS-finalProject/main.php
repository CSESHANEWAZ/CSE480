        <div class="content">
            <div class="container-fluid">
                <?php include("libs/alerts.php"); ?>

                <div class="row"><!--row begins-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Students</strong></p>
                                            <?php countrecords("students"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a target= "_blank" href="students_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>View
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
					
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-wallet"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p> <strong>FeesCollection</strong></p>
                                            <?php countrecords("feescollection"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="feescollection_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>View
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-id-badge"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Teachers</strong></p>
                                           <?php countrecords("teachers"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a target= "_blank" href="teachers_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>View
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-harddrives"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Subjects</strong></p>
                                           <?php countrecords("subjects"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="subjects_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>View
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                </div><!--row ends-->

                <div class="row">  <!---row start--->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-crown"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Classes</strong></p>
                                            <?php countrecords("classes"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="classes_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>View
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-primary text-center">
                                            <i class="ti-cup"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Exam Results</strong></p>
                                            <?php countrecords("examresults"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="examresults_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>View
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Parents</strong></p>
                                            <?php countrecords("parents"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="parents_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>View
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-tag"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Exams</strong></p>
                                           <!-- <?php countrecords("examcategories"); ?> -->
                                        </div>
                                    </div>
                                </div>
                                <a href="examcategories_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>View
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>

                </div>      <!---row end--->



                <!--row begins-->
                <div class="row">

                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-key"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Sessions</strong></p>
                                            <?php countrecords("sessions"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="sessions_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>View
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-bar-chart-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Attendance</strong></p>
                                            <?php countrecords("classattendance"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="classattendance_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>View
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div><!--row ends-->






                <!--row begins-->
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                        <div class="header">
                        <h4 class="title">Recent Fee Collection</h4>
                        <p class="category">Fees collection by date</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                    <?php
                    
                        //selecting data from database table
                        $select_data = "SELECT * FROM feescollection";       //attempt select query execution
                        if($result = mysqli_query($conn, $select_data)){
                            if(mysqli_num_rows($result) > 0){

                                echo "<table  border='1'>";
                                    echo "<tr>";
                                        echo "<th>Id</th>";
                                        echo "<th>Student</th>";
                                        echo "<th>Class</th>";
                                        echo "<th>Session</th>";
                                        echo "<th>Paid Amount</th>";
                                        echo "<th>Balance</th>";
                                        echo "<th>Date of Payment</th>";
                                        echo "<th>Remarks</th>";
                                    echo "</tr>";
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<tr>";
                                            echo "<td>" . $row['id'] . "</td>";
                                            echo "<td>" . $row['Student'] . "</td>";
                                            echo "<td>" . $row['Class'] . "</td>";
                                            echo "<td>" . $row['Session'] . "</td>";
                                            echo "<td>" . $row['PaidAmount'] . "</td>";
                                            echo "<td>" . $row['Balance'] . "</td>";
                                            echo "<td>" . $row['Date'] . "</td>";
                                            echo "<td>" . $row['Remarks'] . "</td>";
                                        echo "</tr>";
                                    }
                                echo "</table>";
                                mysqli_free_result($result);         //free result set, mysqli_free_result() function frees the memory associated with the result 
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
            </div>

        <!--cards and widgets above here-->

        
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

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
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, All right reserved &nbsp;<i class="ti-heart heart"></i> &nbsp;Developed By <a target="_blank" href="https://cseshanewaz.me/">Md. Shanewaz Akib</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Welcome to <b> School Management System admin</b> - a beautiful system for managing your school."

            },{
                type: 'success',
                timer: 3000
            });

    	});
	</script>

</html>