<!--<table class="table table-bordered table-hover">
	<thead>
		<tr class="table-warning">
			<td align="center"><b>Maquinaria</b></td>
			<td align="center"><b>Contador</b></td>
			<td align="center"><b>Estado</b></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row">Cortadora</th>
			<td align="center">VALOR DE BD</td>
			<td align="center">VALOR DE BD</td>
		</tr>
		<tr>
			<th scope="row">Freidora</th>
			<td align="center">VALOR DE BD</td>
			<td align="center">VALOR DE BD</td>
		</tr>
		<tr>
			<th scope="row">Contenedor</th>
			<td align="center">VALOR DE BD</td>
			<td align="center">VALOR DE BD</td>
		</tr>
	</tbody>
</table>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
              $.post("control/status.php",function(datos){
                  $("#tabla2").html(datos);
              });            
        });
        </script>
        
        <div>
            <div id="tabla2"> 
              
            </div>
        </div>
 