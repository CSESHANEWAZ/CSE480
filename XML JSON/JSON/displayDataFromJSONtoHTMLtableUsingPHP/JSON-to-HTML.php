<?php

    /*Fetching JSON file content using php file_get_contents method*/
    $str_data = file_get_contents("emp_records.json");
    $data = json_decode($str_data, true);
    
    /*Initializing temp variable to design table dynamically*/
    $temp = "<table>";
    
    /*Defining table Column headers depending upon JSON records*/
    $temp .= "<tr><th>Employee Name</th>";
    $temp .= "<th>Designation</th>";
    $temp .= "<th>Company</th>";
    $temp .= "<th>Mobile Number</th></tr>";
    
    /*Dynamically generating rows & columns*/
    for($i = 0; $i < sizeof($data["employees"]); $i++){
        $temp .= "<tr>";
        $temp .= "<td>" . $data["employees"][$i]["empName"] . "</td>";
        $temp .= "<td>" . $data["employees"][$i]["designation"] . "</td>";
        $temp .= "<td>" . $data["employees"][$i]["company"] . "</td>";
        $temp .= "<td>" . $data["employees"][$i]["mob"] . "</td>";
        $temp .= "</tr>";
    }
    
    /*End tag of table*/
    $temp .= "</table>";
    
    /*Printing temp variable which holds table*/
    echo $temp;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /*Style for Table*/
        table, th , td {
        border: 1px solid grey;
        border-collapse: collapse;
        padding: 4px;
        font-family: arial;
        }
        /*Style for Table Header*/
        th {
        background: darkblue;
        color: white;
        text-align: left;
        }
        /*Style for Alternate Rows*/
        table tr:nth-child(odd) {
        background-color: #C2EBC3;
        }
        table tr:nth-child(even) {
        background-color: #FFFFFF;
        }
    </style>
</head>
<body>
    
</body>
</html>