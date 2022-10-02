<?php
    $conec=new mysqli("localhost", "root", "", "ventasfares");
    if ($conec->connect_errno) {
    echo "Fallo al momento de conectar con MySQL: (".$conec->connect_errno.")".$conec->connect_error;
    }

    /* Declarando las variables y tomar los valores provenientes del formulario*/
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $mensaje = $_POST["mensaje"];

    /* Crear la consulta para insertar datos en la tabla contactos */
    $sql_insert = "insert into contactos(nombre, email, sitioweb, mensaje)
    values ('$nombre',' $email','$website',' $mensaje')";

    if ($conec->query($sql_insert)===true) {
        echo '<div align="center">, "La operación se ha realizado con éxito", </div>';
    }
?>