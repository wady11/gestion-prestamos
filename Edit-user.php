<?php  
 include_once("funciones/sesiones.php");
 include_once("templates/header.php");
 include_once("funciones/conexion.php");
 include_once("templates/navegation-User.php");

 $id = $_GET['id'];
?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Cliente</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php
        
      //sql selection
      $SQL = "SELECT * FROM `user`";
      $result = $conn->query($SQL);

        //iteraction witch one is iqual
        while($user = $result->fetch_assoc()){
          if(sha1($user['user_id']) == $id){
             $currentId = $user['user_id'];
          }
        }
        

        //search que corrent query
        $sqlResult = $SQL . " WHERE user_id = " . $currentId ;
         $resultado = $conn->query($sqlResult);
        $editUser = $resultado-> fetch_assoc();

        // echo '<pre>';
        // var_dump($editUser);
        // echo '</pre>';


    ?>
    
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card" style="width:100%">
        <div class="card-header">
          <h3 class="card-title"></h3>   
        <div class="card-body">
           <!-- form start -->
 <form role="form" name="edit-user" id="edit-user" method="post" action="insert-admin.php" >
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="name">Nombre(s)</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" value="<?php echo $editUser['user_name']?>">
      <div class="valid-feedback">
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="lastName">Apellido(s)</label>
      <input type="text" class="form-control is-valid" name="lastName" id="lastName" placeholder="Apellido" value= "<?php echo $editUser['user_lastname']?>" >
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
        <input type="text" class="form-control is-invalid" id="email" name="email" placeholder="Correo" aria-describedby="inputGroupPrepend3"  value = "<?php echo $editUser['user_email']?>">
        <div class="valid-feedback">
          <!-- Please choose a username. -->
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="address">Direccion</label>
      <input type="text" class="form-control is-invalid" name="address" id="address" placeholder="Direccion" value = '<?php echo $editUser['user_address']?>' >
      <div class="valid-feedback">
        <!-- Please provide a valid city. -->
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="telePhone">Telefono</label>
      <input type="tel" class="form-control is-invalid" name="telePhone" id="telePhone" placeholder="Telefono" value='<?php echo $editUser['user_telephone']?>'>
      <div class="valid-feedback">
        <!-- Please provide a valid state. -->
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="cellPhone">Celular</label>
      <input type="tel" class="form-control is-invalid" name="cellPhone" id="cellPhone" placeholder="Celular" value='<?php echo $editUser['user_cellphone']?>' >
      <div class="valid-feedback">
        <!-- Please provide a valid zip. -->
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="city">Ciudad</label>
      <input type="text" class="form-control is-invalid" name="city" id="city" placeholder="Ciudad" value='<?php echo $editUser['user_city']?>' >
      <div class="valid-feedback">
        <!-- Please provide a valid zip. -->
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="town">Municipio</label>
      <input type="text" class="form-control is-invalid" name="town" id="town" placeholder="Municipio" value='<?php echo $editUser['user_town']?>' >
      <div class="valid-feedback">
        <!-- Please provide a valid zip. -->
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="banc">Banco(s)</label>
      <input type="text" class="form-control is-invalid" name="banc" id="banc" placeholder="Bancos(s)" value='<?php echo $editUser['user_bank']?>' >
      <div class="valid-feedback">
        <!-- Please provide a valid zip. -->
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="bancAccount">Cuenta de Banco</label>
      <input type="text" class="form-control is-invalid" name="bancAccount" id="bancAccount" placeholder="Nº Cuenta" value='<?php echo $editUser['user_bankaccount']?>' >
      <div class="valid-feedback">
        <!-- Please provide a valid zip. -->
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="date">Fecha de Nacimineto</label>
      <input type="date" class="form-control is-invalid" name="date" id="date" placeholder="dd/mm/yyyy" value='<?php echo $editUser['user_date']?>' >
      <div class="valid-feedback">
        <!-- Please provide a valid zip. -->
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="cedula">Cedula</label>
      <input type="text" class="form-control is-valid" name="cedula" id="cedula" placeholder="Cedula" value='<?php echo $editUser['user_cedula']?>'  >
      <div class="valid-feedback">
        <!-- Looks good! -->
      </div>
    </div>
    </div>
    
  </div>

  <input type="hidden" name="number-edit" value="<?php echo $currentId;?>">
  <input type="hidden" name="edit">
  <button class="btn btn-primary" type="submit">Editar</button>
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