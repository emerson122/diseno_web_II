<?php
    include("conexion.php");

    if ($_SERVER['REQUEST_METHOD']=='POST') {
         /* Ingresar las variables relacionadas con los inputs*/
        $NomArea = $_POST["NomArea"];
        $observaciones = $_POST["observaciones"];

        /*Agregar la variable que nos permitirá registrar los datos en la base de datos*/
        $sql_insert = "insert into area (Area, Observaciones)
        values ('$NomArea','$observaciones')";

        //Mostrar error si no se ha realizado correctamente
        if ($conec->query($sql_insert)==true) {
            echo "El registro se realizó correctamente.";
        } 
        else {
            echo "Error en la base de datos.";
        }
    }
?>