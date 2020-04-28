'use strict';
     
 let amount =  document.getElementById('amount');
 let interes = document.getElementById('interest');
 let cuotas = document.getElementById('term');
 let currentDate = document.getElementById('start_date');
//  const table = document.querySelector('#evento tbody')

 let date =[];
 

 //ADDEVENTLISTENER
window.addEventListener('load',()=>{

    //empty date
       const fecha_vacia = ()=>{
            if ($("#start_date").val() == '') {
                Swal.fire(
                     'Oops...',
                    'Por favor instroduzca la fecha de inicio',
                    'error'
                  )
                
              }
          }

          

          const calculateCuot = (interest,frequencyValue,valor)=>{
                //metodo frances
                let cuot = valor * (Math.pow(1+interest/100,frequencyValue)*interest/100) / (Math.pow(1+interest/100, frequencyValue)-1);
                return cuot;
          }

          const insertTable = (time,moneyAmount,interestMoney,coutValor)=>{

                let row = {};
                let a = currentDate.value
                let momentDate = moment(a);
                momentDate.add(1, 'month');
                
                for (let index = 1; index <= time; index++) {
                    
                    let payInterest = Number.parseFloat(moneyAmount * (interestMoney/100));
                    let paymoney = coutValor - payInterest;
                    let totalPay = Number.parseFloat(moneyAmount-paymoney);
                    date[index] = momentDate.format('DD-MM-YYYY');
                    momentDate.add(1, 'month');

                    row = {
                    coutPerido : index,
                    cuota : coutValor,
                    pay : payInterest,
                    money : paymoney,
                    total : totalPay,
                    datei : date[index]
                    }

                    let card =  generateCard(row);    
                    $('#evento tbody').append(card);
                } 

                return row;

                

             }

             let generateCard = (info)=>{
                        let  row = `
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                            Explorer 4.0
                            </td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                            <td>hola</td>
                         </tr>
                       `;
                        
                    console.log(info)
                        return row
                    
                        // <td class="sorting_1" tabindex="0">22009.17</td>
             }
             


        //click event buttom
       $('#btn-calculator').click(function () { 
                //variable
            const mainAmount = Number.parseFloat(amount.value);
            const mainInterest = Number.parseFloat(interes.value);
            const mainCouts = Number.parseFloat(cuotas.value);
            

            //empty date 
            fecha_vacia();

            //interest
            let coutValor = calculateCuot(mainInterest,mainCouts,mainAmount)

            console.log(coutValor);

             //insert into table
            let tableValor = insertTable(mainCouts,mainAmount,mainInterest,coutValor);

            console.log(tableValor);

            // generateCard();

          
      
           
       });
         

})//DOCUMENT READY FUNCTION
