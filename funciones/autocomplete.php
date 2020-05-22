<?php

  include_once('conexion.php');

   try {
        $sqlstamente = 'SELECT user_name,user_cedula FROM user';
        $resultUser = $conn->query($sqlstamente);
       
        
   } catch (\Throwable $th) {
        $error = $th->message();
        echo $error;  
   }

   while ( $user = $resultUser->fetch_assoc()) {
         $userValor[] =  $user['user_name'];
         $userCedula[] = $user['user_cedula'];

        $object = (object)[
                'nombre'=> $userValor,
                'cedula'=> $userCedula
        ];

   }

        die(json_encode($object))

?>