<?php

include_once('autocomplete.php');

try {
    $model = new autoComplete();

    
    $text = $_GET['nombrecliente'];
    
    $res = $model->search($text);

    echo json_encode($res);
} catch (\Throwable $th) {
     echo 'Error' . $th->getMessage();
}



?>