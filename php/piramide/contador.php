<?php
         if(isset($_COOKIE['nvisita'])){
            $nvisita = 1;
        } else {
            $nvisita = $_COOKIE['nvisita'];
            $nvisita = $nvisita + 1;
        }
        setcookie('nvisita',$nvisita);
    ?>