<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<link rel="stylesheet" type="text/css" href="resources/librerias/alertifyjs/css/alertify.css">
<link rel="stylesheet" type="text/css" href="resources/librerias/alertifyjs/css/themes/default.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script src="resources/librerias/alertifyjs/alertify.js"></script>
<script>
    $(document).ready(function () {
        $("#enviar").click(function () {
            $.post("control/temperatura.php", function (datos) {
                $("#tabla").html(datos);
            });
            alerta();
        });
    });

</script>

<div class='form-centrado form-group' align="center">
    <fieldset>

        <div></div>

        <div>
            <legend align='center'>Temperatura</legend><br>
        </div>
        <button id="enviar" type='submit' class='btn btn-outline-success' >Actualizar</button>


        <div class="div-centrado">
            <div id="tabla"> 

            </div>
        </div>
    </fieldset>
</div>
