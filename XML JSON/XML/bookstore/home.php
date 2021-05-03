<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php

        $xml=simplexml_load_file("bookstore.xml") or die("Error: cannot create object.");

        // print_r($xml);

        echo "<h1>Book List: </h1>";

        echo "<br>";

        foreach ($xml->children() as $books) {
            echo "Book Title: " . $books->title . ",<br>";
            echo "Author: " . $books->author . ",<br>";
            echo "Edition: " . $books->edition . ",<br>";
            echo "Price: " . $books->price . ",<br>";

            echo "<br><br>";
        }



        echo "<table border='1'>";
            echo "<tr>";
                echo "<th>Title</th>";
                echo "<th>Author</th>";
                echo "<th>Edition</th>";
                echo "<th>Price</th>";
            echo "</tr>";

            foreach($xml->children() as $books){
                echo "<tr>";
                    echo "<td>" . $books->title . "</td>";
                    echo "<td>" . $books->author. "</td>";
                    echo "<td>" . $books->edition . "</td>";
                    echo "<td>". $books->price . "</td>";
                echo "</tr>";
            }
        echo "</table>";

    ?>

</body>
</html>




