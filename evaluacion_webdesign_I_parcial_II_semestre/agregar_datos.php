<?php
    include("conexion.php");

    if ($_SERVER['REQUEST_METHOD']=='POST') {
         /* Ingresar las variables relacionadas con los inputs*/
        $nombre = $_POST["nombre"];
        $telefono = $_POST["telefono"];
        $email = $_POST["email"];
        $direccion = $_POST["direccion"];
        $producto = $_POST["producto"];
        $cantidad = $_POST["cantidad"];
        $hora = $_POST["hora"];
        $ubicacion = $_POST["ubicacion"];
        $observaciones = $_POST["observaciones"];

        /*Agregar la variable que nos permitirá registrar los datos en la base de datos*/
        $sql_insert = "insert into pedidos (nombre, telefono, email, direccion, producto,
        cantidad,hora,ubicacion, observaciones)
        values ('$nombre', ' $telefono', '$email', '$direccion', '$producto', '$cantidad',
         '$hora', '$ubicacion', '$observaciones')";

        //Mostrar error si no se ha realizado correctamente
        if ($conec->query($sql_insert)==true) {
            echo "El registro se realizó correctamente.";
        } 
        else {
            echo "Error en la base de datos.";
        }
    }
?>