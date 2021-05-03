<?php

    $xml=simplexml_load_file("bookstore.xml") or die("error: cannot create object");

    foreach ($xml->children() as $books) {
        echo $books->title['lang'] . "<br>";
    }

?>