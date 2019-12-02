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
        <?php
        include('vistas/navbar.php');
        ?>  

        <div class="ventana" id="alerta">
            <div id="cerrarventana">
                <a href="javascript:cerrarven()"><img src="componentes/error.png"></a>
            </div>
            Alerta
            <p id="texto"></p>
        </div>

        <div class="div-centrado">
            <div><!--parte central-->
                <!-- Prueba de commit por fer--> 
                <?php
                include('vistas/temp.php');
                ?>
            </div>
        </div>

        <script>
           
           window.onload = function alerta(){
                
                document.getElementById(alerta).style.display="block";
            
           }
        </script>

    </body>
</html>