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
                        <h1>Nuevo Pagos</h1>
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
                    <form role="form" method="post" action="insert-admin.php" id='formPrestamo'>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <label for="clientepago" class="wide required" aria-required="true">Cliente:</label>
                                </label>
                                <form action="#" method="#" autocomplet='off'>
                                    <div class="col-sm-10 autocomplete" id='complete'>
                                        <input type="text" name="clientepago"  id="clientepago" class="form-control" placeholder="Escribe el nombre aquí..." style="display:" autocomplete="off">
                                        
                                    </div>  
                                </form><!--autocomplete form-->
                                
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <label for="numerocedula" class="wide required" aria-required="true">Cedula:</label>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="#" name="cuentacliente"  id="cuentacliente" class="form-control" style="display:" autocomplete="off" disabled='disable'>
                                    <input type='hidden' id='numerocedula' name='numerocedula'>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="col-sm-10 mb-3">
                                    <label for="montoprestamos">Monto:</label>
                                    <input type="text" placeholder="$" class="form-control" name="montovisual" id="montovisual" disabled='disable'>
                                    <input type='hidden' id='montopago' name='montopago'>
                                    <div class="valid-feedback">
                                        <!-- Please provide a valid zip. -->
                                    </div>
                                </div>
                           
                            <div class="hr-line-dashed"></div>
                            <div class="col-sm-6">
                            <!-- select -->
                                <div class="form-group">
                                    <label>Select:</label>
                                    <div class='view'>
                                    <select class="form-control" id='funcion' name='funcion' >
                                    <option value="interes">Interes</option>
                                    <option value="abono">Abono</option>
                                    <option value="capital">Capital</option>
                                    <option value="reenganche">reeganche</option>
                                    </select>

                                    <div class="input-group">
                                        <input type="text" class="form-control" name="interespago" id='interespago' disabled='disable'>
                                        <div class="input-group-append">
                                            <span class="input-group-text" style="background-color:white"><i class="fas fa-percentage"></i></span>
                                        </div>
                                    </div>
                                </div>
                               
                             </div>
                             <div class="form-group">
                                    <input type="text" name="valorpago"  id="valorpago" class="form-control"  style="display:" autocomplete="off" disabled='disable' >
                                    <input type="hidden" name='valorrealpago' id=valorrealpago>

                                </div>
                                <br/>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    <label for="estadoprestamos" class="wide required" aria-required="true">Estado del Prestamo:</label>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="estadoprestamo" value="Aprobado"  class="form-control" style="display:" autocomplete="off">

                                </div>
                            </div>
                            <div class="inqbox-title-dahed"></div>
                            <div style="text-align: center">

                                <h5>Información De Prestamo</h5>

                                <div class="inqbox-title-dahed"></div>
                                <div class="col-md-3 mb-3">
                                    <label for="montoprestamos">Monto</label>
                                    <input type="text" class="form-control" name="montoprestamos" id="montoprestamo">
                                    <div class="valid-feedback">
                                        <!-- Please provide a valid zip. -->
                                    </div>
                                </div>
                                <div class="input-group col-md-3 mb-3">
                                    <label for="interesprestamo"> tasa Interes</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="interesprestamo">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-percentage"></i></span>
                                        </div>
                                        <div class="valid-feedback">
                                            <!-- Please provide a valid state. -->
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-row ">
                                    <div class="form-group col-md-2">
                                        <label for="term">Cuotas</label>
                                        <input type="text" name="term" id="term" class="form-control" >
                                        
                                    </div>
                                    <div class=" col-md-2">
                                    <label for="tipoperiodo">periodo</label>
                                    <input type="text"  class="form-control" value="mensual" disabled='disable' >
                                    <input type="hidden" name="periodo" id="periodo" class="form-control" value="mensual" >
                                    </div>
                                  
                                </div>
                            <div class="col-md-3 mb-3">
                                <label for="telephone">Fecha de Inicio</label>
                                <input type="date" class="form-control " name="fechaprestamo" id="fechaprestamo">
                                <div class="valid-feedback">
                                    <!-- Please provide a valid state. -->
                                </div>
                            </div>

                                <div class="col-md-4 mb-3">
                                    <label for="">Monto del pago</label>
                                    <input type="text" class="form-control " name="" id="mostramonto" disabled='disable' >
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