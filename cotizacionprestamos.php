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

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
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

                                        <label class="col-sm-2 control-label">
                                            Monto de prestamo:
                                        </label>
                                        <div class="col-sm-2">
                                            <input type="hidden" id="amount" name="amount" value="5446.50">
                                            <input type="number" name="amount1" value="5446.50" id="amount1" class="form-control" step="any">
                                        </div>
                                        <label class="col-sm-2 control-label">
                                            Tasa de interés:
                                        </label>
                                        <div class="col-md-2 mb-3">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="interest_rate" id="interest_rate" value="30">
                                                <span class="input-group-text">%</span>
                                            </div>
                                        </div>
                                        <div class="input-container"></div>
                                        <label class="col-sm-2 control-label">
                                            Cuotas:
                                        </label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="term_period" id="term_period">
                                                <option value="day">día</option>
                                                <option value="week">Semanas</option>
                                                <option value="month">Meses</option>
                                                <option value="year">Años</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" name="term" id="term" class="form-control" value="6">
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
                                    <div class="form-group">
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
                                    </div>
                                </div>

                                <div class="card ">
                                    <div class="card-header">
                                        <h3 class="card-title">DataTable with default features</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">    
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table id="evento" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Rendering engine</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Browser</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Engine version</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">CSS grade</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <tr role="row" class="odd">
                                                                <td tabindex="0" class="sorting_1">Gecko</td>
                                                                <td>Firefox 1.0</td>
                                                                <td>Win 98+ / OSX.2+</td>
                                                                <td>1.7</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td tabindex="0" class="sorting_1">Gecko</td>
                                                                <td>Firefox 1.5</td>
                                                                <td>Win 98+ / OSX.2+</td>
                                                                <td>1.8</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td tabindex="0" class="sorting_1">Gecko</td>
                                                                <td>Firefox 2.0</td>
                                                                <td>Win 98+ / OSX.2+</td>
                                                                <td>1.8</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td tabindex="0" class="sorting_1">Gecko</td>
                                                                <td>Firefox 3.0</td>
                                                                <td>Win 2k+ / OSX.3+</td>
                                                                <td>1.9</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">Gecko</td>
                                                                <td>Camino 1.0</td>
                                                                <td>OSX.2+</td>
                                                                <td>1.8</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">Gecko</td>
                                                                <td>Camino 1.5</td>
                                                                <td>OSX.3+</td>
                                                                <td>1.8</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">Gecko</td>
                                                                <td>Netscape 7.2</td>
                                                                <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                                <td>1.7</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">Gecko</td>
                                                                <td>Netscape Browser 8</td>
                                                                <td>Win 98SE+</td>
                                                                <td>1.7</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">Gecko</td>
                                                                <td>Netscape Navigator 9</td>
                                                                <td>Win 98+ / OSX.2+</td>
                                                                <td>1.8</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">Gecko</td>
                                                                <td>Mozilla 1.0</td>
                                                                <td>Win 95+ / OSX.1+</td>
                                                                <td>1</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">Gecko</td>
                                                                <td>Mozilla 1.1</td>
                                                                <td>Win 95+ / OSX.1+</td>
                                                                <td>1.1</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">Gecko</td>
                                                                <td>Mozilla 1.2</td>
                                                                <td>Win 95+ / OSX.1+</td>
                                                                <td>1.2</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">Gecko</td>
                                                                <td>Mozilla 1.3</td>
                                                                <td>Win 95+ / OSX.1+</td>
                                                                <td>1.3</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">Gecko</td>
                                                                <td>Mozilla 1.4</td>
                                                                <td>Win 95+ / OSX.1+</td>
                                                                <td>1.4</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">Gecko</td>
                                                                <td>Mozilla 1.5</td>
                                                                <td>Win 95+ / OSX.1+</td>
                                                                <td>1.5</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">Gecko</td>
                                                                <td>Mozilla 1.6</td>
                                                                <td>Win 95+ / OSX.1+</td>
                                                                <td>1.6</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">Gecko</td>
                                                                <td>Mozilla 1.7</td>
                                                                <td>Win 98+ / OSX.1+</td>
                                                                <td>1.7</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">Gecko</td>
                                                                <td>Mozilla 1.8</td>
                                                                <td>Win 98+ / OSX.1+</td>
                                                                <td>1.8</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">Gecko</td>
                                                                <td>Seamonkey 1.1</td>
                                                                <td>Win 98+ / OSX.2+</td>
                                                                <td>1.8</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">Gecko</td>
                                                                <td>Epiphany 2.20</td>
                                                                <td>Gnome</td>
                                                                <td>1.8</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">KHTML</td>
                                                                <td>Konqureror 3.1</td>
                                                                <td>KDE 3.1</td>
                                                                <td>3.1</td>
                                                                <td>C</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">KHTML</td>
                                                                <td>Konqureror 3.3</td>
                                                                <td>KDE 3.3</td>
                                                                <td>3.3</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">KHTML</td>
                                                                <td>Konqureror 3.5</td>
                                                                <td>KDE 3.5</td>
                                                                <td>3.5</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">Misc</td>
                                                                <td>NetFront 3.1</td>
                                                                <td>Embedded devices</td>
                                                                <td>-</td>
                                                                <td>C</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">Misc</td>
                                                                <td>NetFront 3.4</td>
                                                                <td>Embedded devices</td>
                                                                <td>-</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">Misc</td>
                                                                <td>Dillo 0.8</td>
                                                                <td>Embedded devices</td>
                                                                <td>-</td>
                                                                <td>X</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">Misc</td>
                                                                <td>Links</td>
                                                                <td>Text only</td>
                                                                <td>-</td>
                                                                <td>X</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">Misc</td>
                                                                <td>Lynx</td>
                                                                <td>Text only</td>
                                                                <td>-</td>
                                                                <td>X</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">Misc</td>
                                                                <td>IE Mobile</td>
                                                                <td>Windows Mobile 6</td>
                                                                <td>-</td>
                                                                <td>C</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">Misc</td>
                                                                <td>PSP browser</td>
                                                                <td>PSP</td>
                                                                <td>-</td>
                                                                <td>C</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">Other browsers</td>
                                                                <td>All others</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>U</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">Presto</td>
                                                                <td>Opera 7.0</td>
                                                                <td>Win 95+ / OSX.1+</td>
                                                                <td>-</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">Presto</td>
                                                                <td>Opera 7.5</td>
                                                                <td>Win 95+ / OSX.2+</td>
                                                                <td>-</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">Presto</td>
                                                                <td>Opera 8.0</td>
                                                                <td>Win 95+ / OSX.2+</td>
                                                                <td>-</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">Presto</td>
                                                                <td>Opera 8.5</td>
                                                                <td>Win 95+ / OSX.2+</td>
                                                                <td>-</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">Presto</td>
                                                                <td>Opera 9.0</td>
                                                                <td>Win 95+ / OSX.3+</td>
                                                                <td>-</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">Presto</td>
                                                                <td>Opera 9.2</td>
                                                                <td>Win 88+ / OSX.3+</td>
                                                                <td>-</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">Presto</td>
                                                                <td>Opera 9.5</td>
                                                                <td>Win 88+ / OSX.3+</td>
                                                                <td>-</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">Presto</td>
                                                                <td>Opera for Wii</td>
                                                                <td>Wii</td>
                                                                <td>-</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">Presto</td>
                                                                <td>Nokia N800</td>
                                                                <td>N800</td>
                                                                <td>-</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">Presto</td>
                                                                <td>Nintendo DS browser</td>
                                                                <td>Nintendo DS</td>
                                                                <td>8.5</td>
                                                                <td>C/A<sup>1</sup></td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">Tasman</td>
                                                                <td>Internet Explorer 4.5</td>
                                                                <td>Mac OS 8-9</td>
                                                                <td>-</td>
                                                                <td>X</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">Tasman</td>
                                                                <td>Internet Explorer 5.1</td>
                                                                <td>Mac OS 7.6-9</td>
                                                                <td>1</td>
                                                                <td>C</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">Tasman</td>
                                                                <td>Internet Explorer 5.2</td>
                                                                <td>Mac OS 8-X</td>
                                                                <td>1</td>
                                                                <td>C</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td tabindex="0" class="sorting_1">Trident</td>
                                                                <td>Internet Explorer 4.0
                                                                </td>
                                                                <td>Win 95+</td>
                                                                <td> 4</td>
                                                                <td>X</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td tabindex="0" class="sorting_1">Trident</td>
                                                                <td>Internet Explorer 5.0
                                                                </td>
                                                                <td>Win 95+</td>
                                                                <td>5</td>
                                                                <td>C</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td tabindex="0" class="sorting_1">Trident</td>
                                                                <td>Internet Explorer 5.5
                                                                </td>
                                                                <td>Win 95+</td>
                                                                <td>5.5</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td tabindex="0" class="sorting_1">Trident</td>
                                                                <td>Internet Explorer 6
                                                                </td>
                                                                <td>Win 98+</td>
                                                                <td>6</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td tabindex="0" class="sorting_1">Trident</td>
                                                                <td>Internet Explorer 7</td>
                                                                <td>Win XP SP2+</td>
                                                                <td>7</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td tabindex="0" class="sorting_1">Trident</td>
                                                                <td>AOL browser (AOL desktop)</td>
                                                                <td>Win XP</td>
                                                                <td>6</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">Webkit</td>
                                                                <td>Safari 1.2</td>
                                                                <td>OSX.3</td>
                                                                <td>125.5</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">Webkit</td>
                                                                <td>Safari 1.3</td>
                                                                <td>OSX.3</td>
                                                                <td>312.8</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">Webkit</td>
                                                                <td>Safari 2.0</td>
                                                                <td>OSX.4+</td>
                                                                <td>419.3</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">Webkit</td>
                                                                <td>Safari 3.0</td>
                                                                <td>OSX.4+</td>
                                                                <td>522.1</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">Webkit</td>
                                                                <td>OmniWeb 5.5</td>
                                                                <td>OSX.4+</td>
                                                                <td>420</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1" tabindex="0">Webkit</td>
                                                                <td>iPod Touch / iPhone</td>
                                                                <td>iPod</td>
                                                                <td>420.1</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1" tabindex="0">Webkit</td>
                                                                <td>S60</td>
                                                                <td>S60</td>
                                                                <td>413</td>
                                                                <td>A</td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th rowspan="1" colspan="1">Rendering engine</th>
                                                                <th rowspan="1" colspan="1">Browser</th>
                                                                <th rowspan="1" colspan="1">Platform(s)</th>
                                                                <th rowspan="1" colspan="1">Engine version</th>
                                                                <th rowspan="1" colspan="1">CSS grade</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>

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