<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
              $.post("control/consultaLote.php",function(datos){
                  $("#tabla3").html(datos);
              }); 
                
                setTimeout(refrescar, 10000); 
        });
                
                function refrescar(){
                        location.reload();
                }
        </script>
        
        <div>
            <div id="tabla3"> 
              
            </div>
        </div>
