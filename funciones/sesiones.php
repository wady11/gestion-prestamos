<?php
    //funciones

    function Verificacion_Usuario(){
        if(!User_autentic()){
            header('Location: http://localhost:83/Admin-LTE/login.php');
            exit;
        }
    }

    function User_autentic(){
        return isset($_SESSION['usuario']);
    }

    session_start();
    Verificacion_Usuario();


