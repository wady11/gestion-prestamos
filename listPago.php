<?php
 include_once("funciones/sesiones.php");
 include_once("templates/header.php");
 include_once("templates/header-bar-user.php");
 include_once("templates/navegation-User.php");

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lista de  Pagos</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
      <?php
        try {
          $sql = "SELECT idpago,usuario,fecha,cantidad,montoanterio,tipopago,cedula_pago FROM pagos ORDER BY fecha ASC";
          $result = $conn->query($sql);
        } catch (\Throwable $th) {
          $error = $th->message();
          echo $error;  
        }
      
      ?>
    <!-- Main content -->
    <section class="content" style="width:100%">
      <div class="row" style="width:100%">
        <div class="col-12" >
          <div class="card" style="width:100%">

          <div class="card" style="width:100%">
            <div class="card-header">
              <!-- <h3 class="card-title">Lista de Beneficiarios</h3> -->
              <a class="btn btn-warning  addbottom"  href="/Admin-LTE/crearPagos.php" title='registrar pago'  role="button">REGISTRAR PAGO</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="event" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Usuario</th>
                  <th>Fecha</th>
                  <th>Pago Actual</th>
                  <th>Monto Anterior</th>
                  <th>funcion</th>
                  <th>Cedula</th> 
                </tr>
                </thead>
                    
                <tbody>
                <?php
                  

                  while($user = $result->fetch_assoc()) { ?>
                  <tr>
                      <td><?php echo $user['idpago']?></td>
                      <td><?php echo $user['usuario']?></td>
                      <td><?php echo $user['fecha']?></td>
                      <td>RD$ <?php echo $user['cantidad']?></td>
                      <td>RD$ <?php echo $user['montoanterio']?></td>
                      <td><?php echo $user['tipopago']?></td>
                      <td><?php echo $user['cedula_pago']?></td>
                  </tr>

                  <?php }?>
                  
        
                 

                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Usuario</th>
                  <th>Fecha</th>
                  <th>Pago Actual</th>
                  <th>Monto Anterior</th>
                  <th>funcion</th>
                  <th>Cedula</th>
                  
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
    </section>
    <!-- /.content -->
  </div>
  
 <!-- <a href="panelUser.php?id="" title="Borrar Cliente" class="btn bg-orange btn-flat margin">
                        <i class="fa fa-users-cog"></i> 
                        </a>-->

<?php 
  include_once("templates/footer.php")
?>