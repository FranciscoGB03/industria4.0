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
 
