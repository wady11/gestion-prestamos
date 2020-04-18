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
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card" style="width:100%">
        <div class="card-header">
          <h3 class="card-title"></h3>   
        
           <!-- form start -->
 <form role="form" name="create-user" id="create-user" method="post" action="insert-admin.php" >
  <div class="card-body">
    <div class="form-group"><label class="col-sm-2 control-label"><label for="inp-customer" class="wide required" aria-required="true">Cliente:</label></label>
                                <div class="col-sm-10">
                                    <input type="text" name="inp-customer" value="" id="inp-customer" class="form-control" placeholder="Escribe el nombre aquí..." style="display:" autocomplete="off">

                                    <span id="sp-customer" style="display: none">
                                                                                <span><a href="javascript:void(0)" title="Remove Customer" class="btn-remove-row"><i class="fa fa-times"></i></a></span>
                                    </span>
                                    <input type="hidden" id="customer" name="customer" value="">

                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
    <div class="col-md-4 mb-3">
      <label for="lastName">Apellido(s)</label>
      <input type="text" class="form-control is-valid" name="lastName" id="lastName" placeholder="Apellido"  >
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
        <input type="text" class="form-control is-invalid" id="email" name="email" placeholder="Correo" aria-describedby="inputGroupPrepend3" >
        <div class="valid-feedback">
          <!-- Please choose a username. -->
        </div>
      </div>
    </div>

    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Textarea</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." id="userdescripcion"></textarea>
                        
                      </div>
                    </div>
    <div class="col-md-3 mb-3">
      <label for="telePhone">Telefono</label>
      <input type="text" class="form-control " name="telePhone" id="telePhone" placeholder="Telefono" >
      <div class="valid-feedback">
        <!-- Please provide a valid state. -->
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="cellPhone">Celular</label>
      <input type="text" class="form-control is-invalid" name="cellPhone" id="cellPhone" placeholder="Celular" >
      <div class="valid-feedback">
        <!-- Please provide a valid zip. -->
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="city">Ciudad</label>
      <input type="text" class="form-control is-invalid" name="city" id="city" placeholder="Ciudad" >
      <div class="valid-feedback">
        <!-- Please provide a valid zip. -->
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="town">Municipio</label>
      <input type="text" class="form-control is-invalid" name="town" id="town" placeholder="Municipio" >
      <div class="valid-feedback">
        <!-- Please provide a valid zip. -->
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="banc">Banco(s)</label>
      <input type="text" class="form-control is-invalid" name="banc" id="banc" placeholder="Bancos(s)" >
      <div class="valid-feedback">
        <!-- Please provide a valid zip. -->
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="bancAccount">Cuenta de Banco</label>
      <input type="text" class="form-control is-invalid" name="bancAccount" id="bancAccount" placeholder="Nº Cuenta" >
      <div class="valid-feedback">
        <!-- Please provide a valid zip. -->
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="date">Fecha de Nacimineto</label>
      <input type="date" class="form-control is-invalid" name="date" id="date" placeholder="dd/mm/yyyy" >
      <div class="valid-feedback">
        <!-- Please provide a valid zip. -->
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="cedula">Cedula</label>
      <input type="text" class="form-control is-valid" name="cedula"  id="cedula" placeholder="Cedula"  >
      <div class="valid-feedback">
        
      </div>
    </div>
    </div>
    
  

  <input type="hidden" name="add-user" value="1">
  <button class="btn btn-primary" type="submit" title='agregar' id="agregarButtom">Agregar</button>
</form>
        </div><!--fin del card-body-->

      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  

<?php 
  include_once("templates/footer.php")
?>