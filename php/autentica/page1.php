<?php

include('background.php');

session_start();

#$background = "";

if (isset($_POST['color'])){
    header(Location:"config.php");
    $background = ($_SESSION['color']) 
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page1</title>
</head>
<body bgcolor="">
    <div id="primera"><p><b>El fondo de esta <h1>PRIMERA</h1> página debe de ser del  color 
        del archivo de configuración</b></p>
    </div>
</body>
</html>