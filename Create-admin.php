<?php  
 include_once("funciones/sesiones.php");
 include_once("templates/header.php");
 include_once("funciones/conexion.php");
 include_once("templates/navegation.php");
?>
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear Administrador</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Crear Administrador</h3>   
        <div class="card-body">
           <!-- form start -->
           <form role="form" name="create-admin" id="create-admin"  method="post" action="insert-admin.php">
                <div class="card-body">
                    <div class="form-group">
                        <label for="user">Usuario</label>
                        <input type="text" class="form-control" id="user"  name="user" placeholder="Enter User">
                    </div>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter You Name" style="border-color:none;">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                </div>

                <div class="card-footer">
                <input type="hidden" name="add-admin" value="1" >
                 <button type="submit" class="btn btn-primary">Add</button>
                </div>
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