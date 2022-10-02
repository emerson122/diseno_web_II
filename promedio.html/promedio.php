<?php
    $num1 = $_POST["n1"];
    $num2 = $_POST["n2"];
    $num3 = $_POST["n3"];
    $num4 = $_POST["n4"];

    $resultado = ($num1 + $num2 + $num3 + $num4) / 4;

    echo "El resultado del promedio es: ", $resultado, "<br>";
?>