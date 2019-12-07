<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){

            var cont = 0;
            var conteos = [];

            $.getJSON("control/graficaStatus.php",function(resultado){
              cont = resultado.length;

              for (var i = 0 ; i < cont ; i++) {
                conteos.push(resultado[i].contador);
              }
            });

            var popCanvas = $("#popChart");
            var popCanvas = document.getElementById("popChart");
            var popCanvas = document.getElementById("popChart").getContext("2d");

            var barChart = new Chart(popCanvas, {
              type: 'bar',
              data: {
                labels: ["Cortadora", "Freidora", "Calidad", "Envasado"],
                datasets: [{
                  label: 'Uso de maquinaria',
                  data: [conteos[0], conteos[1], conteos[2], conteos[3]],
                  backgroundColor: [
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(153, 102, 255, 0.6)'
                  ]
                }]
              }
            });
          });
        </script>
        
        <div>
            <canvas id="popChart" width="600" height="400"></canvas>
        </div>