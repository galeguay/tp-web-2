<?php
class AuthHelper{

    //CHEQUEA SI EL USUARIO ESTA LOGUEADO DEL LADO DEL SERVIDOR
    function checkLoggedIn(){
        if(!$this->isLoggedIn())
            header("Location: ".BASE_URL."logIn");
    }

    //VERIFICA PRIMERO SI SE INICIÓ SESIÓN Y DESPUES SI EL ROL DEL USUARIO ES ADMINISTRADOR
    function checkAdmin(){
        $this->checkLoggedIn();
        if($this->getRol() < 2)
            header("Location: ".BASE_URL."notAdmin");
    }

    //DEVUELVE EL VALOR DEL ROL DE USUARIO:
    //0 PARA INVITADO(USUARIO NO LOGUEADO), 1 PARA USUARIO REGISTRADO Y 2 PARA ADMINISTRADOR
    function getRol(){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if(isset($_SESSION['rol']))
            return $_SESSION['rol'];
        else return 0;
    }

    function getUserEmail(){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if(isset($_SESSION['email']))
            return $_SESSION['email'];
        else return 0;
    }

    function getUserId(){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if(isset($_SESSION['id']))
            return $_SESSION['id'];
        else return -1;
    }

    function isLoggedIn(){
        session_start();
        if(isset($_SESSION["email"]))
            return true;
        else return false;
    }

    //DESTRUYE LA SESION DEL SERVIDOR
    function logOut(){
        session_start();
        session_destroy();
        header("Location: ".BASE_URL."logIn");
    }

}