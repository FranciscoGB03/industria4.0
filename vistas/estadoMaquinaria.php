
<script src="../resources/bootstrap/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script>
        $(document).ready(function(){
              $.post("control/status.php",function(datos){
                  $("#tabla2").html(datos);
              });            
                setTimeout(refrescar, 10000);
          });
                
                function refrescar(){
                    location.reload();
                  }
        </script>
        
        <div>
            <div id="tabla2"> 
              
            </div>
        </div>
 
