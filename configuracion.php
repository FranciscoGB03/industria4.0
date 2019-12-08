<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Industria 4.0</title>    
        <?php include("componentes/enlaces.php"); ?>
    </head>
    <body>
        <div>
            <?php
                include('vistas/navbar.php');
            ?>
        </div>
        <div class="d-flex justify-content-between mx-5">
            <div>
                <?php
                    include('vistas/servicioWebServidor.php');
                ?>
            </div>
            <div>
                <?php
                    include('vistas/servicioWebCliente.php');
                ?>
            </div>
        </div>
    </body>
</html>