<?php
require_once 'libs/smarty/Smarty.class.php';

class UserView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function renderRegister(){
        $this->smarty->display('templates/register.tpl');
    }

    function renderLogIn(){
        $this->smarty->display('templates/logIn.tpl');
    }

    function renderHome(){
        $this->smarty->display('templates/home.tpl');
    }

}