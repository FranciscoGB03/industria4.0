$(consulta_lote());

function consulta_lote(lote){
	
	$.ajax({
		url: '../../control/consultaLote.php',
		type: 'POST',
		dataType: 'html',
		data: {lote: lote},
	})

	.done(function(res){
		$("#tabla_lote").html(res);
	})

}

$(document).on('keyup', '#buscarLote', function(){
	
	var busqueda = $(this).val();
	
	if(busqueda != ""){
		consulta_lote(busqueda);
	}else{
		consulta_lote();
	}
});