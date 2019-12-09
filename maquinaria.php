<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagina de inicio</title>
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
        <div class="d-flex justify-content-md-start">
            <div align="center">
                <img src="componentes/produccion.jpg" width="300" height="500">
            </div>        
            <div>
                <?php
                    include('vistas/estandarMaquinaria.php');
                ?>
            </div>
            <div>
                <?php
                    include('vistas/estadoMaquinaria.php');
                ?>
            </div>
            <div>
                <?php
                    include('vistas/graficaMaquinaria.php');
                ?>
            </div>
        </div>
    </body>
</html>
