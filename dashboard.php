<?php

include_once("funciones/sesiones.php");
include_once("templates/header.php");
include_once("templates/header-bar-user.php");
include_once("templates/navegation-User.php");
include_once("funciones/conexion.php");
 
?>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
            <p style="font-size:14px">Panel de Control<p>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php

     

      //  echo $showCliente;
        //show client
        try {
          $sqlshow = 'SELECT  COUNT(*) as client FROM `user`';
          $resultshow = $conn->query($sqlshow);
          $showClient = $resultshow->fetch_assoc();
        } catch (\Throwable $th) {
          $error = $th->message();
          // echo $error;
        }
        

        //show total money borred
        try {
          $sqlMoney = 'SELECT prestamos.monto_prestamo - SUM(pagos.cantidad) AS prestamos from pagos INNER JOIN prestamos WHERE pagos.tipopago IN ("abono","capital")';
          $showMoney = $conn->query($sqlMoney);
          $moneyShow = $showMoney->fetch_assoc();
        } catch (\Throwable $the) {
          $er = $the->message();
          // echo $er ;
        }


        try {
          $sqlPay = 'SELECT SUM(cantidad) as sumaTotal from pagos WHERE tipopago IN ("abono","capital")';
          $showPay = $conn->query($sqlPay);
          $payShow = $showPay->fetch_assoc();
        } catch (\Throwable $the) {
          $errorPay = $the->message();
          // echo $er ;
        }
      //  echo '<pre
      //   var_dump($showClient);
      //   echo '</pre>';
    
    
    ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 id='valordashboard'><?php echo $moneyShow['prestamos']?></h3>

                <p>Prestado</p>
              </div>
              <div class="icon">
                <img src="img/dollar.ico" class="icon-img" alt="Dollar">
                <!-- <i class="ion ion-bag" style="right:49px"></i> -->
              </div>
              <a href="/Admin-LTE/List-prestamos.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $showClient['client'] ?></h3>

                <p>Clientes</p>
              </div>
              <div class="icon">
                 <img src="img/clients.ico" class="icon-img" alt="clientes">
              </div>
              <a href="List-user.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 id='dashboardpagos'><?php echo $payShow['sumaTotal']  ?></h3>

                <p>Pagos</p>
              </div>
              <div class="icon">
              <img src="img/dollar.ico" class="icon-img" alt="Dollar">
              </div>
              <a href="listPago.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>1</h3>

                <p>Grafico</p>
              </div>
              <div class="icon">
              <img src="img/stats.ico" class="icon-img" alt="Dollar">
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars" style="right:49px"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars" style="right:49px"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars" style="right:49px"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars" style="right:49px"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
       
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <script src='js/accounting.min.js'></script>
  <script>
        
      //accounting
      let valorh1 = document.getElementById('valordashboard');
      let pagoh1 = document.getElementById('dashboardpagos');

      let dashBoardPago = parseInt(pagoh1.innerHTML); 
      let dashBoardValor = Number(valorh1.innerHTML);

      valorh1.innerHTML = accounting.formatMoney(dashBoardValor);
      pagoh1.innerHTML = accounting.formatMoney(dashBoardPago);  
  
  </script>
<?php
  include_once("templates/footer.php")
?>