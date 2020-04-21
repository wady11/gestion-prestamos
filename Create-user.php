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
                        <h1>Crear Cliente</h1>
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
                    <div class="card-body">
                        <!-- form start -->
                        <form role="form" name="create-user" id="create-user" method="post" action="insert-admin.php">
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="name">Nombre(s)</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
                                    <div class="valid-feedback">

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="lastName">Apellido(s)</label>
                                    <input type="text" class="form-control is-valid" name="lastName" id="lastName" placeholder="Apellido">
                                    <div class="valid-feedback">
                                        <!-- Looks good! -->
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="email">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                        </div>
                                        <input type="text" class="form-control is-invalid" id="email" name="email" placeholder="Correo" aria-describedby="inputGroupPrepend3">
                                        <div class="valid-feedback">
                                            <!-- Please choose a username. -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="address">Direccion</label>
                                    <input type="text" class="form-control is-invalid" name="address" id="address" placeholder="Direccion">
                                    <div class="valid-feedback">
                                        <!-- Please provide a valid city. -->
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="telePhone">Telefono</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <!-- <input type="text" class="form-control is-invalid" name="telePhone" id="telePhone" placeholder="Telefono" > -->
                                        <input type="text" class="form-control is-invalid" data-inputmask='"mask": "(999) 999-9999"' data-mask  name="telePhone" id="telePhone">
                                        <div class="valid-feedback">
                                            <!-- Please provide a valid state. -->
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class=" col-md-3 mb-3">
                                    <label for="cellPhone">Celular</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                        </div>
                                       
                                        <input type="text" class="form-control is-invalid" data-inputmask='"mask": "(999) 999-9999"' data-mask  name="cellPhone" id="cellPhone">
                                        <div class="valid-feedback">
                                            <!-- Please provide a valid state. -->
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="city">Ciudad</label>
                                    <input type="text" class="form-control is-invalid" name="city" id="city" placeholder="Ciudad">
                                    <div class="valid-feedback">
                                        <!-- Please provide a valid zip. -->
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="town">Municipio</label>
                                    <input type="text" class="form-control is-invalid" name="town" id="town" placeholder="Municipio">
                                    <div class="valid-feedback">
                                        <!-- Please provide a valid zip. -->
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="banc">Banco(s)</label>
                                    <input type="text" class="form-control is-invalid" name="banc" id="banc" placeholder="Bancos(s)">
                                    <div class="valid-feedback">
                                        <!-- Please provide a valid zip. -->
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
                                    <input type="text" class="form-control is-invalid" data-inputmask='"mask": "999-9999999-9"' data-mask name="cedula" id="cedula">
                                    <div class="valid-feedback">

                                    </div>
                                </div>
                            </div>

                    </div>

                    <input type="hidden" name="add-user" value="1">
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