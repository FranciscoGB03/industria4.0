<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Produccion</title>
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
        <div>
            <?php
                include('vistas/estadoProduccion.php');
            ?>
    </body>
</html>
