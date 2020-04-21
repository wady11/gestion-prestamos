<?php  
 include_once("funciones/sesiones.php");
 include_once("templates/header.php");
 include_once("funciones/conexion.php");
 include_once("templates/navegation-User.php");
 include_once("templates/header-bar-user.php")
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Nuevo Prestamo</h1>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card" style="width:100%">
                <div class="card-header">
                    <h3 class="card-title"></h3>

                    <!-- form start -->
                    <form role="form" method="post" action="insert-admin.php">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <label for="" class="wide required" aria-required="true">Cliente:</label>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="" value="" id="" class="form-control" placeholder="Escribe el nombre aquí..." style="display:" autocomplete="off">

                                    <span id="sp-customer" style="display: none">
                                      <span><a href="javascript:void(0)" title="Remove Customer" class="btn-remove-row"><i class="fa fa-times"></i></a></span>
                                    </span>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <label for="" class="wide required" aria-required="true">Cuenta:</label>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="#" name="" value="" id="" class="form-control" style="display:" autocomplete="off">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <label for="description" class="wide">Descripción:</label>
                                </label>
                                <div class="col-sm-10">
                                    <textarea name="description" cols="17" rows="5" id="" class="form-control" placeholder="Enter..."></textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="col-md-3 mb-3">
                                <label for="telephone">Fecha de Inicio</label>
                                <input type="text" class="form-control " name="telephone" id="fechaprestamo">
                                <div class="valid-feedback">
                                    <!-- Please provide a valid state. -->
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <label for="garante" class="wide required" aria-required="true">Garante:</label>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="garante" value="" id="" class="form-control" placeholder="Escribe el nombre aquí..." style="display:" autocomplete="off">

                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    <label for="estadoprestamos" class="wide required" aria-required="true">Estado del Prestamo:</label>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="estadoprestamo" value="Aprobado" id="" class="form-control" style="display:" autocomplete="off">

                                </div>
                            </div>
                            <div class="inqbox-title-dahed"></div>
                            <div style="text-align: center">

                                <h5>Información De Pago</h5>

                                <div class="inqbox-title-dahed"></div>
                                <div class="col-md-3 mb-3">
                                    <label for="monto">Monto</label>
                                    <input type="text" class="form-control" name="" id="">
                                    <div class="valid-feedback">
                                        <!-- Please provide a valid zip. -->
                                    </div>
                                </div>
                                <div class="input-group col-md-3 mb-3">
                                    <label for="cellPhone"> tasa Interes</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-percentage"></i></span>
                                        </div>
                                        <div class="valid-feedback">
                                            <!-- Please provide a valid state. -->
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
    <label class="col-sm-2 control-label">
        Cuotas:
    </label>
    <div class="col-sm-2">
        <input type="text" name="term" id="term" class="form-control" value="">
    </div>
    <div class="col-sm-2">
        <select class="form-control valid" name="term_period" id="term_period" aria-invalid="false">
            <option value="day">día</option>
            <option value="week">Semanas</option>
            <option value="month">Meses</option>
            <option value="year">Años</option>
        </select>
    </div>
</div>
                                <div class="col-md-3 mb-3">
                                    <label for="bancAccount">Cuenta de Banco</label>
                                    <input type="text" class="form-control is-invalid" name="bancAccount" id="bancAccount" placeholder="Nº Cuenta">
                                    <div class="valid-feedback">
                                        <!-- Please provide a valid zip. -->
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="date">Fecha de Nacimineto</label>
                                    <input type="date" class="form-control is-invalid" name="date" id="date" placeholder="dd/mm/yyyy">
                                    <div class="valid-feedback">
                                        <!-- Please provide a valid zip. -->
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="cedula">Cedula</label>
                                    <input type="text" class="form-control is-valid" name="cedula" id="cedula" placeholder="Cedula">
                                    <div class="valid-feedback">

                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="add-prestamo" value="1">
                            <button class="btn btn-primary" type="submit" title='agregar' id="agregarButtom">Agregar</button>
                    </form>
                    </div>
                    <!--fin del card-body-->

                </div>
                <!-- /.card -->

        </section>
        <!-- /.content -->
        </div>

        <?php 
            include_once("templates/footer.php")
        ?>