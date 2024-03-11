<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3></h3>
    <?php
        $vector1 = array();
        $pares = array();
        $impares = array();
        echo "<h3>Arreglo del 1 al 20</h3>";
        for($i = 0; $i < 20; $i++){
            $vector1[$i] = $i+1;
            echo $vector1[$i]."<br>";
        }

        foreach($vector1 as $i => $elementos){
            if($elementos % 2 == 0){
                $pares[$i] = $elementos;
            }
            else{
                $impares[$i] = $elementos;
            }
        }
        echo "<h3>Arreglo de Numeros pares</h3>";
        foreach($pares as $i => $element){
            echo $element."<br>";
        }
        echo "<h3>Arreglo de Numeros Impares</h3>";
        foreach($impares as $i => $element){
            echo $element."<br>";
        }

        
    ?>
</body>
</html>