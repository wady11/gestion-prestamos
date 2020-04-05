<?php 
     include_once("funciones/sesiones.php");
     include_once("templates/header.php");
     include_once("funciones/conexion.php");
  
?>
<body>   
    <main role="main">
        <header>
            <?php  include_once("templates/header-bar-user.php");?>
        </header>
        <div class="container-panel">
            <?php
                //sql section
                $sqlQuery = "SELECT * FROM `user`";
                $result = $conn->query($sqlQuery);
                

                //catch url
                $idValor = filter_input(INPUT_GET, sha1('id'));

                //ieraction witch one is equal
                while ($user = $result->fetch_assoc()) {
                    if (sha1($user['user_id']) == $idValor) {
                        $id = $user['user_id'];
                    }
                }

                //search the correct query
                $sqlResult = $sqlQuery . 'WHERE user_id = ' . $id;
                $resultId = $conn->query($sqlResult);
                $selectId = $resultId->fetch_assoc();

                


            ?>
                <div class="main-container">
                        <div class="detail-bar">
                            <h3>Detalles de la cuenta del cliente</h3>
                        </div>
                       
                 <div class="detail-container">
                    <div class="info-detail">
                            <div class="name-detail">
                                <span class="cliente">Nombre del cliente:</span><p id="name"><?php echo $selectId['user_name'].' '. $selectId['user_lastname']  ?></p>
                        </div><!--name-detail-->

                        <div class="info">
                            <div class="text-container">
                                <p class="text">Numero de cedula:</p>
                                <p class="text">Estado:</p>
                                <p class="text">Ultimo prestamo:</p>
                                <p class="text">Monto total Adeudado:</p>
                                <p class="text">Intereses:</p>
                            </div>

                            <div class="information-container">
                                <p class="information"><?php echo $selectId['user_cedula']?></p> 
                                <p class="information">Activo</p>
                                <p class="information">RD$ 2500</p>
                                <p class="information">RD$ 10000</p>
                                <p class="information">4%</p>
                            </div>
                          
                        </div><!--info end-->
                            
                     </div><!--info-detail-->

                        <div class="quick-access">
                            <div class="access-title">
                                <h3>funciones extra</h3>
                            </div>
                            <div class="picture-container">
                                <ul>
                                    <li>
                                    <a href="#"> <i class="fa fa-user-plus"></i> Agregar Cliente</a>                    
                                    </li>
                                    <li>
                                    <a href="#"> <i class="fa fa-user-edit update" alt="refresch client" ></i>Actualizar Cliente</a>          
                                    </li>
                                    <li>
                                    <a href="#"> <img src="img/pay.png" alt="cash" class="quick-img">Abonar</a>
                                    </li>
                                    <li>
                                    <a href="#"> <img src="img/cash.png" alt="pay" class="quick-img">Pagar</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!--quick access end-->
            
              </div><!--detail-container-->
                <div class="button-container">
                    <button class="show-movement"><img src="img/bill.png" class="bill"><p class="text-decoration">ver movimientos</p></button>
                </div>
                
            </div><!--detail-container-->
        </div>
    </main>
</body>
</html>
