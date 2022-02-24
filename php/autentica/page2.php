<?php

include('background.php');

session_start();

if (isset($_POST['firstpage'])){
    $firstpage = $_POST['firstpage'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page2.php</title>
</head>
<body background="">
    <div id="Segunda"><p><b>El fondo de esta <h1>SEGUNDA</h1> página debe de ser del  color 
        que elijamos en el archivo de configuración</b></p></div>
</body>
</html>