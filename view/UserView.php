<?php
class UserView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function renderRegister(){
        $this->smarty->display('templates/register.tpl');
    }
}