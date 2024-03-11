<?php
    $vector2 = array("lunes","martes","miercoles","jueves","Viernes");

    echo "Cantidad de elementos del vector: ".count($vector2)."<br>";

    for($i = 0; $i < count($vector2); $i++){
        //echo $vector2[$i]."<br>";
        if($vector2[$i] == "miercoles"){
            echo "clases de sis256";
        }
    }
?>