<?php

include_once("funciones/sesiones.php");
include_once("templates/header.php");
include_once("templates/header-bar-user.php");
include_once("templates/navegation-User.php");

?>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Calculadora de préstamo</h1>
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="inqbox float-e-margins">
            <div class="inqbox-content" style="display: block;">
                <div class="tabs-container">
                    <ul class="nav nav-tabs tab-border-top-danger">
                        <li class=""><a data-toggle="tab" href="#sectionA" aria-expanded="false">Información del Préstamo</a></li>
                        <li><a data-toggle="tab" href="#sectionB">Información del Préstamo</a></li>
                        <li><a data-toggle="tab" href="#sectionC">Adjuntos</a></li>
                        <li><a data-toggle="tab" href="#sectionE">Prenda</a></li>
                        <li class="active"><a data-toggle="tab" href="#sectionF" >Calculadora de préstamo</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sectionA" class="tab-pane fade">
                            <div style="text-align: center">
                                <h3>Información del Préstamo</h3>
                                <div id="required_fields_message">Los campos en rojo son requeridos</div>
                                <ul id="error_message_box"></ul>
                            </div>
                            
                            <!--
                            <div class="form-group"><label class="col-sm-2 control-label"><label for="loan_type" class="wide">Tipo de Préstamo:</label></label>
                                <div class="col-sm-10">
                                    <select name="loan_type" id='loan_type' class='form-control'>
<option value="">Seleccionar Tipo de Préstamo</option>
<option value="8">test</option>
<option value="9">norman_type</option>
</select>
                                    <input type="hidden" id="loan_type_id" name="loan_type_id" value="0" />
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            -->

                            <div class="form-group"><label class="col-sm-2 control-label"><label for="inp-customer" class="wide required" aria-required="true">Cliente:</label></label>
                                <div class="col-sm-10">
                                    <input type="text" name="inp-customer" value="marcos leyva torres" id="inp-customer" class="form-control" placeholder="Escribe el nombre aquí..." style="display:none" autocomplete="off">

                                    <span id="sp-customer" style="display: ">
                                        marcos leyva torres                                        <span><a href="javascript:void(0)" title="Remove Customer" class="btn-remove-row" style="display: inline;"><i class="fa fa-times"></i></a></span>
                                    </span>
                                    <input type="hidden" id="customer" name="customer" value="139">

                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label"><label for="account" class="wide required" aria-required="true">Cuenta #:</label></label>
                                <div class="col-sm-10">
                                    <input type="text" name="account" value="139" id="account" class="form-control">
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label"><label for="description" class="wide">Descripción:</label></label>
                                <div class="col-sm-10">
                                    <textarea name="description" cols="17" rows="5" id="description" class="form-control"></textarea>
                                </div>
                            </div>
                            
                            <div class="hr-line-dashed"></div>
                            <div class="form-group" id="data_1"><label class="col-sm-2 control-label"><label for="apply_date" class="wide required" aria-required="true">Fecha de Lanzamiento:</label></label>
                                <div class="col-sm-10">
                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="datetime" name="apply_date" value="03/31/2020" id="apply_date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label"><label for="agent" class="wide">Agente:</label></label>
                                <div class="col-sm-10">
                                                                            <select name="sel_agent" id="sel_agent" class="form-control">
<option value="127">Estudiante UMG</option>
<option value="121">Maria Caal</option>
<option value="1" selected="selected">Admin admin</option>
</select>
                                                                        <!--
                                    Admin Admin                                    -->
                                    <input type="hidden" id="agent" name="agent" value="1">
                                    <input type="hidden" id="approver" name="approver" value="1">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label"><label for="status" class="wide">Estado:</label></label>
                                <div class="col-sm-10">
                                    Aprobado                                    <input type="hidden" id="status" name="status" value="approved">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label"><label for="remarks" class="wide">Observaciones:</label></label>
                                <div class="col-sm-10">
                                    <textarea name="remarks" cols="17" rows="5" id="remarks" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div id="sectionB" class="tab-pane fade">
                            <div style="text-align: center">
                                <h3>Información del Préstamo</h3>
                            </div>
                            <table class="table" id="tbl-income-sources">
                                <thead>
                                    <tr>
                                        <th style="text-align: center; width: 1%">
                                            <input type="checkbox" class="select_all_">
                                        </th>
                                        <th style="text-align: center; width: 80%">Cuotas</th>
                                        <th style="text-align: center; width: 20%">Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td>
                                                <input type="checkbox" class="select_">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="fees[]" value="6">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" step="any" name="amounts[]" value="500">
                                            </td>
                                        </tr>
                                                                    </tbody>
                            </table>
                            <button class="btn btn-primary" type="button" id="btn-add-row">Agregar</button>
                            <button class="btn btn-danger" type="button" id="btn-del-row">Eliminar</button>
                        </div>

                        <div id="sectionC" class="tab-pane fade">
                            <h3>Adjuntos</h3>
                            <div id="required_fields_message">Aceptado tipos de archivo jpg, gif, png, xls, xlsx, csv, doc, docx, pdf</div>
                            <div>
                                <ul class="list-inline" id="filelist">
                                                                    </ul>
                            </div>
                            <div id="progress" class="overlay"></div>
                            <div class="progress progress-task" style="height: 4px; width: 15%; margin-bottom: 2px; display: none">
                                <div style="width: 0%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-info"></div>                                    
                            </div>
                            <div id="container" style="position: relative;">
                                <a id="pickfiles" href="javascript:;" class="btn btn-default" data-loan-id="165" style="position: relative; z-index: 1;">Buscar</a> 
                            <div id="html5_1e5l7sem7thvr5n1spl1kcmg6o3_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 0px; height: 0px; overflow: hidden; z-index: 0;"><input id="html5_1e5l7sem7thvr5n1spl1kcmg6o3" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="" accept="image/jpeg,image/gif,image/png,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,.csv,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf"></div></div>
                        </div>

                        <div id="sectionE" class="tab-pane fade in">
                            <div style="text-align: center">
                                <h3>Prenda</h3>
                                <div id="required_fields_message">Los campos en rojo son requeridos</div>
                                <ul id="error_message_box"></ul>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <label for="guarantee_name" class="wide required" aria-required="true">Nombre articulo de prenda:</label>                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="guarantee_name" value="" id="guarantee_name" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <label for="guarantee_type" class="wide required" aria-required="true">Tipo de prenda:</label>                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="guarantee_type" value="" id="guarantee_type" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <label for="guarantee_brand" class="wide required" aria-required="true">Modelo:</label>                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="guarantee_brand" value="" id="guarantee_brand" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <label for="guarantee_make" class="wide required" aria-required="true">año Fabricacion:</label>                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="guarantee_make" value="" id="guarantee_make" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <label for="guarantee_serial" class="wide required" aria-required="true">Número de serie:</label>                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="guarantee_serial" value="" id="guarantee_serial" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group" id="data_1">
                                <label class="col-sm-2 control-label">
                                    <label for="guarantee_price" class="wide required" aria-required="true">Precio estimado:</label>                                </label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="text" name="guarantee_price" value="0.00" id="guarantee_price" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <label for="guarantee_proof" class="wide">Proof of Ownership:</label>                                </label>
                                <div class="col-sm-10">
                                    <div class="form_field">
                                        <ul class="sel-proof">   
                                                                                                                                                                                </ul>
                                        <a href="https://www.recetadecocina.net/prestamos_pro/index.php/loans/attachments/165/proof" data-toggle="modal" data-target="#attachment_modal">Select from attachment</a>
                                    </div>      
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <label for="guarantee_images" class="wide">Imágenes:</label>                                </label>
                                <div class="col-sm-10">
                                    <ul class="sel-images">  
                                                                                                                                                                </ul>
                                    <a href="https://www.recetadecocina.net/prestamos_pro/index.php/loans/attachments/165/images" data-toggle="modal" data-target="#attachment_modal">Select from attachment</a>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <label for="guarantee_observations" class="wide">Observaciones:</label>                                </label>
                                <div class="col-sm-10">
                                    <textarea name="guarantee_observations" cols="40" rows="10" id="guarantee_observations" class="form-control"></textarea>
                                </div>
                            </div>

                        </div>


                        <div id="sectionF" class="tab-pane fade in active">
                            <script src="http://momentjs.com/downloads/moment.js"></script>


<div style="text-align: center">
    <h3>cronograma de pago</h3>
    <div id="required_fields_message">Los campos en rojo son requeridos</div>
    <ul id="error_message_box"></ul>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label">
    Monto de prestamo:
    </label>
    <div class="col-sm-2">
        <input type="hidden" id="amount" name="amount" value="5446.50">
        <input type="number" name="amount1" value="5446.50" id="amount1" class="form-control" step="any">
    </div>
</div>


<div class="hr-line-dashed"></div>
<div class="form-group">
    <label class="col-sm-2 control-label">
Tasa de interés:
    </label>
    <div class="col-sm-2">
        <div class="input-group">
            <input type="text" class="form-control" name="interest_rate" id="interest_rate" value="30">
            <span class="input-group-addon">%</span>
        </div>
    </div>
</div>

<div class="hr-line-dashed"></div>

<div class="form-group">
    <label class="col-sm-2 control-label">
        Cuotas:
    </label>
    <div class="col-sm-2">
        <input type="text" name="term" id="term" class="form-control" value="6">
    </div>
    <div class="col-sm-2">
        <select class="form-control" name="term_period" id="term_period">
            <option value="day">día</option>
            <option value="week">Semanas</option>
            <option value="month">Meses</option>
            <option value="year">Años</option>
        </select>
    </div>
</div>

<div class="hr-line-dashed"></div>
<div class="form-group">
    <label class="col-sm-2 control-label">
        Fecha de inicio:
    </label>
    <div class="col-sm-2">
        <div class="input-group date">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>                                        
            <input type="text" class="form-control" name="start_date" id="start_date" value="">
        </div>
    </div>
</div>


<div class="hr-line-dashed"></div>
<div class="form-group">
    <label class="col-sm-2 control-label">
        Monto del pago:
    </label>
    <div class="col-sm-2">
        <div id="loan-total-amount">0.00</div>
    </div>
</div>
<div class="hr-line-dashed"></div>


<div class="form-group">
    <label class="col-sm-2 control-label">
        &nbsp;
    </label>
    <div class="col-sm-4">
        <button class="btn btn-primary" type="button" id="btn-loan-calculator">Calcular</button>
    </div>
</div>
<div class="hr-line-dashed"></div>

<div class="form-group">
    <label class="col-sm-2 control-label"> &nbsp; </label>
    <div class="col-sm-10">
        <div id="div-payment-scheds">
            
                            <table class="table table-bordered">
                    <tbody><tr>
                        <td style="text-align:center">Date</td>
                        <td style="text-align:center">Payment Amount</td>
                        <td style="text-align:center">Principal Amount</td>
                        <td style="text-align:center">Interest Amount</td>
                        <td style="text-align:center">Balance Owed</td>
                    </tr>
                                            <tr>
                            <td><input type="hidden" name="payment_date[]" class="form-control" value="4/9/2020">4/9/2020</td>
                            <td><input type="hidden" name="payment_amount[]" class="form-control" value="907.75">907.75</td>
                            <td>782.75</td>
                            <td><input type="hidden" name="payment_interest[]" class="form-control" value="125.00">125.00</td>
                            <td><input type="hidden" name="payment_balance[]" class="form-control" value="4217.25">4217.25</td>
                        </tr>
                                            <tr>
                            <td><input type="hidden" name="payment_date[]" class="form-control" value="5/9/2020">5/9/2020</td>
                            <td><input type="hidden" name="payment_amount[]" class="form-control" value="907.75">907.75</td>
                            <td>802.32</td>
                            <td><input type="hidden" name="payment_interest[]" class="form-control" value="105.43">105.43</td>
                            <td><input type="hidden" name="payment_balance[]" class="form-control" value="3414.93">3414.93</td>
                        </tr>
                                            <tr>
                            <td><input type="hidden" name="payment_date[]" class="form-control" value="6/9/2020">6/9/2020</td>
                            <td><input type="hidden" name="payment_amount[]" class="form-control" value="907.75">907.75</td>
                            <td>822.38</td>
                            <td><input type="hidden" name="payment_interest[]" class="form-control" value="85.37">85.37</td>
                            <td><input type="hidden" name="payment_balance[]" class="form-control" value="2592.55">2592.55</td>
                        </tr>
                                            <tr>
                            <td><input type="hidden" name="payment_date[]" class="form-control" value="7/9/2020">7/9/2020</td>
                            <td><input type="hidden" name="payment_amount[]" class="form-control" value="907.75">907.75</td>
                            <td>842.94</td>
                            <td><input type="hidden" name="payment_interest[]" class="form-control" value="64.81">64.81</td>
                            <td><input type="hidden" name="payment_balance[]" class="form-control" value="1749.61">1749.61</td>
                        </tr>
                                            <tr>
                            <td><input type="hidden" name="payment_date[]" class="form-control" value="8/9/2020">8/9/2020</td>
                            <td><input type="hidden" name="payment_amount[]" class="form-control" value="907.75">907.75</td>
                            <td>864.01</td>
                            <td><input type="hidden" name="payment_interest[]" class="form-control" value="43.74">43.74</td>
                            <td><input type="hidden" name="payment_balance[]" class="form-control" value="885.60">885.60</td>
                        </tr>
                                            <tr>
                            <td><input type="hidden" name="payment_date[]" class="form-control" value="9/9/2020">9/9/2020</td>
                            <td><input type="hidden" name="payment_amount[]" class="form-control" value="907.75">907.75</td>
                            <td>885.61</td>
                            <td><input type="hidden" name="payment_interest[]" class="form-control" value="22.14">22.14</td>
                            <td><input type="hidden" name="payment_balance[]" class="form-control" value="-0.01">-0.01</td>
                        </tr>
                                    </tbody></table>
                        
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#btn-loan-calculator").click(function(){
            
            if ( $("#start_date").val() == '' )
            {
                alertify.alert("Please enter the start date");
                return false;
            }
            
            
            var frequency = 1;
            var term = $("#term").val();
            var period = $("#term_period").val();            
            switch(period)
            {
                case "day":
                    frequency = 365;
                    break;
                case "week":
                    frequency = 52;
                    break;
                case "month":
                    frequency = 12;
                    break;
                case "year":
                    frequency = 1;
                    break;
            }
            
            var loan_amount = $("#amount1").val();
            var interest_rate = ($("#interest_rate").val() / 100) / frequency;
            
            var payment_amount = 0;
            
            var r = (1 + interest_rate) ;
            var pow = Math.pow(r, term);
            
            payment_amount = loan_amount * ( (interest_rate * pow)  / (pow - 1) );
            
            $("#loan-total-amount").html( addCommas( payment_amount.toFixed(2) ) );
            
            var table_scheds = '<table class="table table-bordered">';
            
            table_scheds += '<tr>';
            table_scheds += '<td style="text-align:center">Date</td>';
            table_scheds += '<td style="text-align:center">Payment Amount</td>';
            table_scheds += '<td style="text-align:center">Principal Amount</td>';
            table_scheds += '<td style="text-align:center">Interest Amount</td>';
            table_scheds += '<td style="text-align:center">Balance Owed</td>';
            table_scheds += '</tr>';
            
            var total_amount = 0;
            for (var i=0; i < term; i++)
            {
                var compound_interest = (loan_amount * interest_rate);
                var principal_amount = (payment_amount - compound_interest).toFixed(2);
                var balance_owed = (loan_amount - principal_amount).toFixed(2);
                
                total_amount += payment_amount;
                
                var payment_date = new Date( $("#start_date").val() );
                
                switch( $("#term_period").val() )
                {
                    case "day":
                        payment_date.setDate( payment_date.getDate() + (i+1) );
                        break;
                    case "week":
                        payment_date.setDate( payment_date.getDate() + ((i+1)*7) );
                        break;
                    case "month":
                        payment_date.setMonth( payment_date.getMonth( ) + (i+1) );
                        break;
                    case "year":
                        payment_date = new Date ( payment_date.getFullYear() + (i+1), payment_date.getMonth(), payment_date.getDate() );
                        break;
                }
                
                var d_date = (payment_date.getMonth() + 1) + "/" + payment_date.getDate() + "/" + payment_date.getFullYear();
                
                var inputs = '<input type="hidden" name="payment_date[]" value="'+ d_date +'" />\n\
                           <input type="hidden" name="payment_balance[]" value="'+ balance_owed +'" />\n\
                           <input type="hidden" name="payment_interest[]" value="'+ compound_interest.toFixed(2) +'" />\n\
                           <input type="hidden" name="payment_amount[]" value="'+ payment_amount.toFixed(2) +'" />\n\
                            ';
                
                
                table_scheds += '<tr>';
                table_scheds += '<td>' + inputs +  d_date + '</td>';
                table_scheds += '<td>' + addCommas(payment_amount.toFixed(2)) + '</td>';
                table_scheds += '<td>' + addCommas(principal_amount) + '</td>';
                table_scheds += '<td>' + addCommas(compound_interest.toFixed(2)) + '</td>';
                table_scheds += '<td>' + addCommas(balance_owed) + '</td>';
                table_scheds += '</tr>';
                
                loan_amount = balance_owed;
            }
            table_scheds += '</table>';
            
            $("#amount").val(total_amount);
            $("#sp-current-balance").html( addCommas(total_amount.toFixed(2)) );
            $("#current_balance").val( total_amount.toFixed(2) );
            
            $("#div-payment-scheds").html( table_scheds );
            
        });
    });
    
    function addCommas(nStr)
    {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }
</script>                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Main row -->
       
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php
  include_once("templates/footer.php")
?>