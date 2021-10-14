<?php
require_once 'libs/smarty/Smarty.class.php';

class LoginView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showLogIn(){
        $this->smarty->display('templates/logIn.tpl');
    }

    function showHome(){
        $this->smarty->display('templates/home.tpl');
    }

}