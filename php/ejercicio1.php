<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    /* realizar un programa en php que dandole valores de $a y $b genere una tabla de 
    $a filas por $b columnas en cada celda escribir los multiplos de 2*/ ?>

    <?php
    $a = 15;
    $b = 4;
    $n = 2;
        echo "<table>";

        for($i = 0; $i < $a; $i++){
            echo "<tr>";
            for($j = 0; $j < $b; $j++){
                echo "<td>".$n."</td>";
                $n+=2;
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
    
    
</body>
</html>