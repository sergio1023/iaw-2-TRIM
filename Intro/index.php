<?php
$primeravariable=5;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Plantilla By SergioSec</title>
        <link rel="stylesheet" href="estilos.css"> 
    </head>
    <body>
            <h1>Esto es mi cabecera</h1>
            <h3><b>Esto es una noticia</b></h3>
            <div>
                <span>
                    <div>
                        <div>
                            <h1>No soy un hijo directo de p</h1>
                        </div>
                    </div>
                 </span>
            </div>
           <div id="contenido">
               <p>Somos
                <?php
                        echo $primeravariable;
                ?>
               </p>
               <div class="noticia">
                   <h1>Titulo</h1>
                    <img src="https://picsum.photos/100/150" alt="">
                    <p>Paréceme, señor mío, que todas estas desventuras que estos días nos han sucedido, sin duda alguna han sido pena del pecado cometido por vuestra merced contra la orden de su caballería, no habiendo cumplido el juramento que hizo de no comer pan a manteles ni con la reina folgar, con todo aque</p>
               </div>
            </div>
            <footer>
                    Pie de pagina
            </footer>
    </body>
</html>