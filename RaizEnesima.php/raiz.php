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
            <label  for="n1">Ingrese el número dentro de la raíz: <span>*</span></label>
            <input required type="text" id="n1" name="n1"> <br>
            <label  for="n2">Ingrese el índice de la raíz:  <span>*</label>
            <input required type="text" id="n2" name="n2"> <br>
            <input  type="submit" id="submit" value="Calcular"> 
        </form>

        <?php include('funcion1.php');

        if($_SERVER['REQUEST_METHOD']=== "POST"){
            $val1 = $_POST['n1'];
            $val2 = $_POST['n2'];
            $raizval = raiz($val1,$val2);
            echo "<center>La raíz $val2 del valor $val1 da como resultado: $raizval</center>";
        }
        ?>
    </section>
</body>
</html>