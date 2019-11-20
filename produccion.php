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
        <!--<script type="text/javascript" src="resources/js/consulta_lote.js"></script>-->
        <script>
        $(document).ready(function(){
              $.post("control/consulta_lote.php",function(datos){
                  $("#tabla_lote").html(datos);
              });            
        });
        </script>
    </head>
    <body>
        <div>
            <?php
                include('vistas/navbar.php');
            ?>
        </div>
        <div align="center">
            <img src="componentes/produccion.jpg" width="300" height="500">
        </div>
        <div>
            <!--<section>
                <input type="text" name="buscarLote" id="buscarLote" placeholder="Buscar lote">
            </section>-->
            <section id="tabla_lote">
                
            </section>
    </body>
</html>
