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
            <label for="num1">Ingrese el primer número:</label>
            <input type="text" id="num1" name="num1"> <br>
            <label for="num2">Ingrese el segundo número:</label>
            <input type="text" id="num2" name="num2"> <br>
            <input type="submit" id="submit" value="Calcular"> 
        </form>
        <?php include('funcion1.php');
        if($_SERVER['REQUEST_METHOD']=== "POST"){

            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];
            $n3 = sumar($n1,$n2);
            echo "<center>Resultado: $n1 + $n2 = $n3</center>";
        }
        
        ?>
    </section>
</body>
</html>