<?php
        /* Realizar y comprobar la conexión con PHP MyAdmin*/
    $conec=new mysqli("localhost", "root", "", "institutofares");

    if ($conec->connect_errno) {
    echo "Fallo al momento de conectar con MySQL: (".$conec->connect_errno.")".$conec->connect_error;
    }
    echo "Conexión realizada con exito, $conec->host_info.", "<br>";

    /* Ingresar las variables relacionadas con los inputs*/
    $identidad = $_POST["identidad"];
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $sexo = $_POST["sexo"];
    $estado = $_POST["estado"];
    $observaciones = $_POST["observaciones"];

    /* Crear la consulta que nos permitirá ingresar datos dentro
    de la tabla de base de datos en PHPMyAdmin*/
    $sql_insert = "insert into profesores(identidad, nombre, direccion, telefono, sexo, estado, observaciones)
    values ('$identidad',' $nombre','$direccion',' $telefono','$sexo', '$estado','$observaciones')";

    /*Si la inserción se realiza correctamente*/
    if ($conec->query($sql_insert)==true) {
        echo "Los datos se ingresaron correctamente.";
    }
?>