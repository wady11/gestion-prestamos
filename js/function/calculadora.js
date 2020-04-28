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

          
            //calculate cout
          const calculateCuot = (interest,frequencyValue,valor)=>{
                //metodo frances
                let cuot = valor * (Math.pow(1+interest/100,frequencyValue)*interest/100) / (Math.pow(1+interest/100, frequencyValue)-1);
                return cuot;
          }

            //appendt to table
          const insertTable = (time,moneyAmount,interestMoney,coutValor)=>{
                let mount = moneyAmount;
                let totalGanado = 0;
                let row = {};
                let a = currentDate.value
                let momentDate = moment(a);
                momentDate.add(1, 'month');
                
                for (let index = 1; index <= time; index++) {
                    
                    let payInterest = Number.parseFloat(mount * (interestMoney/100));
                    let payCapital = coutValor - payInterest;
                     mount= Number.parseFloat(mount-payCapital);
                     totalGanado =totalGanado +coutValor
                    date[index] = momentDate.format('DD-MM-YYYY');
                    momentDate.add(1, 'month');

                    row = {
                        coutPerido : index,
                        cuota : coutValor,
                        pay : payInterest,
                        money : payCapital,
                        total : mount,
                        datei : date[index]
                    }

                    let card =  generateCard(row);    
                    $('#evento tbody').append(card);
                    
                    // $().append()
                } 
                $('#total-amount').replaceWith(totalGanado.toFixed(2));
                return row;
               
             }

                //generate card
             let generateCard = (info)=>{
                        let  row = `
                        <tr>
                            <td>${info.coutPerido}</td>
                            <td>${info.datei}</td>
                            <td>${info.cuota.toFixed(2)}</td>
                            <td>${info.money.toFixed(2)}</td>
                            <td>${info.pay.toFixed(2)}</td>
                            <td>${info.total.toFixed(2)}</td>
                      </tr>
                       `;
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

             //insert into table
            let tableValor = insertTable(mainCouts,mainAmount,mainInterest,coutValor);

            console.log(tableValor.couta);

            // generateCard();

          
      
           
       });
         

})//DOCUMENT READY FUNCTION
