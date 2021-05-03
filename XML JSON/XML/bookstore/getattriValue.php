<?php

    $xml=simplexml_load_file("bookstore.xml") or die("error: cannot create object");

    echo "attribute-1: " . $xml->book[0]['category'] . "<br>";
    echo "attribute-2: " . $xml->book[1]['category'] . "<br>";
    echo "attribute-3: " . $xml->book[2]['category'] . "<br>";
    echo "attribute-4: " . $xml->book[3]['category'] . "<br>";

    echo "<br><br>";

    echo "book-0 language: " . $xml->book[0]->title['lang'] . "<br>";
    echo "book-1 language: " . $xml->book[1]->title['lang'] . "<br>";
    echo "book-2 language: " . $xml->book[2]->title['lang'] . "<br>";
    echo "book-3 language: " . $xml->book[3]->title['lang'] . "<br>";
?>