<?php
require_once "model/UserModel.php";
require_once "view/LoginView.php";
require_once "helpers/AuthHelper.php";

class UserController{
    private $model;
    private $view;
    private $authHelper;


    public function __construct(){
        $this->model = new UserModel();
        $this->view = new LoginView();
        $this->authHelper = new AuthHelper();
    }

    //VERIFICA SI EXISTE EL EMAIL EN LA BD Y LA CONTRASEÑA COINCIDE
    function startSession(){
        if(isset($_POST['email']) && isset($_POST['pass'])){
            if($this->serverStartSession($_POST['email'], $_POST['pass'])){
                header("Location: ".BASE_URL."adminProducts");
            } else{
                $this->view->renderLogIn();
            }
        }
    }

    function serverStartSession($userEmail, $pass){
        $user = $this->model->getUser($userEmail);
        if($user && password_verify($pass ,($user->contraseña ))){
            session_start();
            $_SESSION ["email"] = $userEmail;
            return true;
        }else return false;
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