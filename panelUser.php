<?php 
     include_once("funciones/sesiones.php");
     include_once("templates/header.php");
     include_once("funciones/conexion.php");
     $idValor= $_GET['id'];
?>
<body>   
    <main role="main">
        <header>
            <?php  include_once("templates/header-bar-user.php");?>
        </header>
        <div class="container-panel">
            <?php
                //sql section
                $sqlQuery = "SELECT id_prestamos, nombre_prestamo, interes_prestamos,estado_prestamo,user.user_cedula FROM prestamos INNER JOIN user on prestamos.id_prestamos = user.user_id";
                $result = $conn->query($sqlQuery);
            
                
                //catch url
                  //ieraction witch one is equal
                while($example = $result->fetch_assoc()) {
                    if(sha1($example['id_prestamos']) == $idValor){
                        $id = $example['id_prestamos'];
                     }
                    
                }

                 //search the correct query
                 $sqlResult = $sqlQuery . ' WHERE user_id = ' . $id;
                 $resultId = $conn->query($sqlResult);
                 $selectId = $resultId->fetch_assoc();
                 
               
                // while ($user = $result->fetch_assoc()) {
                //     if (sha1($user['user_id']) == $idValor) {
                //         $id = $user['user_id'];
                //     }
                // }

                

                


            ?>
                <div class="main-container">
                        <div class="detail-bar">
                            <h3>Detalles de la cuenta del cliente</h3>
                        </div>
                       
                 <div class="detail-container">
                    <div class="info-detail">
                            <div class="name-detail">
                                <span class="cliente">Nombre del cliente:</span><p id="name"><?php echo $selectId['nombre_prestamo']   ?></p>
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
                                <p class="information"><?php echo $selectId['user_cedula'] ?></p> 
                                <p class="information"><?php echo $selectId['estado_prestamo']?></p>
                                <p class="information">RD$ 2500</p>
                                <p class="information">RD$ 10000</p>
                                <p class="information"><?php echo $selectId['interes_prestamos']?>%</p>
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
                                    <a href="/Admin-LTE/Create-user.php"> <i class="fa fa-user-plus plus"></i> Agregar Cliente</a>                    
                                    </li>
                                    <li>
                                    
                                    <a href="/Admin-LTE/List-prestamos.php" title="lista de prestamos"> <i class="fas fa-list update" ></i>Lista de prestamos</a>          
                                    </li>
                                    <li>
                                    <a href="#"> <img src="img/pay.png" alt="cash" class="quick-img">Abonar</a>
                                    </li>
                                    <li>
                                    <a href="#"> <img src="img/cash.png" alt="pay" class="quick-img">Pagar</a>
                                    </li>
                                    <li>
                                    <a href="#" title="reenganche"><i class="fa fa-handshake plus"></i>Reenganche</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!--quick access end-->
            
              </div><!--detail-container-->
                <div class="button-container">
                    <button class="show-movement"><img src="img/bill.png" class="bill"><p class="text-decoration">ver movimientos</p></button>
                </div>
                
                <div class="table-container">
        <table id="evento" class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Periodo</th>
                                                                <th>Fecha</th>
                                                                <th>Cuota</th>
                                                                <th>Capital</th>
                                                                <th>Interes</th>
                                                                <th>Saldo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tBody">

                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Periodo</th>
                                                                <th>Fecha</th>
                                                                <th>Cuota</th>
                                                                <th>Capital</th>
                                                                <th>Interes</th>
                                                                <th>Saldo</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
        </div><!--table ontainer-->

            </div><!--detail-container-->

            
        </div>
       
            
    </main>
</body>
</html>
