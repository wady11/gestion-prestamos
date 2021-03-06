'use strict';

let amount = document.getElementById('amount');
let interes = document.getElementById('interest');
let cuotas = document.getElementById('term');
let currentDate = document.getElementById('start_date');
let totalRecaudado = document.getElementById('total-amount');
let tableDiv = document.getElementById('tBody')

//array
let date = [];

//ADD EVENT LISTENER
window.addEventListener('load', () => {

        //empty date
        const fecha_vacia = () => {
            let boolanValor = false;
            if ($("#start_date").val() == '') {
                boolanValor = true;
            }
            return boolanValor;
        }

        //calculate cout
        const calculateCuot = (interest, frequencyValue, valor) => {
            //metodo frances
            let cuot = valor * (Math.pow(1 + interest / 100, frequencyValue) * interest / 100) / (Math.pow(1 + interest / 100, frequencyValue) - 1);
            return cuot;
        }

        //appendt to table
        const insertTable = (time, moneyAmount, interestMoney, coutValor) => {
            let mount = moneyAmount;
            let totalGanado = 0;
            let row = {};
            let a = currentDate.value
            let momentDate = moment(a);
            momentDate.add(1, 'month');

            for (let index = 1; index <= time; index++) {

                let payInterest = Number.parseFloat(mount * (interestMoney / 100));
                let payCapital = coutValor - payInterest;

                mount = Number.parseFloat(mount - payCapital);
                totalGanado = totalGanado + coutValor
                date[index] = momentDate.format('DD-MM-YYYY');
                momentDate.add(1, 'month');

                row = {
                    coutPerido: index,
                    cuota: coutValor,
                    pay: payInterest,
                    money: payCapital,
                    total: mount,
                    datei: date[index]
                };
                //append card
                let card = generateCard(row);
                $('#evento tbody').append(card);

            }
            //append
            $('#total-amount').val(totalGanado.toFixed(2));

          

        }

        //generate card
        let generateCard = (info) => {
            let row = ` 
                        <tr>
                            <td>${info.coutPerido}</td>
                            <td>${info.datei}</td>
                            <td>${info.cuota.toFixed(2)}</td>
                            <td>${info.money.toFixed(2)}</td>
                            <td>${info.pay.toFixed(2)}</td>
                            <td>${info.total.toFixed(2)}</td>
                      </tr> `;

            return row

        }

        //Clean buttom 
        $('#clean').click(function() {
            if (fecha_vacia() == false) {
                amount.value = "";
                interes.value = "";
                cuotas.value = "";
                currentDate.value = "";
                totalRecaudado.value = '';
                tableDiv.innerHTML = "";
                $('#montoAmortizacion').val("");
                $('#fechaAmortizacion').val("");
                $('#interesAmortizacion').val("");
                $('#periodoAmortizacion').val("");
                $('#plazoAmortizacion').val("");

            }

        });

        //insert dataill function
        let insertarDetalles = () => {
            $('#montoAmortizacion').val(amount.value);
            $('#fechaAmortizacion').val(currentDate.value);
            $('#interesAmortizacion').val(interes.value);
            $('#periodoAmortizacion').val(cuotas.value);
            $('#plazoAmortizacion').val('mensual');
        }


        $('#print').click(function () { 
            
                let imprimir = document.getElementById('printcard').innerHTML; //obtenemos el objeto a imprimir
                
                 
                a.print(); 
            
        });

        // click event buttom
        $('#btn-calculator').click(function() {

            //empty date 
            let emptyDate = fecha_vacia();

            if (emptyDate == true) {
                Swal.fire(
                    'Oops...',
                    'Por favor instroduzca la fecha de inicio',
                    'error'
                )
            } else {

                //after clean function
                $('#montoAmortizacion').val("");
                $('#fechaAmortizacion').val("");
                $('#interesAmortizacion').val("");
                $('#periodoAmortizacion').val("");
                $('#plazoAmortizacion').val('');
                tableDiv.innerHTML = "";

                //variable
                const mainAmount = Number.parseFloat(amount.value);
                const mainInterest = Number.parseFloat(interes.value);
      
                const mainCouts = Number.parseFloat(cuotas.value);

                 //fill detaills
                insertarDetalles();    


                //interest
                let coutValor = calculateCuot(mainInterest, mainCouts, mainAmount)

                //insert into table
                insertTable(mainCouts, mainAmount, mainInterest, coutValor);

            }

        });

    }) //DOCUMENT READY FUNCTION