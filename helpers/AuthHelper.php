<?php
class AuthHelper{

    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION["email"])){
            header("Location: ".BASE_URL."logIn");
        }
    }

    function logOut(){
        session_start();
        session_destroy();
    }
}