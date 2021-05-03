<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate jaccard distance using php</title>
</head>
<body>
    <?php


    function jaccardSimilarity( $item1, $item2, $separator = "," ) {
        
        $item1 = array_unique(array_map('trim', explode( $separator, strtolower($item1) )));
        $item2 = array_unique(array_map('trim', explode( $separator, strtolower($item2) )));
        $arr_intersection = array_intersect( $item2, $item1 );
        $arr_union = array_unique(array_merge( $item1, $item2 ));
        $coefficient = count( $arr_intersection ) / count( $arr_union );
        
        return $coefficient;
    }



    $readFile_1 = fopen("file/file-1.txt", "r") or die("Unable to open file 1!");
    $str1 = fread($readFile_1, filesize("file/file-1.txt"));

    $readFile_2 = fopen("file/file-2.txt", "r") or die("Unable to open file 2!");
    $str2 = fread($readFile_2, filesize("file/file-2.txt"));

    $writeFile = fopen('file/output.ext', 'w');


    echo "Jaccard Distance = " . jaccardSimilarity( $str1, $str2, " " );;





    fclose($readFile_1);
    fclose($readFile_2);
    fclose($writeFile);
    ?>
</body>
</html>