<?php
    /*Establecer la variable que nos permitirá la conexión*/
    $conec = new mysqli("localhost","root","","pedidos_evaluacion2parcial");
    /*Condicional que nos permitirá saber si existe un error dentro de la conexión a MySQL*/
    if($conec->connect_errno){
        echo "fallo en la conexión de MySQL: (".$conec->connect_errno.")".$conec->connect_error;
    }
?>