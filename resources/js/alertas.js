/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function alerta (){
    $.ajax({
        type: "POST",
        url:"control/alerta.php",
        success: function(r){
            if(r >= 17){
              alertify.success("Alerta: Temperatura Alta");
          } else{
              if(r<=15){
                  alertify.success("Alerta: Temperatura Baja");
              }
              alertify.success("Temperatura Buena");
          }     
        }
    });
}
