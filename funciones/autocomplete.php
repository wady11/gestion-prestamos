<?php

  include_once('conexion.php');
#SELECT concat_ws(' ',user_name,user_lastname) as nombre,user_cedula FROM user
   try {
        $sqlstamente = 'SELECT concat_ws(" ",user_name, user_lastname)as cliente, user_cedula FROM user';
        $resultUser = $conn->query($sqlstamente);
       
        
   } catch (\Throwable $th) {
        $error = $th->message();
        echo $error;  
   }

   while ( $user = $resultUser->fetch_assoc()) {
         $userValor[] =  $user['cliente'];
         $userCedula[] = $user['user_cedula'];

        $object = (object)[
                'nombre'=> $userValor,
                'cedula'=> $userCedula
        ];

   }

        die(json_encode($object))

?>