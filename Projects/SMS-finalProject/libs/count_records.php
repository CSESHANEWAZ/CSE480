<?php

  function countrecords($table){

    include("libs/db_connect.php");

    
    $sql = "SELECT COUNT(*) FROM $table";
    $result = mysqli_query($con, $sql);
    
    $recordcount = mysqli_num_rows($result);


    echo $recordcount;
  


  }

?>
