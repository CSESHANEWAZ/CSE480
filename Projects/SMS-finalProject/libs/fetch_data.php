<?php 
function getrecentfees($table){
	include("libs/db_connect.php");
   $sql="SELECT * FROM $table ORDER BY id DESC LIMIT 10";

   //  if ($result=mysqli_query($con,$sql))
   //    {
   //    $rowcount=mysqli_num_rows($result);
   //    if ($rowcount==0) {
   //   	   echo "No Recent Fees";
   //    }

   //    foreach ($result as $recentfees => $feesdetails) {
   //      $StudentID = $feesdetails['Student'];
   //      $BalanceID = $feesdetails['Balance'];

   //      $sql1 = "SELECT FullName FROM students WHERE id='$StudentID'";
   //      $sql2 = "SELECT Balance FROM students WHERE id='$BalanceID'";



   //      $getfullname = mysqli_query($con, $sql1);
   //      $getbalance = mysqli_query($con, $sql2);


   //       echo '<tr>
   //       <td>'.$feesdetails['id'].'</td>
   //       <td>'.$getfullname.'</td>
   //       <td>'.$feesdetails['PaidAmount'].'</td>
   //       <td>'.$getbalance.'</td></tr>';
   //    }
   // }


   //     if($result = mysqli_query($con, $table)){
   //      if(mysqli_num_rows($result) > 0){
   //          echo "<table>";
   //              echo "<tr>";
   //                  echo "<th>Id</th>";
   //                  echo "<th>Name</th>";
   //                  echo "<th>Amount</th>";
   //                  echo "<th>Balance</th>";
   //              echo "</tr>";
   //              while($row = mysqli_fetch_array($result)){
   //                  echo "<tr>";
   //                      echo "<td>" . $row['id'] . "</td>";
   //                      echo "<td>" . $row['first_name'] . "</td>";
   //                      echo "<td>" . $row['last_name'] . "</td>";
   //                      echo "<td>" . $row['email'] . "</td>";
   //                      echo "<td>" . $row['age'] . "</td>";
   //                  echo "</tr>";
   //              }
   //          echo "</table>";
   //          mysqli_free_result($result);         //free result set, mysqli_free_result() function frees the memory associated with the result 
   //      }else{
   //          echo "No records matching your query were found.";
   //      }
   //  }else{
   //      echo "ERROR: Could not able to execute $table." . mysqli_error($con);
   //  }
  
   mysqli_close($con);

}
?>