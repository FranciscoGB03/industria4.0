<!DOCTYPE html>
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
        <div>
            <?php
                include('vistas/estadoMaquinaria.php');           
            ?>  
        </div>
        <div>
            <?php
                include('vistas/estadoProduccion.php');            
            ?>  
        </div>          
    </body>
</html>
