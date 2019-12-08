<div class='form-centrado form-group d-flex flex-column' align="center">
    <div>
	<fieldset>
		<legend align='center'>Configuración como Servidor</legend><br>                
                <form autocomplete='off' method='POST' action='control/ipservidor.php'>                    
			<input type='text' class='form-control-lg' id='ipServidor' name='ipServidor' placeholder='IP de servidor'><br><br>
			<button type='submit' class='btn btn-outline-success'>Guardar</button>
		</form>                
	</fieldset>
    </div>
    <div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $.post("control/ipActualServidor.php", function (datos) {
                    $("#datosip").html(datos);
                });
            });
        </script>
        <div id="datosip"> 

        </div>
    </div>
</div>