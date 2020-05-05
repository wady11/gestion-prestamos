<?php  
include_once("funciones/conexion.php");//database conexion

if(isset($_POST['add-admin'])){

    
    $user = $_POST ['user'];
    $name = $_POST['name'];
    $password = $_POST ['password'];

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

    $usuario = $_POST['usuario'];
    $password_usuario = $_POST['password'];

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
    $nombreUsuario = $_POST['name'];
    $apellidoUsuario = $_POST['lastName'];
    $emailUsuario = $_POST['email'];
    $direccionUsuario = $_POST['address'];
    $telephonoUsuario = $_POST['telePhone'];
    $cellphoneUsuario = $_POST['cellPhone'];
    $cityUsuario = $_POST['city'];
    $townUsuario = $_POST['town'];
    $bankUsuario = $_POST['banc'];
    $acountBankUsuario = $_POST['bancAccount'];
    $dateUsuario = $_POST['date'];
    $cedulaUsuario = $_POST['cedula'];

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
    // var_dump($_POST);
    // echo '</pre>';
    
    $nombreUsuario = $_POST['name'];
    $apellidoUsuario = $_POST['lastName'];
    $emailUsuario = $_POST['email'];
    $direccionUsuario = $_POST['address'];
    $telephonoUsuario = $_POST['telePhone'];
    $cellphoneUsuario = $_POST['cellPhone'];
    $cityUsuario = $_POST['city'];
    $townUsuario = $_POST['town'];
    $bankUsuario = $_POST['banc'];
    $acountBankUsuario = $_POST['bancAccount'];
    $dateUsuario = $_POST['date'];
    $cedulaUsuario = $_POST['cedula'];
    $id_user = $_POST['number-edit'];
      
        try {
            $stament = $conn->prepare("UPDATE `user` SET user_name = ? ,user_lastname = ?,user_email= ?,user_address = ? ,user_cedula = ? ,user_telephone= ? ,user_cellphone = ? , user_city = ? ,user_town= ? ,user_bank = ? ,user_bankaccount = ? , user_date = ?, user_time= NOW() WHERE user_id = ? ;");
            $stament->bind_param('ssssssssssssi',$nombreUsuario,$apellidoUsuario,$emailUsuario,$direccionUsuario,$cedulaUsuario,$telephonoUsuario,$cellphoneUsuario,$cityUsuario,$townUsuario,$bankUsuario,$acountBankUsuario,$dateUsuario,$id_user);
             $stament->execute();
            if( mysqli_affected_rows($conn ) > 0){
                $respuesta = array(
                    'answer' => 'success',
                    'update-id' => $stament->$id_user,
                    'usuario'=> $nombreUsuario,
                    'lastName' => $apellidoUsuario 
                );
            }
            else{
                $respuesta = array(
                    'answer' => 'reject'
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
    // echo '<pre>';
    //     var_dump($_POST);
    //     echo '</pre>';
    //variables
    $nombreCliente = $_POST['nombrecliente'];
    $cuentaCliente = $_POST['cuentacliente'];
    $descripcionCLiente = $_POST['description'];
    $garanteCliente = $_POST['garante'];
    $statePrestamo = $_POST['estadoprestamo'];
    $montoPrestamo = $_POST['montoprestamos'];
    $interesPrestamo = $_POST['interesprestamo'];
    $termsCliente = $_POST['term'];
    $formatoPago = $_POST['periodo'];   
    $fechaPrestamo = $_POST['fechaprestamo'];
    

    die(json_encode($_POST));
    
    if ($nombreCliente == "" && $montoPrestamo == "" && $interesPrestamo == "" 
            && $termsCliente=="" && $fechaPrestamo ==""){

            $answer = array(
                'respuesta '=> 'reject'
            );
        
    }else{
        try {
            $state = $conn->prepare("INSERT INTO `prestamos`(nombre_prestamo,cuentaPrestamos,descripcion_prestamo,garante_prestamo,estado_prestamo,fcreacion_prestamo,monto_prestamo,interes_prestamos,cuotas_prestamos,formatopago_prestamo)  VALUES(?,?,?,?,?,?,?,?,?,?);");
            $state->bind_param('ssssssiiis',$nombreCLiente,$cuentaCliente,$descripcionCliente,$garanteCLiente,$statePrestamo ,$fechaPrestamo,$montoPrestamo,$interesPrestamo,$termsCliente,$formatoPago);
            $state->execute();
            if( mysqli_affected_rows($conn ) > 0){
                $answer = array(
                    'answer' => 'success',
                    'usuario'=> $nombreCliente,
                    'lastName' => $fechaPrestamo 
                );
            }
            $state->close();
            $conn->close();
        } catch (\Throwable $th) {
            $answer = array(
                'answer'=> $th->getMessage()
            );
        }
       
    }   
    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';

  die(json_encode($answer));
}




?>