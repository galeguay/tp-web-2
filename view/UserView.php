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

    function renderUsers($users){
        $this->smarty->assign('users', $users);
        $this->smarty->display('templates/listUsers.tpl');
    }

    function renderLogIn(){
        $this->smarty->display('templates/logIn.tpl');
    }

    function renderHome(){
        $this->smarty->display('templates/home.tpl');
    }

}