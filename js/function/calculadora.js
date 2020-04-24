'use strict';
 

 //ADDEVENTLISTENER
window.addEventListener('load',()=>{
     //datetimepicker
     $("#start_date").datepicker();

    //empty date
    let fecha_vacia = ()=>{
         if ($("#start_date").val() == '') {
                Swal.fire(
                     'Oops...',
                    'Por favor instroduzca la fecha de inicio',
                    'error'
                  )
                this.focus();
              }
        }


       $('#btn-calculator').click(function () { 
        
            //empty date 
            fecha_vacia();
            
                
           
       });
         

})

// $(document).ready(function() {

//     //datetimepicker
//     $('#start_date').datepicker();



//     $("#btn-loan-calculator").click(function() {

//         if ($("#start_date").val() == '') {
//             alertify.alert("Please enter the start date");
//             return false;
//         }

//         var frequency = 1;
//         var term = $("#term").val();
//         var period = $("#term_period").val();
//         switch (period) {
//             case "day":
//                 frequency = 365;
//                 break;
//             case "week":
//                 frequency = 52;
//                 break;
//             case "month":
//                 frequency = 12;
//                 break;
//             case "year":
//                 frequency = 1;
//                 break;
//         }

//         var loan_amount = $("#amount1").val();
//         var interest_rate = ($("#interest_rate").val() / 100) / frequency;

//         var payment_amount = 0;

//         var r = (1 + interest_rate);
//         var pow = Math.pow(r, term);

//         payment_amount = loan_amount * ((interest_rate * pow) / (pow - 1));

//         $("#loan-total-amount").html(addCommas(payment_amount.toFixed(2)));

//         var table_scheds = '<table class="table table-bordered">';

//         table_scheds += '<tr>';
//         table_scheds += '<td style="text-align:center">Date</td>';
//         table_scheds += '<td style="text-align:center">Payment Amount</td>';
//         table_scheds += '<td style="text-align:center">Principal Amount</td>';
//         table_scheds += '<td style="text-align:center">Interest Amount</td>';
//         table_scheds += '<td style="text-align:center">Balance Owed</td>';
//         table_scheds += '</tr>';

//         var total_amount = 0;
//         for (var i = 0; i < term; i++) {
//             var compound_interest = (loan_amount * interest_rate);
//             var principal_amount = (payment_amount - compound_interest).toFixed(2);
//             var balance_owed = (loan_amount - principal_amount).toFixed(2);

//             total_amount += payment_amount;

//             var payment_date = new Date($("#start_date").val());

//             switch ($("#term_period").val()) {
//                 case "day":
//                     payment_date.setDate(payment_date.getDate() + (i + 1));
//                     break;
//                 case "week":
//                     payment_date.setDate(payment_date.getDate() + ((i + 1) * 7));
//                     break;
//                 case "month":
//                     payment_date.setMonth(payment_date.getMonth() + (i + 1));
//                     break;
//                 case "year":
//                     payment_date = new Date(payment_date.getFullYear() + (i + 1), payment_date.getMonth(), payment_date.getDate());
//                     break;
//             }

//             var d_date = (payment_date.getMonth() + 1) + "/" + payment_date.getDate() + "/" + payment_date.getFullYear();

//             var inputs = '<input type="hidden" name="payment_date[]" value="' + d_date + '" />\n\
// <input type="hidden" name="payment_balance[]" value="' + balance_owed + '" />\n\
// <input type="hidden" name="payment_interest[]" value="' + compound_interest.toFixed(2) + '" />\n\
// <input type="hidden" name="payment_amount[]" value="' + payment_amount.toFixed(2) + '" />\n\
// ';

//             table_scheds += '<tr>';
//             table_scheds += '<td>' + inputs + d_date + '</td>';
//             table_scheds += '<td>' + addCommas(payment_amount.toFixed(2)) + '</td>';
//             table_scheds += '<td>' + addCommas(principal_amount) + '</td>';
//             table_scheds += '<td>' + addCommas(compound_interest.toFixed(2)) + '</td>';
//             table_scheds += '<td>' + addCommas(balance_owed) + '</td>';
//             table_scheds += '</tr>';

//             loan_amount = balance_owed;
//         }
//         table_scheds += '</table>';

//         $("#amount").val(total_amount);
//         $("#sp-current-balance").html(addCommas(total_amount.toFixed(2)));
//         $("#current_balance").val(total_amount.toFixed(2));

//         $("#div-payment-scheds").html(table_scheds);

//     });
// });

// function addCommas(nStr) {
//     nStr += '';
//     x = nStr.split('.');
//     x1 = x[0];
//     x2 = x.length > 1 ? '.' + x[1] : '';
//     var rgx = /(\d+)(\d{3})/;
//     while (rgx.test(x1)) {
//         x1 = x1.replace(rgx, '$1' + ',' + '$2');
//     }
//     return x1 + x2;
// }
