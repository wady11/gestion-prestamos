<?php
    // nmysql conection
    $conn = new mysqli('localhost', 'root', '', 'test');
    // $conn = mysql_connect('localhost', 'root', '', 'test');
    

    //just in case of error
    if($conn-> connect_error){
        echo $error -> $conn->connect_error;
    }


    //para saber si esta conectado a la base datos
    //  if($conn->ping()){
    //     echo 'conectado';                
    // }else{
    //     echo 'no conectado';
    // }
?>
