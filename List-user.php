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
            <h1>Lista de  Clientes</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
      <?php
        try {
          $sql = "SELECT concat_ws(' ',user_name,user_lastname) as nombre,user_id,user_cellphone,user_cedula,user_bankaccount,user_telephone, user_email FROM user ORDER by user_id ASC";
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
              <a class="btn btn-warning  addbottom"  href="/Admin-LTE/Create-user.php" title='registrar'  role="button">REGISTRAR</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="event" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Usuario</th>
                  <th>Celular</th>
                  <th>Cedula</th>
                  <th>Cuenta de Banco</th>
                  <th>Correo</th>
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
                      <td><?php echo $user['user_id']?></td>
                      <td><?php echo $user['nombre']?></td>
                      <td><?php echo $user['user_cellphone']?></td>
                      <td><?php echo $user['user_cedula']?></td>
                      <td><?php echo $user['user_bankaccount']?></td>
                      <td><?php echo $user['user_email']?></td>
                      <td style="text-align:center"   >
                          <a href="Edit-user.php?id=<?php echo generateURLSecure($user['user_id']) ?>" title="actualizar"    class="btn bg-orange btn-flat margin actualizarcliente"  >
                           <i class="fa fa-user-edit" ></i>
                        </a>
                      </td>
                       
                  </tr>

                  <?php }?>
                  
        
                 

                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Usuario</th>
                  <th>Celular</th>
                  <th>Cedula</th>
                  <th>Cuenta de Banco</th>
                  <th>Correo</th>
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
  


<?php 
  include_once("templates/footer.php")
?>