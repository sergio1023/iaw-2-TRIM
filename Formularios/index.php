<?php

$bienvenido=true;
$autor='';
$libro='';
$editorial='';
$fechaa='';
$fechav='';

$errores= false;
$error_autor = false;
$error_libro = false;
$error_editorial = false;
$error_fechaa = false;
$error_fechav = false;

if(isset($_POST["enviar"])){
    $bienvenido=false;

    $autor = (isset($_POST["autor"]))?$_POST["autor"]:'';
    if(strlen($autor)<3){
        $error_autor = true;
    }

    $libro = (isset($_POST["libro"]))?$_POST["libro"]:'';
    if(strlen($libro)<3){
        $error_libro = true;
    }

    $editorial = (isset($_POST["editorial"]))?$_POST["editorial"]:'';
    if(strlen($editorial)<3){
        $error_editorial = true;
    }

    $fechaa = (isset($_POST["fechaalquiler"]))?$_POST["fechaalquiler"]:'';
    if(date($fechaa)<'2022-01-01'){
        $error_fechaa = true;
    }

    $fechav = (isset($_POST["fechavuelta"]))?$_POST["fechavuelta"]:'';
    if(date($fechav)<'2022-01-15'){
        $error_fechav = true;
    }

    $autor = (isset($_POST["autor"]))?$_POST["autor"]:'';
    if(strlen($autor)<5){
        $error_autor = true;
    }

   /* if(isset($_POST["edad"])){
        ${"edad".$_POST["edad"]}='checked';
    }*/   

    if($error_autor || $error_libro | $error_editorial | $error_edad || $error_fechaa || $error_fechav){
        $errores = true;
    }
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
        /*
        $edad_20_39=($_POST["edad"]=="20_39")?'checked':'';
        $edad_40_59=($_POST["edad"]=="49_50")?'checked':'';
        $edad_60_79=($_POST["edad"]=="60_79")?'checked':'';
        */
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
    <link rel="stylesheet" href="css/estilo.css">
    <title>Formulario</title>
</head>
<body>
    <h2><b>Verifica si tienen errores</b></h2>
    <?php


    ?>
    <div>
        <form action="index.php" method="post">
            <fieldset>
                <legend>BIBLIOTECA</legend>
                <label <?=($error_autor)?'class="errora"':'';?> for="autor">Autor:</label>
                <input <?=($error_autor)?'class="errora"':'';?> name="autor" id="autor" type="text" tabindex="1" value="<?=$autor?>" />
                <label <?=($error_libro)?'class="errorl"':'';?> for="libro">Libro:</label>
                <input <?=($error_libro)?'class="errorl"':'';?> name="libro" id="libro" type="text" tabindex="2" value="<?=$libro?>"/>
                <label <?=($error_editorial)?'class="errore"':'';?> for="apellidos">Editorial:</label>
                <input <?=($error_editorial)?'class="errore"':'';?> name="apellidos" id="apellidos" type="text" tabindex="2" value="<?=$apellidos?>"/>
            </fieldset>
            <fieldset>
                <legend>Fechas</legend>
                <label <?=($error_autor)?'class="errorfa"':'';?> for="fechaalquiler">Fecha Alquiler:</label>
                <input <?=($error_autor)?'class="errorfa"':'';?> name="fechaalquiler" id="fechaalquiler" type="date" tabindex="1" value="<?=$fechaa?>" />
                <label <?=($error_autor)?'class="errorfv"':'';?> for="fechavuelta">Fecha Vuelta:</label>
                <input <?=($error_autor)?'class="errorfv"':'';?> name="fechavuelta" id="fechavuelta" type="date" tabindex="1" value="<?=$fechav?>" />
               </fieldset>
            <input type="submit" name="enviar" value="enviar">
        </form>
    </div>
</body>
</html>