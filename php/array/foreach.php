<?php
    $vector = array("uno", "dos", "tres");

    foreach($vector as $elementos){
        echo $elementos."<br>";
    }

    $vector2 = array("clave1" => "elemento1", "clave2" => "elemento2");

    foreach($vector2 as $claves => $elemento){
        echo $claves." = ".$elemento."<br>";
    }

    $vector3 = ["lunes", "martes","miercoles","jueves","viernes"];

    foreach($vector3 as $elements){
        echo $elements."<br>";
    }
?>

