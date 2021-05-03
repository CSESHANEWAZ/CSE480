<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board Using PHP</title>
</head>
<body>

    <h2 align="center">Chess Board</h2>

    <table align="center" width="250px" border="1px solid black">
    
        <?php
            for($i = 1; $i <= 8; $i++){

                echo "<tr>";
                for($j = 1; $j <= 8; $j++){

                    $total = $i + $j;

                    if($total % 2 == 0){
                        echo "<td height=30px width=30px bgcolor=white></td>";
                    }
                    else{
                    echo "<td height=30px width=30px bgcolor=black></td>";
                    }
                }
                echo "</tr>";
            }
        ?>

    </table>
    
</body>
</html>