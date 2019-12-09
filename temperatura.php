<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">

        <title>Temperatura</title>
        <?php
        include('componentes/enlaces.php');
        ?>
    </head>
    <body>
        <div class="sticky-top">
        <?php
        include('vistas/navbar.php');
        ?> 
        </div>
        <div id="alerta">
            
        </div>
        <div class="div-centrado">
            <div><!--parte central-->
                <!-- Prueba de commit por fer--> 
                <?php
                include('vistas/temp.php');
                ?>
            </div>
        </div>
    </body>
</html>