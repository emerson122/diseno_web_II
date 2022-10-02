<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8">
    <title>Contáctenos</title>
    <link rel="stylesheet" href="estilospaginas/estiloscss.css">
    </head>
    <body>
        <?php include("encabezadoprincipal.html");?>

        <h2 style="text-align: center">Déjenos sus comentarios</h2>
        <form class="contact_form" action="manipulardatos/agregarcontac.php" method="POST">
            <ul>
                <li>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" placeholder="Ediciones Fares" required/>
                </li>
                <li>
                    <label for="email">Email: </label>
                    <input type="email" name="email" placeholder="edicionesfares@yahoo.com"
                    required/>
                </li>
                <li>
                    <label for="website">Sitio Web:</label>
                    <input type="url" name="website" placeholder="http://www.edicionesfares.com"
                    required/>
                </li>
                <li>
                    <label for="mensaje">Mensaje:</label>
                    <textarea name="mensaje" cols="40" rows="6" required></textarea>
                </li>
                <li>
                    <button class="submit" type="submit">Enviar</button>
                </li>
            </ul>  
        </form>
    </body>
</html>