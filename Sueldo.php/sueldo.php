<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Funciones en PHP</title>
</head>
<body>
    <header class="Cabecera">
        <h1>Desarrollo de funciones en PHP</h1>
    </header>
    <section class="formulario">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" id="">
            <label for="nombre">Ingrese su nombre:</label>
            <input type="text" id="nombre" name="nombre"> <br>
            <label for="sueldo">Ingrese su sueldo:</label>
            <input type="text" id="sueldo" name="sueldo"> <br>
            <input type="submit" id="submit" value="Calcular"> 
        </form>
        <?php include('funcion1.php');
        if($_SERVER['REQUEST_METHOD']=== "POST"){

            $nom = $_POST['nombre'];
            $suel = $_POST['sueldo'];
            list($IHSS,$Cooperativa) = calcularfares($suel);
            //Cálculos de deducciones y sueldo neto.
            $tdeducciones = $IHSS + $Cooperativa;
            $neto = $suel - $tdeducciones;

            //Imprimir resultados
            echo "<center><p>
            Nombre: $nom <br>
            Sueldo: $suel <br>
            IHSS: $IHSS <br>
            Cooperativa: $Cooperativa <br>
            Total Deducciones: $tdeducciones <br>
            Total a pagar: $neto
            </p></center>";
        }
        
        ?>
    </section>
</body>
</html>