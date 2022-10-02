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
            <label  for="nombre">Ingrese su nombre: <span>*</span></label>
            <input required type="text" id="nombre" name="nombre"> <br>
            <label  for="n1">Ingrese el primer número:  <span>*</label>
            <input required type="text" id="n1" name="n1"> <br>
            <label  for="n2">Ingrese el segundo número:  <span>*</label>
            <input required type="text" id="n2" name="n2"> <br>
            <label  for="n3">Ingrese el tercer número:  <span>*</label>
            <input required type="text" id="n3" name="n3"> <br>
            <label  for="n4">Ingrese el cuarto número:  <span>*</label>
            <input required type="text" id="n4" name="n4"> <br>
            <input  type="submit" id="submit" value="Calcular"> 
        </form>

        <?php include('funcion1.php');
        if($_SERVER['REQUEST_METHOD']=== "POST"){
            $nombre = $_POST['nombre'];
            $val1 = $_POST['n1'];
            $val2 = $_POST['n2'];
            $val3 = $_POST['n3'];
            $val4 = $_POST['n4'];
            $promedio = promed($val1,$val2,$val3,$val4);
            echo "<center>$nombre, el promedio de los valores ingresados da como resultado: $promedio</center>";
        }
        ?>
    </section>
</body>
</html>