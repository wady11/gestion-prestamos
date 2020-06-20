'use strict';
//visual value
let comboBox = document.getElementById('funcion');
let montoPago = document.getElementById('montovisual');
let mostrarInteres = document.getElementById('interespago');
let totalPago = document.getElementById('valorpago');
let cambiaMonto = document.getElementById('montopago');

let monto = 0;

//calculo de interes
function interesFunction(element,valor){
    let interes = Number.parseFloat(element);
    monto = Number.parseFloat(valor) 
    return (interes / 100) * monto;   
}


    //alert function
    function controlPayment(valor){
        let hiddenValor = document.getElementById('valorrealpago');
        totalPago.value = '';
        totalPago.disabled = false;
        window.addEventListener('click',(e)=>{
          if(totalPago.value > valor){
            Swal.fire(
              'ooops',
              `el monto a abonar es mayor a la deuda!`,
              'error'
            )
            totalPago.value = '';
            totalPago.focus();
          }else{
              hiddenValor.value = totalPago.value;
          }

        })
        
    
    }
    
    
    
      comboBox.addEventListener('change',(e)=>{
        let keyValue = e.target.value;
    
       switch (keyValue) {
         case 'interes':
             if(interesMostrar.value == '') {
                Swal.fire(
                    'ooops',
                    `debe ingresar un cliente para proceder el pago!`,
                    'error'
                  ) 
             }else{
                totalPago.value =  interesFunction(interesMostrar.value, monto);
             }
                
                 totalPago.disabled = true;
           break;
         
         case 'abono' : 
              // hiddenMonto.value = 0;
                if(monto == 0){
                    Swal.fire(
                        'ooops',
                        `debe ingresar un cliente para proceder el pago!`,
                        'error'
                      ) 
                }else{
                    controlPayment(monto);   

                }
                  
           break;
             
         case 'capital' : 
        //  hiddenMonto.value = 0;
         if(monto == 0){
            Swal.fire(
                'ooops',
                `debe ingresar un cliente para proceder el pago!`,
                 'error'
                ) 
            }else{
                controlPayment(monto);    
            }
             break;

    
         default:
           break;
       }
    
    })
    
    //
    const pagoComponent =  {
        interesFunction
    }




