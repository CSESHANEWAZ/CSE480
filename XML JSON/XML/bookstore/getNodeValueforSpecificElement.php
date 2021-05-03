<?php

    $xml=simplexml_load_file("bookstore.xml") or die("Error: cannot create object.");

    // print_r($xml);

    echo $xml->book[0]->title . "<br>";
    echo $xml->book[0]->author . "<br>";
    echo $xml->book[0]->edition . "<br>";
    echo $xml->book[0]->price . "<br>";

    echo "<br><br>";

    echo $xml->book[1]->title . "<br>";
    echo $xml->book[1]->author . "<br>";
    echo $xml->book[1]->edition . "<br>";
    echo $xml->book[1]->price . "<br>";
?>