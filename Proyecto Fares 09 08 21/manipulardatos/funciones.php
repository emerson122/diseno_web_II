<?php

    function ConectarDB(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $bd = "ventasfares";
    
        $conexion = new mysqli($server,$user,$pass,$bd)
            or die ("Error inesperado, intente más tarde");
            return $conexion;
    }

    function disconnectDB($conexion){
        $close = $conexion->close();
        return $close;
    }

    function datoscombo(){
        $conexion = ConectarDB();
        mysqli_set_charset($conexion, "utf8");
        //Generamos  la consulta
        $sql = "SELECT * FROM cursos";
        if (!$result = $conexion->query($sql)) die("Error al consultar los datos");
        //Para las filas de resultados como un array:
        if ($result->num_rows > 0) {
            //Extraer los datos de cada fila
                while($row = $result->fetch_assoc()); {
                    echo '<option value="'.$row['idcurso'].'">'.$row['nomcurso'].
            '</option>';
                }
        }
        disconnectDB($conexion);
    }
?>