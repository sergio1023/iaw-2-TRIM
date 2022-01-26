<?php

function crear_piramide ($numero) {
    $cadena = null;
    for ($i = 1; $i <= $numero; $i++) {
        for ($h = $i; $h <= $i; $h++) {
            $cadena .= "*";
        }
        echo $cadena."<br />";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Piramide By SergioSec</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <fieldset>
                <legend>Número y color de tu pirámide</legend>
                <label for="numero">Número:</label>
                <input name="numero" id="numero" type="text" tabindex="1" />
            </fieldset>
            <input type="submit" name="enviar" value="enviar">
            </form>
        </body>
</html>
<?php
$numero = $_POST['numero'];
crear_piramide ($numero);
?>

