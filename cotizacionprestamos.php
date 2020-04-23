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
            <h1 class="m-0 text-dark">Calculadora de prestamos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="crearPrestamo.php">Crear Prestamo nuevo</a></li>
            </ol>
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
                                    <!--section calculadora de pago-->
                                    <div style="text-align: center">
                                        <div id="required_fields_message">Los campos en rojo son requeridos*</div>
                                        <ul id="error_message_box"></ul>
                                    </div>
                                    <div class="calculator-container">

                                        <label for="amount" class="col-sm-2 control-label">
                                            Monto de prestamo:
                                        </label>
                                        <div class="col-sm-2">
                                            <input type="text" name="amount" value="" id="amount" class="form-control" step="any">
                                        </div>
                                        <label for="interest" class="col-sm-2 control-label">
                                            Tasa de interés:
                                        </label>
                                        <div class="col-md-2 mb-3">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="interest" id="interest" value="">
                                                <span class="input-group-text">%</span>
                                            </div>
                                        </div>
                                        <div class="input-container"></div>
                                         <div class="form-row col-md-5 mb-1 ">
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Cuotas</label>
                                        <input type="text" name="term" id="term" class="form-control" value="">
                                        
                                    </div>
                                    <div class=" col-md-5">
                                    <label for="inputEmail4">periodo</label>
                                        <select class="form-control valid" name="term_period" id="term_period" aria-invalid="false">
                                            <option value="day">días</option>
                                            <option value="week">Semanas</option>
                                            <option value="month">Meses</option>
                                            <option value="year">Años</option>
                                        </select>
                                    </div>
                                  
                                </div>
                                        <label class="col-sm-2 control-label">
                                            Fecha de inicio:
                                        </label>
                                        <div class="col-sm-2">
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input type="text" class="form-control" name="start_date" id="start_date" value="">
                                            </div>
                                        </div>

                                        <label class="col-sm-2 control-label">
                                            Monto del pago:
                                        </label>
                                        <div class="col-sm-2">
                                            <div id="loan-total-amount">0.00</div>
                                        </div>

                                        <label class="col-sm-2 control-label">
                                            &nbsp;
                                        </label>
                                        <div class="col-sm-4">
                                            <button class="btn btn-primary" type="button" id="btn-loan-calculator">Calcular</button>
                                        </div>

                                        <!--section b-->

                                    </div>
                                    <!-- <div class="form-group">
                                        <label class="col-sm-2 control-label"> &nbsp; </label>
                                        <div class="col-sm-10">
                                            <div id="div-payment-scheds">

                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td style="text-align:center">Date</td>
                                                            <td style="text-align:center">Payment Amount</td>
                                                            <td style="text-align:center">Principal Amount</td>
                                                            <td style="text-align:center">Interest Amount</td>
                                                            <td style="text-align:center">Balance Owed</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="hidden" name="payment_date[]" class="form-control" value="4/9/2020">4/9/2020</td>
                                                            <td>
                                                                <input type="hidden" name="payment_amount[]" class="form-control" value="907.75">907.75</td>
                                                            <td>782.75</td>
                                                            <td>
                                                                <input type="hidden" name="payment_interest[]" class="form-control" value="125.00">125.00</td>
                                                            <td>
                                                                <input type="hidden" name="payment_balance[]" class="form-control" value="4217.25">4217.25</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="hidden" name="payment_date[]" class="form-control" value="5/9/2020">5/9/2020</td>
                                                            <td>
                                                                <input type="hidden" name="payment_amount[]" class="form-control" value="907.75">907.75</td>
                                                            <td>802.32</td>
                                                            <td>
                                                                <input type="hidden" name="payment_interest[]" class="form-control" value="105.43">105.43</td>
                                                            <td>
                                                                <input type="hidden" name="payment_balance[]" class="form-control" value="3414.93">3414.93</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="hidden" name="payment_date[]" class="form-control" value="6/9/2020">6/9/2020</td>
                                                            <td>
                                                                <input type="hidden" name="payment_amount[]" class="form-control" value="907.75">907.75</td>
                                                            <td>822.38</td>
                                                            <td>
                                                                <input type="hidden" name="payment_interest[]" class="form-control" value="85.37">85.37</td>
                                                            <td>
                                                                <input type="hidden" name="payment_balance[]" class="form-control" value="2592.55">2592.55</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="hidden" name="payment_date[]" class="form-control" value="7/9/2020">7/9/2020</td>
                                                            <td>
                                                                <input type="hidden" name="payment_amount[]" class="form-control" value="907.75">907.75</td>
                                                            <td>842.94</td>
                                                            <td>
                                                                <input type="hidden" name="payment_interest[]" class="form-control" value="64.81">64.81</td>
                                                            <td>
                                                                <input type="hidden" name="payment_balance[]" class="form-control" value="1749.61">1749.61</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="hidden" name="payment_date[]" class="form-control" value="8/9/2020">8/9/2020</td>
                                                            <td>
                                                                <input type="hidden" name="payment_amount[]" class="form-control" value="907.75">907.75</td>
                                                            <td>864.01</td>
                                                            <td>
                                                                <input type="hidden" name="payment_interest[]" class="form-control" value="43.74">43.74</td>
                                                            <td>
                                                                <input type="hidden" name="payment_balance[]" class="form-control" value="885.60">885.60</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="hidden" name="payment_date[]" class="form-control" value="9/9/2020">9/9/2020</td>
                                                            <td>
                                                                <input type="hidden" name="payment_amount[]" class="form-control" value="907.75">907.75</td>
                                                            <td>885.61</td>
                                                            <td>
                                                                <input type="hidden" name="payment_interest[]" class="form-control" value="22.14">22.14</td>
                                                            <td>
                                                                <input type="hidden" name="payment_balance[]" class="form-control" value="-0.01">-0.01</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div> -->
                                <!-- </div> -->

                                <div class="row" style="margin-top:30px">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">DataTable with default features</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6">
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table id="evento" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Dias: activate to sort column descending">Fecha</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Cuotas: activate to sort column ascending">Cuotas</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Capital: activate to sort column ascending">Capital</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Interes: activate to sort column ascending">Interes</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Saldo: activate to sort column ascending" style="">Saldo</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <tr role="row" class="odd">
                                                                        <td tabindex="0" class="sorting_1" style="">Gecko</td>
                                                                        <td>Firefox 1.0</td>
                                                                        <td>Win 98+ / OSX.2+</td>
                                                                        <td>1.7</td>
                                                                        <td style="">A</td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td tabindex="0" class="sorting_1">Gecko</td>
                                                                        <td>Firefox 1.5</td>
                                                                        <td>Win 98+ / OSX.2+</td>
                                                                        <td>1.8</td>
                                                                        <td style="">A</td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td tabindex="0" class="sorting_1">Gecko</td>
                                                                        <td>Firefox 2.0</td>
                                                                        <td>Win 98+ / OSX.2+</td>
                                                                        <td>1.8</td>
                                                                        <td style="">A</td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td tabindex="0" class="sorting_1">Gecko</td>
                                                                        <td>Firefox 3.0</td>
                                                                        <td>Win 2k+ / OSX.3+</td>
                                                                        <td>1.9</td>
                                                                        <td style="">A</td>
                                                                    </tr>
                                                                   
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th rowspan="1" colspan="1">Fecha</th>
                                                                        <th rowspan="1" colspan="1">Cuotas</th>
                                                                        <th rowspan="1" colspan="1">Capital</th>
                                                                        <th rowspan="1" colspan="1">Interes</th>
                                                                        <th rowspan="1" colspan="1" style="">Saldo</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                            </div>
                            <!--tab-container-->
                        </div>
                    </div>
                    <!-- Main row -->

                    <!-- /.row (main row) -->
            </div>
            <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <?php
                 include_once("templates/footer.php")
?>