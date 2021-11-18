<?php
require_once 'libs/smarty/Smarty.class.php';

class UserView{
    private $smarty;
    private $authHelper;


    function __construct(){
        $this->smarty = new Smarty();
        $this->authHelper = new AuthHelper();
    }


    function renderRegister(){
        $this->smarty->assign('userRol', $this->authHelper->getRol());
        $this->smarty->assign('userEmail', $this->authHelper->getUserEmail());
        $this->smarty->display('templates/register.tpl');
    }

    function renderUsers($users){
        $this->smarty->assign('users', $users);
        $this->smarty->assign('userRol', $this->authHelper->getRol());
        $this->smarty->assign('userEmail', $this->authHelper->getUserEmail());
        $this->smarty->display('templates/listUsers.tpl');
    }

    function renderLogIn(){
        $this->smarty->assign('userRol', $this->authHelper->getRol());
        $this->smarty->assign('userEmail', $this->authHelper->getUserEmail());
        $this->smarty->display('templates/logIn.tpl');
    }

    function renderHome(){
        $this->smarty->assign('userRol', $this->authHelper->getRol());
        $this->smarty->assign('userEmail', $this->authHelper->getUserEmail());
        $this->smarty->display('templates/home.tpl');
    }

    function renderError($mensaje){
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->assign('userRol', $this->authHelper->getRol());
        $this->smarty->assign('userEmail', $this->authHelper->getUserEmail());
        $this->smarty->display('templates/error.tpl');
    }

}
