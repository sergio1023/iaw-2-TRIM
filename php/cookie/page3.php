<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page3 SergioSec</title>
</head>
<body>
<?php
    include("contador.php");
    ?>
     <?php 
    if($nvisita == 1) { ?>
    <p><h1>Cookies</h1></p> 
    <?php } else { ?>
            Es tu <?=$nvisita?> visita 
    <?php } ?>
    <a href="page1.php">Pagina1</a>
    <a href="page2.php">Pagina2</a>
</body>
</html>