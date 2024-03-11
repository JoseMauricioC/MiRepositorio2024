<?php
    echo "<h2>trlen</h2>";
    $cadena = "Villazon Bolivia";

    echo strlen($cadena);

    echo "<hr>";
//----------------------------------
    echo "<h2>explode</h2>";
    $cadena1 = "lunes martes miercoles jueves viernes";

    $datos = explode(" ",$cadena1);

    print_r($datos);

    echo "<hr>";
//---------------------------------------
    echo "<h2>implode</h2>";

    $vector = ["manzana","banana","pera"];

    $datos = implode("-",$vector);

    print $datos;

    echo "<hr>";
    //----------------------------
    echo "<h2>substr</h2>";

    $cadena2 = "hola mundo";

    $resul = substr($cadena2, 0,4);
    $resul2 = substr($cadena2, 5,5);

    print_r($resul."<br>");
    print_r($resul2);

    echo "<hr>";
    //----------------------------
    echo "<h2>chop</h2>";

    $vector = ["manzana","banana","pera"];

    $datos = implode("-",$vector);

    print $datos;

    echo "<hr>";
    //----------------------------

?>