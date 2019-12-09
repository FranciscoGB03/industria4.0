<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Industria 4.0</title>    
        <?php include("componentes/enlaces.php"); ?>
    </head>
    <body>
        <div class="sticky-top">
            <?php
                include('vistas/navbar.php');
            ?>
        </div>
        <div class="d-flex justify-content-center mx-5">
            <div>
                <h2>Enviar datos a Empaquetado</h2>
                <form action="./ws/cliente.php">
                    <input type="submit" class="btn btn-outline-success" value="Enviar datos">                    
                </form>
            </div>
        </div>
    </body>
</html>