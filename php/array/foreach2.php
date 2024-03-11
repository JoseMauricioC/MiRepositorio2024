<?php
    $vector = [1,2,3,4,5,6];
    $suma = 0;

    foreach($vector as $elem){
        $suma+=$elem;
    }
    echo "La Suma es ".$suma;

    echo "<hr>";
    //otra forma
    $vector1 = [1,2,3,6,6,6];
    $suma1 = 0;

    for($i = 0; $i < count($vector1); $i++){
        $suma1+=$vector1[$i];
    }
    echo "La Suma es ".$suma1;
    echo "<hr>";

    $v1 = ["4","5","6"];
    $v2 = ["4","1","2"];
    $v3 = array();

    foreach($v1 as $elemt){
        $v3 = $v1
    }
?>