<?php  
include_once("funciones/conexion.php");//database conexion
require_once('lib/classes/Main.php');

//new instance
$customers = new Main();

if(isset($_POST['add-admin'])){

    
    $user = $customers->secure_input($_POST['user']);
    $name = $customers->secure_input($_POST['name']);
    $password = $customers->secure_input($_POST ['password']);

    $opcion = array(
        'cost'=>12
    );

 $password_hashed = password_hash($password,PASSWORD_BCRYPT, $opcion);//incriptacion de password



    try {
        //conexion a la base de datos
   
        $sthm = $conn->prepare("INSERT INTO `login` (user,name,password) values(?,?,?)");//insert table with
        $sthm->bind_param('sss',$user,$name,$password_hashed);//para que sea segura 



        $sthm->execute();//execute conexion
        $id_registro = $sthm->insert_id;

        //en caso de que una celda sea afectada manda un success
        if($id_registro > 0){
            if($user != "" || $name != "" || $password != ""){
                $resolve = array(
                    'resolve' => 'success',
                    'id_admin' => $id_registro
                );
            }
            
           
        }else if($user == "" || $name == "" || $password == ""){
            $resolve = array(
                'resolve' => 'rejesct',
                'id_admin' => $id_registro
            );
        }


        $sthm->close();//close the execute
        $conn->close();

    } catch (Expection $th) {
        echo 'Error' . $th->getMessage();

    }

    die(json_encode($resolve));

};//add-admin ends



if(isset($_POST['send-login'])){

    $usuario = $customers->secure_input($_POST['usuario']);
    $password_usuario = $customers->secure_input($_POST['password']);

    try {
        //conexion a la base de datos
        // include_once("funciones/conexion.php");//database conexion
        $sthm = $conn->prepare("SELECT * FROM `login` WHERE `user` = ?;");//insert table with
        $sthm->bind_param("s",$usuario);//para que sea segura 
        $sthm->execute();//execute conexion    
        //blind result asigna a variables los valores de la base de datos
        $sthm->bind_result($id_admin, $usuario_admin, $nombre_admin, $password_admin,$userType);
        //si una celca fue afectada
        if ($sthm->affected_rows) {
            $exist = $sthm->fetch();
            if($exist){ 
                //compara la password de la bd y la que introdujo el usuario haciendo una conversion
                $solve = password_verify($password_usuario, $password_admin);
                if($solve == true){
                    session_start();
                    $_SESSION['usuario'] = $usuario_admin;
                    $_SESSION['nombre'] = $nombre_admin;
                    // $_SESSION['Tipo_usuario'] = $userType;
                    //if it's admin 
                    if($userType == "Administrador"){
                        $respuesta = array(
                            'respuesta' => 'Administrador',
                            'usuario' => $nombre_admin
                        );
                    //if it's user
                    }else{
                        $respuesta = array(
                            'respuesta' => 'User',
                            'usuario' => $nombre_admin
                        );
                    }
                    //if solve is false
                } else{
                    $respuesta = array(
                        'respuesta' => 'reject'
                    );
                }
             //if exist is false   
            }else{
                $respuesta = array(
                    'respuesta' => 'reject'
                );
            //if any of this field are empty
            }if($usuario == ""|| $password_usuario == "" ){
                    $respuesta = array (
                        'respuesta' => 'emptys'
                    );
            }
            
        }//try catch ends

        //siempre hay que cerrar nuestra conexiones
        $sthm->close();
        $conn->close();
    } catch (Expection $th) {
        echo 'Error' . $th->getMessage();

    }
    die(json_encode($respuesta));   

}//send-login ends

    
//insert user
if(isset($_POST['add-user'])){

   //variable
    $nombreUsuario = $customers->secure_input($_POST['name']);
    $apellidoUsuario = $customers->secure_input($_POST['lastName']);
    $emailUsuario = $customers->secure_input($_POST['email']);
    $direccionUsuario = $customers->secure_input($_POST['address']);
    $telephonoUsuario = $customers->secure_input($_POST['telePhone']);
    $cellphoneUsuario = $customers->secure_input($_POST['cellPhone']);
    $cityUsuario = $customers->secure_input($_POST['city']);
    $townUsuario = $customers->secure_input($_POST['town']);
    $bankUsuario = $customers->secure_input($_POST['banc']);
    $acountBankUsuario = $customers->secure_input($_POST['bancAccount']);
    $dateUsuario = $customers->secure_input($_POST['date']);
    $cedulaUsuario = $customers->secure_input($_POST['cedula']);

    try {
        $sthm = $conn->prepare("INSERT INTO `user` (user_name,user_lastname,user_email,user_address,user_cedula,user_telephone,user_cellphone,user_city,user_town,user_bank,user_bankaccount,user_date) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");//insert table with
        $sthm->bind_param("ssssssssssss",$nombreUsuario,$apellidoUsuario,$emailUsuario,$direccionUsuario,$cedulaUsuario,$telephonoUsuario,$cellphoneUsuario,$cityUsuario,$townUsuario,$bankUsuario,$acountBankUsuario,$dateUsuario);//para que sea segura 
        $sthm->execute();//execute conexion

        //if any rows was affect
        if(empty($nombreUsuario) & empty($cedulaUsuario)){
            $answer = array (
                'nombre' => 'vacio',
                'apellido' => 'vacio'
            );
        }else{
            if( mysqli_affected_rows($conn) > 0){
                $answer = array(
                    'resolve' => 'success',
                    'usuario'=> $nombreUsuario,
                    'lastName' => $apellidoUsuario  
                );        
                
             }else{
                $answer = array(
                    'resolve' => 'reject',
                    'usuario'=> $nombreUsuario,
                    'lastName' => $apellidoUsuario
                    
                );
            }
        }
       
        
    
        $sthm->close();//close the execute
        $conn->close();

    } catch (Expection $th) {
        echo 'Error' . $th->getMessage();

    }

   echo die(json_encode($answer));   

}//add-user ends





//update user
if(isset($_POST['edit'])){

    // echo '<pre>';
    //     var_dump($_POST);
    // echo '</pre>';
    // die();
    $nombreUsuario =$customers->secure_input($_POST['name']);
    $apellidoUsuario =$customers->secure_input($_POST['lastName']);
    $emailUsuario =$customers->secure_input($_POST['email']);
    $direccionUsuario =$customers->secure_input($_POST['address']);
    $telephonoUsuario =$customers->secure_input($_POST['telePhone']);
    $cellphoneUsuario =$customers->secure_input($_POST['cellPhone']);
    $cityUsuario =$customers->secure_input($_POST['city']);
    $townUsuario =$customers->secure_input($_POST['town']);
    $bankUsuario =$customers->secure_input($_POST['banc']);
    $acountBankUsuario =$customers->secure_input($_POST['bancAccount']);
    $dateUsuario =$customers->secure_input ($_POST['date']);
    $cedulaUsuario =$customers->secure_input($_POST['cedula']);
    $id_user =$customers->secure_input($_POST['number-edit']);
      
        try {
            $stament = $conn->prepare("UPDATE `user` SET user_name = ? ,user_lastname = ?,user_email= ?,user_address = ? ,user_cedula = ? ,user_telephone= ? ,user_cellphone = ? , user_city = ? ,user_town= ? ,user_bank = ? ,user_bankaccount = ? , user_date = ?, user_time= NOW() WHERE user_id = ? ;");
            $stament->bind_param('ssssssssssssi',$nombreUsuario,$apellidoUsuario,$emailUsuario,$direccionUsuario,$cedulaUsuario,$telephonoUsuario,$cellphoneUsuario,$cityUsuario,$townUsuario,$bankUsuario,$acountBankUsuario,$dateUsuario,$id_user);
            $stament->execute();
            //  echo mysqli_affected_rows();
            if(mysqli_affected_rows($conn) > 0){
                $respuesta = array(
                    'answer' => 'success',
                    'usuario'=> $nombreUsuario,
                    'lastName' => $apellidoUsuario 
                );
            }
            else{
                $respuesta = array(
                    'answer' => 'reject',
                    'cedula'=>'repetida'
                );
            }
            $stament->close();
            $conn->close();

        } catch (\Throwable $th) {
            $respuesta = array(
                'answer'=> $th.getMessage()
            );
        }

   die(json_encode($respuesta));

}//edit-user


//create prestamo
if (isset($_POST['add-prestamo'])) {
    //variables

    // echo '<pre>';
    //     var_dump($_POST);

    // echo '</pre>';

    $nombreCliente = $customers->secure_input($_POST['nombrecliente']);
    $numeroCedula = $customers->secure_input($_POST['numerocedula']);
    $descripcionCLiente = $customers->secure_input($_POST['description']);
    $garanteCliente = $customers->secure_input($_POST['garante']);
    $statePrestamo = $customers->secure_input($_POST['estadoprestamo']);
    $montoPrestamo = $customers->secure_input($_POST['montoprestamos']);
    $interesPrestamo = $customers->secure_input($_POST['interesprestamo']);
    $termsCliente = $customers->secure_input($_POST['term']);
    $formatoPago = $customers->secure_input($_POST['periodo']);   
    $fechaPrestamo = $customers->secure_input($_POST['fechaprestamo']);
    

        try {

            if ($nombreCliente == "" && $montoPrestamo == "" && $interesPrestamo == "" 
                && $termsCliente=="" && $fechaPrestamo ==""){

                $answer = array(
                    'respuesta '=> 'reject',
                    'nombre' => $nombreCliente
                );
                
            }else{

                $sqlSatament = $conn->prepare("INSERT into `prestamos`(nombre_prestamo,cuentaPrestamos,descripcion_prestamo,garante_prestamo,estado_prestamo,fcreacion_prestamo,monto_prestamo,interes_prestamos,cuotas_prestamos,formatopago_prestamo) VALUES(?,?,?,?,?,?,?,?,?,?);");
                $sqlSatament->bind_param("ssssssiiis",$nombreCliente,$numeroCedula,$descripcionCLiente,$garanteCliente,$statePrestamo,$fechaPrestamo,$montoPrestamo,$interesPrestamo,$termsCliente,$formatoPago);
                $sqlSatament->execute();

                if (mysqli_affected_rows($conn ) > 0) {
                    $answer = array(
                        'respuesta' => 'success',
                        'nombre' => $nombreCliente
                       

                    );
    
                }else{
                    $answer = array(
                        'respuesta' => 'fail'
                    );
                }

                $sqlSatament->close();
                $conn->close();
                

            }
                
         } catch (\Throwable $th) {
                $answer = array(
                    'answer'=> $th->getMessage()
                );
         }

   die( json_encode($answer));
}


if(isset($_POST['add-pago'])){

    // echo '<pre>';
    //     var_dump($_POST);
    // echo '</pre>';

    // die();
//variable
$trueName = $customers->secure_input($_POST['name']);
$trueId = $customers->secure_input( $_POST['numerocedula']);
$truepay = $customers->secure_input($_POST['montopagoanterior']);
$trueFunction = $customers->secure_input($_POST['funcion']);
$truePayment = $customers->secure_input($_POST['valorrealpago']);
$trueDate = $customers->secure_input($_POST['fechapago']);
$descripcion = $customers->secure_input($_POST['description']);

    try {

            switch ($trueFunction) {
                case 'interes':
                        // $sqlStament = $conn->prepare('INSERT INTO `pagos` (usuario,fecha,cantidad,montoanterio,tipopago,cedula_pago,descripcion) VALUES(?,?,?,?,?,?,?);');  
                        // $sqlStament->bind_param('ssdisss',$trueName,$trueDate,$truepay,$truePayment,$trueFunction,$trueId,$descripcion); 
                        // $sqlStament->execute();
                    break;
                case 'abono':
                        // $sqlStament = $conn->prepare('INSERT INTO `pagos` (usuario,fecha,(montoanterio-cantidad) as cantidad,montoanterio,tipopago,cedula_pago,descripcion) VALUES(?,?,?,?,?,?,?);');  
                        // $sqlStament->bind_param('ssdisss',$trueName,$trueDate,$truepay,$truePayment,$trueFunction,$trueId,$descripcion); 
                        // $sqlStament->execute();
                    break;
                    
                case 'capital':
                        $sqlStament = $conn->prepare('INSERT INTO `pagos` (usuario,fecha,cantidad,montoanterio,tipopago,cedula_pago,descripcion) VALUES(?,?,?,?,?,?,?);');  
                        $sqlStament->bind_param('ssdisss',$trueName,$trueDate,$truePayment,$truepay,$trueFunction,$trueId,$descripcion); 
                        $sqlStament->execute();  
                    break;

                default:
                    $respuesta = array (
                        'respuestas'=> 'something went wrong'
                        );
                    break;
            
                        

        }//switch
        
        
    
            //arrow affected
        if(mysqli_affected_rows($conn)> 0){
            $answer = array (
                'respuesta' => 'success',
                'pago' => 'success'
            );        
        }else{
            $answer = array (
                'respuesta' => 'reject'
            );
        }

       $sqlStament->close();
       $conn->close();

    } catch (\Throwable $th) {
        $answer = array(
            'respuesta' => $th->getMessage()
        );
    }

    die(json_encode($answer));


}



?>