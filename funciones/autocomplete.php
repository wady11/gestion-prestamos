<?php

  include_once('conexion.php');

   try {
        $sqlstamente = 'SELECT user_name FROM user';
        $resultUser = $conn->query($sqlstamente);
       
        
   } catch (\Throwable $th) {
        $error = $th->message();
        echo $error;  
   }

   while ( $user = $resultUser->fetch_assoc()) {
         $userValor[] =  $user['user_name'];
   }

        die(json_encode($userValor))

?>