<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
              $.post("control/maquinaria.php",function(datos){
                  $("#tabla").html(datos);
              });            
        });
        </script>
        
        <div>
            <div id="tabla"> 
              
            </div>
        </div>