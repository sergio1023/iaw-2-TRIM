<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta http-equiv="refresh" content="150">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Piramide By SergioSec</title>
        <link rel="stylesheet" href="estilopiramide.css">
    </head>
    <body>
        <div id="contenido">
            <form action="index.php" method="get">
                <fieldset>
                    <legend>Número de filas para tu pirámide</legend>
                    <label for="numero">Número:</label>
                    <input name="numero" id="numero" type="number" tabindex="1" />
                </fieldset>
                <input type="submit" name="enviar" value="enviar">
            </form>
            <?php

            function crear_piramide ($numero) {
            $cadena = null;
            for ($i = 1; $i <= $numero; $i++) {
                for ($h = 1; $h <= $i; $h++) {
                    #$cadena .= "*";
                    echo '<span style="color: '. sprintf("#%06X", mt_rand(0, 0xFFFFFF)) .'">*</span>';
                }
                echo "<br>";
            }
            }
            ?>
            <?php
            $numero = $_GET['numero'];
            crear_piramide ($numero);
            ?>
        </div>
    </body>
</html>
