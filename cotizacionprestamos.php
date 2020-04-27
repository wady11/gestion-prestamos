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
                                        <label class="col-sm-2 control-label">
                                            Monto de prestamo:
                                        </label>
                                        <div class="col-sm-2">
                                            <input type="text"   id="amount" class="form-control" step="any">
                                        </div>
                                        <label  class="col-sm-2 control-label">
                                            Tasa de interés:
                                        </label>
                                        <div class="col-md-2 mb-3">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="interest" >
                                                <span class="input-group-text">%</span>
                                            </div>
                                        </div>
                                        <div class="input-container"></div>
                                         <div class="form-row col-md-5 mb-1 ">
                                    <div class="form-group col-md-4">
                                        <label>Cuotas</label>
                                        <input type="text"  id="term" class="form-control" >
                                        
                                    </div>
                                    <div class=" col-md-5">
                                    <label >periodo</label>
                                        <input type="text" name="" value="Meses" id="term_period" class="form-control" disabled = "disabled">
                                    </div>
                                  
                                </div>
                                        <label class="col-sm-2 control-label">
                                            Fecha de inicio:
                                        </label>
                                        <div class="col-sm-2">
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input type="date" class="form-control"  id="start_date" >
                                            </div>
                                        </div>

                                        <label class="col-sm-2 control-label" style="margin-top:20px">
                                            Monto del pago:
                                        </label>
                                        <div class="col-sm-2">
                                            <div id="total-amount">0.00</div>
                                        </div>

                                        <label class="col-sm-2 control-label">
                                            &nbsp;
                                        </label>
                                        <div class="col-sm-4">
                                            <button class="btn btn-primary" type="button" id="btn-calculator">Calcular</button>
                                        </div>

                                        <!--section b-->

                                    </div>

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
                                                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Periodo: activate to sort column descending">Perido</th>
                                                                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Dias: activate to sort column descending">Fecha</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Cuotas: activate to sort column ascending">Cuotas</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Capital: activate to sort column ascending">Capital</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Interes: activate to sort column ascending">Interes</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Saldo: activate to sort column ascending" style="">Saldo</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                    
                                                                   
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th rowspan="1" colspan="1">Perido</th>
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