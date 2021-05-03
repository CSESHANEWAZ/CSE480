<?php

    $xml=simplexml_load_file("address2.xml") or die("Error: cannot create object.");
    //print_r($xml);

    echo $xml->name->firstname . " ";
    echo $xml->name->lastname . "<br>";
    echo $xml->email . "<br>";
    echo $xml->phone . "<br>";
    echo $xml->birthday->day . "-";
    echo $xml->birthday->month . "-";
    echo $xml->birthday->year . "<br>";

?>