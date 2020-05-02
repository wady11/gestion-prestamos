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
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="crearPrestamo.php">Crear Prestamo nuevo</a></li>
                                </ol>
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
                                        <div class="col-sm-3">
                                            <input type="text" id="amount" class="form-control" step="any">
                                        </div>
                                        <label class="col-sm-2 control-label">
                                            Tasa de interés:
                                        </label>
                                        <div class="col-md-2 mb-3">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="interest">
                                                <span class="input-group-text">%</span>
                                            </div>
                                        </div>
                                        <div class="input-container"></div>
                                        <div class="form-row col-md-5 mb-1 ">
                                            <div class="form-group col-md-4">
                                                <label>Cantidad Meses</label>
                                                <input type="text" id="term" class="form-control">

                                            </div>
                                            <div class=" col-md-5">
                                                <label>periodo</label>
                                                <input type="text" name="" value="Meses" id="term_period" class="form-control" disabled="disabled">
                                            </div>

                                        </div>
                                        <label class="col-sm-2 control-label">
                                            Fecha de inicio:
                                        </label>
                                        <div class="col-sm-3">
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input type="date" class="form-control" id="start_date">
                                            </div>
                                        </div>

                                        <label class="col-sm-3 mb-1 control-label" style="margin-top:20px;text-align: center">
                                            Monto del pago:
                                        </label>
                                        <div class="col-sm-5 totalValor">
                                            <input type="text" id="total-amount" class="col-sm-5" disabled="disabled" style="">
                                        </div>

                                        <label class="col-sm-2 control-label">
                                            &nbsp;
                                        </label>
                                        <div class="col-sm-5" style="text-align:center">
                                            <button class="btn btn-primary" type="button" id="btn-calculator">Calcular</button>
                                            <button class="btn  btn-secondary" type="button" id="clean">Limpiar</button>
                                            <button class="btn  btn-info" type="button" id="print" ><i class="fas fa-print"></i>Print</button>
                                            <!-- <button class="btn btn-app"><i class="fas fa-save"></i> Save</button> -->
                                        </div>

                                        <!--section b-->

                                    </div>

                                    <div class="row" style="margin-top:30px">
                                        <div class="col-12">
                                            <div class="card" id="printcard">
                                                <div class="card-header">
                                                    <h3 class="card-title">Tabla de Amortizacion</h3>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <div class="container-amortizacion">
                                                        <div class="fecha-prestamos">
                                                            <label>Fecha del prestamo:</label>
                                                            <input type="text" id="fechaAmortizacion" style="border:none;width:119px">
                                                            
                                                        </div>
                                                        <div class="monto-prestamos">
                                                            <label>Monto:</label>
                                                            <input type="text" id="montoAmortizacion" style="border:none;width:119px">
                                                        </div>
                                                        <div class="periodo-prestamos">
                                                            <label>Periodo:</label>
                                                            <input type="text" id="periodoAmortizacion" style="border:none;width:119px">
                                                        </div>
                                                        <div class="interes-prestamos">
                                                            <label>Interes:</label>
                                                            <input type="text" id="interesAmortizacion" style="border:none;width:119px">
                                                        </div>
                                                        <div class="plazo-prestamos">
                                                            <label>Plazo:</label>
                                                            <input type="text" id="plazoAmortizacion" style="border:none;width:119px" >

                                                        </div>

                                                    </div>
                                                    <table id="evento" class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Periodo</th>
                                                                <th>Fecha</th>
                                                                <th>Cuota</th>
                                                                <th>Capital</th>
                                                                <th>Interes</th>
                                                                <th>Saldo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tBody">

                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Periodo</th>
                                                                <th>Fecha</th>
                                                                <th>Cuota</th>
                                                                <th>Capital</th>
                                                                <th>Interes</th>
                                                                <th>Saldo</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
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