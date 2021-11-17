<?php
require_once "model/UserModel.php";
require_once "helpers/AuthHelper.php";

class UserController{
    private $model;
    private $view;
    private $authHelper;


    public function __construct(){
        $this->model = new UserModel();
        $this->view = new UserView();
        $this->authHelper = new AuthHelper();
    }

    //VERIFICA LOS CAMPOS PASADOS POR POST EMAIL Y CONTRASEÑA PARA INICIAR SESION
    function startSession(){
        if(isset($_POST['email']) && isset($_POST['pass'])){
            if($this->serverStartSession($_POST['email'], $_POST['pass'])){
                header("Location: ".BASE_URL."adminProducts");
            } else{
                $this->view->renderLogIn();
            }
        }
    }

    //VERIFICA SI EXISTE EL EMAIL EN LA BD Y LA CONTRASEÑA COINCIDE E INICIA SESSION EN EL SERVIDOR
    function serverStartSession($userEmail, $pass){
        $user = $this->model->getUser($userEmail);
        if($user && password_verify($pass ,($user->contraseña ))){
            session_start();
            $_SESSION ["email"] = $userEmail;
            $_SESSION ["rol"] = $user->rol;
            return true;
        }else return false;
    }

    //VERIFICA SI EL ROL DEL USUARIO ES ADMINISTRADOR
    function checkAdmin(){
        session_start();
        if(isset($_SESSION['rol'])){
            if($_SESSION['rol'] == 2)
                return true;
            else return false;
        }else return false;
    }

    //MODIFICA EL ROL DEL USUARIO
    function modifyUserRol(){
        if(isset($_POST['rol']) && isset($_POST['email'])){
            if(!empty($_POST['rol']) && !empty($_POST['email'])){
                if($this->checkAdmin){
                    $this->model->modifyUserRol($_POST['email'], $_POST['rol']);
                }//mostrar error que no es admin
            }//mostrar error q estan vacio los campos
        }//mostrar error de que no se estableció alguno de los campos
    }

    //REDIRIGE A LA PAGINA DE LOGUEO
    function showLogIn(){
        $this->view->renderLogIn();
    }

    //CIERRA SESIÓN
    function logOut(){
        $this->authHelper->logOut();
    }

    //LLEVA A LA PAGINA DE REGISTRO DE USUARIO
    function showRegister(){
        $this->view->renderRegister();
    }

    //REGISTRA UN NUEVO USUARIO EN LA BD
    function addUser(){
        if(isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['pass'])){
            if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['pass'])){
                $pass = $_POST['pass'];
                $passCrypted = password_hash($_POST['pass'], PASSWORD_BCRYPT);
                $this->model->addUser($_POST['nombre'], $_POST['email'], $passCrypted);
                $this->startSession($_POST['email'], $pass);
                header("Location: ".BASE_URL."home");
            }//ver de mostrar error de campos vacio
        }//ver de mostrar error de campos vacio
    }
}