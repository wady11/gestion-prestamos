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
            <h1>Lista de  Prestamos</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
      <?php
        try {
          $sql = "SELECT id_prestamos,nombre_prestamo, garante_prestamo,fcreacion_prestamo,formatopago_prestamo,monto_prestamo,interes_prestamos,cuotas_prestamos FROM prestamos ORDER by id_prestamos ASC";
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
              <a class="btn btn-warning  addbottom"  href="/Admin-LTE/crearPrestamo.php" title='registrar prestamo'  role="button">REGISTRAR PRESTAMO</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="event" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Usuario</th>
                  <th>Garante</th>
                  <th>Interes</th>
                  <th>Monto Prestado</th>
                  <th>Fecha del prestamo</th>
                  <th>Cuotas</th>
                  <th>Action</th>
                  <?php
                      //GENERATE  SECURE URL
                    function generateURLSecure($userId){
                      return  sha1($userId);
                    }
                  
                  ?>
                </tr>
                </thead>
                    
                <tbody>
                <?php
                  

                  while($user = $result->fetch_assoc()) { ?>
                  <tr>
                      <td><?php echo $user['id_prestamos']?></td>
                      <td><?php echo $user['nombre_prestamo']?></td>
                      <td><?php echo $user['garante_prestamo']?></td>
                      <td><?php echo $user['interes_prestamos']?>%</td>
                      <td>RD$ <?php echo $user['monto_prestamo']?></td>
                      <td><?php echo $user['fcreacion_prestamo']?></td>
                      <td><?php echo $user['cuotas_prestamos']?> Meses</td>
                      <td style="text-align:center">
                         <a href="panelUser.php?id=<?php echo generateURLSecure($user['id_prestamos']) ?>" title="Panel Control" class="btn bg-orange btn-flat margin">
                             <i class="fa fa-users-cog"></i> 
                        </a>
                        <a href="#" title="Reenganchar" class="btn bg-orange btn-flat margin">
                          <i class="fa fa-handshake"></i>
                        </a>
                        <a href="#" title="Reenganchar" class="btn bg-orange btn-flat margin">
                        <i class="fa fa-dollar-sign"></i>
                        </a>
                      </td>
                       
                  </tr>

                  <?php }?>
                  
        
                 

                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Usuario</th>
                  <th>Garante</th>
                  <th>Interes</th>
                  <th>Monto Prestado</th>
                  <th>Fecha del prestamo</th>
                  <th>Cuotas</th>
                  <th>Action</th>
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