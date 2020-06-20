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


      //GENERATE  SECURE URL
     public function generateURLSecure($userId){
        return  sha1($userId);
      }





}


?>