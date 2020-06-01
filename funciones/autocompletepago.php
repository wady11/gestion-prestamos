<?php

  include_once('conexion.php');
#SELECT concat_ws(' ',user_name,user_lastname) as nombre,user_cedula FROM user
#el error esta en que el monto es de prestamos y estoy llamando usuario
   try {
        $sqlstamente = 'SELECT concat_ws(" ",user_name, user_lastname)as cliente, user_cedula,monto_prestamo AS monto,(interes_prestamos) as interes FROM user INNER JOIN prestamos ON user.user_id = prestamos.id_prestamos';
        $resultUser = $conn->query($sqlstamente);
       
        
   } catch (\Throwable $th) {
        $error = $th->message();
        echo $error;  
   }

   while ( $user = $resultUser->fetch_assoc()) {
         $userValor[] =  $user['cliente'];
         $userCedula[] = $user['user_cedula'];
         $userMonto[]= $user['monto'];
         $userInteres[] = $user['interes'];
         

        $object = (object)[
                'nombre'=> $userValor,
                'cedula'=> $userCedula,
                'monto' => $userMonto,
                'interes'=> $userInteres
        ];

   }

        die(json_encode($object))

?>