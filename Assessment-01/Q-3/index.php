<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Board Using Nested For Loop</title>
</head>
<body>

    <h2 align="center">Board-1</h2>

    <table align="center" width="250px" border="1px solid black" cellpadding=3px and cellspacing=0px>
    
        <?php
            for($i = 1; $i <= 6; $i++){

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

    <h2 align="center">Board-2</h2>

    <table align="center" width="250px" border="1px solid black" cellpadding=3px and cellspacing=0px>
    
        <?php
            for($i = 1; $i <= 6; $i++){

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

    <h2 align="center">Board-3</h2>

    <table align="center" width="250px" border="1px solid black" cellpadding=3px and cellspacing=0px>
    
        <?php
            for($i = 1; $i <= 10; $i++){

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