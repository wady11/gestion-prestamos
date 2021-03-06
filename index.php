<?php
  session_start();
  $signout = $_GET['signout'];
  if($signout){
    session_destroy();
  }
 include_once("templates/header.php");

?>
<body class="hold-transition login-page">
  <div class="login-box">
    
    <!-- /.login-logo -->
    <div class="card-login">
      <div class="card-body login-card-body">
        <div class="login-logo">
          <i class="fas fa-user" style="font-size:67px"></i>
        </div>
        <p class="login-box-msg">Sign in to start your session</p>
      

        <form  method="post" action="insert-admin.php" name="login-admin-form" id="login-form">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="usuario" placeholder="Usuario" id='user'>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password" id="keypassword">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              
            </div>
            <!-- /.col -->
            <div class="col-12">
              <input type="hidden" name="send-login" value="1" > 
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form><!--forms ends-->
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
<!-- /.login-box -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src='js/jquery.min.js'></script>
<!--JQuery-ui-->
<script src="js/jquery-ui.min.js" type="text/javascript"></script>
<!-- Bootstrap 4 -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- daterangepicker -->
<script src="js/moment.min.js"></script>
<!-- InputMask -->
<script src="js/jquery.inputmask.bundle.js"></script>
<!--Datatables-->
<script src="js/datatable/jquery.dataTables.min.js"></script>
<script src="js/dataTable/dataTables.responsive.min.js"></script>
<script src="js/dataTable/dataTables.bootstrap4.min.js"></script>
<script src="js/dataTable/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>
<!-- sweetaler -->
<script src="js/sweetalert2.min.js"></script>
<!-- ajax-funcion -->
<script src="js/function/admin-ajax.js"></script>
<!--App-->
<script src="js/app.js"></script>
<!--Calculadora amortizacion-->
<script src="js/function/calculadora.js"></script> 


</body>

</html>

  

