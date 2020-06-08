<?php  
 include_once("funciones/sesiones.php");
 include_once("templates/header.php");
 include_once("funciones/conexion.php");
 include_once("templates/navegation-User.php");
 include_once("templates/header-bar-user.php");
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
                    <form role="form" method="post" action="insert-admin.php" id='formpago'>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <label for="clientepago" class="wide required" aria-required="true">Cliente:</label>
                                </label>
                                <form action="#" method="#" autocomplet='off'>
                                    <div class="col-sm-10 autocomplete" id='complete'>
                                        <input type="text"   id="clientepago" class="form-control" placeholder="Escribe el nombre aquí..." style="display:" autocomplete="off">
                                        
                                    </div>  
                                </form><!--autocomplete form-->
                                
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <label for="numerocedula" class="wide required" aria-required="true">Cedula:</label>
                                    
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="#"   id="cuentacliente" class="form-control" style="display:" autocomplete="off" disabled='disable'>
                                    <input type='hidden' id='hiddename' name='name'>
                                    <input type='hidden' id='numerocedula' name='numerocedula'>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="col-sm-10 mb-3">
                                    <label for="montopago">Monto:</label>
                                    <input type="text" placeholder="$" class="form-control"  id="montovisual" disabled='disable'>
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
                                    </select>

                                    <div class="input-group">
                                        <input type="text" class="form-control"  id='interespago' disabled='disable'>
                                        <input type='hidden' id='hiddeninteres' name='hiddeninteres'>

                                        <div class="input-group-append">
                                            <span class="input-group-text" style="background-color:white"><i class="fas fa-percentage"></i></span>
                                        </div>
                                    </div>
                                </div>
                               
                             </div>
                             <div class="form-group">
                                    <input type="text" id="valorpago" class="form-control"  style="display:" autocomplete="off" disabled='disable' >
                                    <input type="hidden" name='valorrealpago' id=valorrealpago>

                                </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    <label for="telephone">Dia de Pago</label>
                                </label>
                                <div class="col-sm-10">
                                        <input type="date" class="form-control " id="fechapago" name='fechapago'>
                                        

                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <label for="description" class="wide">Observacion:</label>
                                </label>
                                <div class="col-sm-10">
                                    <textarea name="description" cols="17" rows="5"  class="form-control" placeholder="Enter..."></textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <input type="hidden" name="add-pago" value="1">
                            <button class="btn btn-primary" type="submit" title='agregar' id="agregarpago">Agregar</button>
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