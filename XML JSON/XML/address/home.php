<?php

    $xml=simplexml_load_file("address.xml") or die("Error: cannot create object.");

    print_r($xml);
    
    echo "<br><br>";
    
    echo "<b> Name: </b> " . $xml->name . "<br>";
    echo "<b> Email: </b> " . $xml->email . "<br>";
    echo "<b> Phone: </b> " . $xml->phone . "<br>";
    echo "<b> Birthday: </b> " . $xml->birthday . "<br>";

?>