<?php
    $maximo  = 0;
    $palabra_larga = "";
    $cadena = "Ingenieria en Ciencias de la Computacion";

    $vector = explode(" ",$cadena);

    foreach($vector as $elementos){
        if(strlen($elementos) > $maximo){
            $maximo = strlen($elementos);
            $palabra_larga = $elementos;
        }
    }
    echo $maximo."<br>".$palabra_larga;

?>