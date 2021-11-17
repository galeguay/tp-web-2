<?php
class AuthHelper{


    //CHEQUEA SI EL USUARIO ESTA LOGUEADO DEL LADO DEL SERVIDOR
    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION["email"])){
            header("Location: ".BASE_URL."logIn");
        }
    }

    //DESTRUYE LA SESION DEL LADO DEL SERVIDOR
    function logOut(){
        session_start();
        session_destroy();
    }

}