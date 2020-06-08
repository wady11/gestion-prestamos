<?php

class Main{

    public function _contruct(){

    }

    //secure php form input function
    public function secure_input($str){
        $str = trim($str);
        $str = stripslashes($str);
        $str = htmlspecialchars($str);
        return $str;
    }






}


?>