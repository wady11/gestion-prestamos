<?php
 
 include_once("funciones/sesiones.php");
 include_once("funciones/conexion.php");
 include_once("templates/header.php");
 include_once("templates/header-bar.php");
 include_once("templates/navegation.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrator's List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/Admin-LTE/Admin-index.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="/Admin-LTE/Create-admin.php">Add User</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
                <?php
        
                    try {
                      $sql = "SELECT id_login, user,name,Tipo_usuario FROM `login` ;";
                      $result = $conn->query($sql);
                    } catch (\Throwable $th) {
                      $error = $th->message();
                      echo $error;
                    
                }?>

                  
                  

    <!-- Main content -->
    <section class="content" style="width:100%">
      <div class="row" style="width:100%">
        <div class="col-12" >
          <div class="card" style="width:100%">

          <div class="card" style="width:100%">
            <div class="card-header">
              <h3 class="card-title"> Edit Administrator</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="event" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th>Users</th>
                      <th>Account(s)</th>
                      <th>Account type</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
              <?php
                while($admin = $result->fetch_assoc()) { ?>
                  <tr>
                        <td><?php echo $admin['user']?></td>
                        <td><?php echo $admin['name']?></td>
                        <td><?php echo $admin['Tipo_usuario']?></td>
                        <td style="text-align:center">
                          <a href="edit-admin.php?id=<?php echo $admin['id_login']?>"  class="btn bg-orange btn-flat margin">
                          <i class="fa fa-user-edit"></i>
                        </a>

                       </td>
                  </tr>
              
              <?php }?>
             
                </tbody>

                <tfoot>
                <tr>
                <th>Users</th>
                      <th>Account(s)</th>
                      <th>Account type</th>
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