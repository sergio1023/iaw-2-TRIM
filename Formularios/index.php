<?php

$bienvenido=true;
$nombre='';
$apellidos='';
$edad_20_39='';
$edad_40_59='';
$edad_60_79='';

if(isset($_POST["enviar"])){
    $bienvenido=false;
    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];

    if(isset($_POST["edad"])){
        /*if($_POST["edad"]=="20-39") {
                $edad_20_39='checked';
        }*/
       /* $variable=(true)?'valormentira':'valorverdad';
        $edad_20_39=(false)?'checked':'';

        if($_POST["edad"]=="40-59") {
            $edad_40_59='checked';
        }
        
        if($_POST["edad"]=="60-79") {
            $edad_60_79='checked';
        }*/
        
        $edad_20_39=($_POST["edad"]=="20_39")?'checked':'';
        $edad_40_59=($_POST["edad"]=="49_50")?'checked':'';
        $edad_60_79=($_POST["edad"]=="60_79")?'checked':'';
        
        ${"edad".$_POST["edad"]}='checked';
    }   
    }


/*
echo "<br>";

print_r($_GET);
echo "GET:<br>"; 

print_r($_POST);
echo "POST:<br>"; 

print_r($_COOKIES);
echo "COOKIES:<br>"; 

print_r($_SESSION);
echo "SESSION:<br>"; 

print_r($_REQUEST);
echo "REQUEST:<br>"; 

print_r($_SERVER);
echo "SERVER:<br>"; 
*/
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <div>
        <form action="index.php" method="post">
            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre:</label>
                <input name="nombre" id="nombre" type="text" tabindex="1" value="<?=$nombre?>" />
                <label for="apellidos">Apellidos:</label>
                <input name="apellidos" id="apellidos" type="text" tabindex="2" value="<?=$apellidos?>" />
            </fieldset>
            <fieldset>
                <legend>Edad</legend>
                <label><input type="radio" tabindex="20" name="edad" value="20_39" <?=$edad_20_30?>/> 20-39</label>
                <label><input type="radio" tabindex="21" name="edad" value="40_59" <?=$edad_40_59?>/> 40-59</label>
                <label><input type="radio" tabindex="22" name="edad" value="60_79" <?=$edad_60_70?>/> 60-79</label>
            </fieldset>
            <input type="submit" name="enviar" value="enviar">
        </form>
    </div>
</body>
</html>