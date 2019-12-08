<div class='form-centrado form-group d-flex flex-column' align="center">
    <div>
        <fieldset>
            <legend align='center'>Configuración como Cliente</legend><br>                
            <form autocomplete='off' method='POST' action='control/ipcliente.php'>
                <input type='text' class='form-control-lg' id='ipCliente' name='ipCliente' placeholder='IP de servidor externo'><br><br>
                <button type='submit' class='btn btn-outline-success'>Enviar</button>
            </form>
        </fieldset>
    </div>
    <div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $.post("control/ipActualCliente.php", function (datos) {
                    $("#datosipcliente").html(datos);
                });
            });
        </script>
        <div id="datosipcliente"> 

        </div>
    </div>
</div>