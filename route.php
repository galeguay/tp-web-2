<?php
require_once "controller/ProductController.php";
require_once "controller/CategoryController.php";
require_once "controller/UserController.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if(!empty($_GET['action']))
    $action = $_GET['action'];
else
    $action = 'home';

$params = explode('/', $action);
$userController = new UserController();
$productController = new ProductController();
$categoryController = new CategoryController();

switch ($params[0]) {
    case 'home':
        $categories = $categoryController->getCategories();
        $productController->showProducts($categories);
        break;

    case 'logIn':
        $userController->showLogIn();
        break;

    case 'startSession':
        $userController->startSession();
        break;

    case 'logOut':
        $userController->logOut();
        header("Location: ".BASE_URL."home");
        break;

    case 'modifyUserRol':
        $userController->modifyUserRol($params[1]);
        break;

    //REDIRIGE A LA PAGINA DE REGISTRO DE USUARIO
    case 'register':
        $userController->showRegister();
    break;

    //AGREGA USUARIO A LA BD
    case 'addUser':
        $userController->addUser();
    break;

    case 'notAdmin':
        $userController->showError("Se necesitan privilegios de administrador");
    break;

    case 'notAdmin':
        $mensaje = "Se necesitan privilegios de administrador";
        $userController->showError($mensaje);
    break;

    case 'categories':
        $categoryController->showCategories();
        break;

    case 'category':
        $categories = $categoryController->getCategories();
        $productController->showProductsByCategory($params[1], $categories);
        break;

    //AGREGA LA CATEGORIA A LA BD
    case 'addCategory':
        $categoryController->addCategory();
    break;

    //ELIMINA LA CATEGORIA DE LA BD
    case 'deleteCategory':
        $categoryController->deleteCategory($params[1]);
    break;

    //REDIRIGE AL TPL PARA EDITAR LA CATEGORIA SELECCIONADO
    case 'editCategory':
        $categoryController->showEditCategory($params[1]);
    break;

    //ACTUALIZA LOS CAMPOS DE LA CATEGORIA EN LA BD
    case 'updateCategory':
        $categoryController->updateCategory($params[1]);
    break;

    case 'products':
        $categories = $categoryController->getCategories();
        $productController->showProducts($categories);
        break;

    case 'product':
        $productController->showProduct($params[1]);
        break;

    //AGREGA EL PRODUCTO A LA BD
    case 'addProduct':
        $productController->addProduct();
    break;

    //ELIMINA EL PRODUCTO DE LA BD
    case 'deleteProduct':
        $productController->deleteProduct($params[1]);
    break;

    //REDIRIGE AL TPL PARA EDITAR EL PRODUCTO SELECCIONADO
    case 'editProduct':
        $categories = $categoryController->getCategories();
        $productController->showEditProduct($params[1], $categories);
    break;

    //ACTUALIZA LOS CAMPOS DEL PRODUCTO EN LA BD
    case 'updateProduct':
        $productController->updateProduct($params[1]);
    break;

    //PAGINA USUARIOS
    case 'users':
        $userController->showUsers();
    break;

    //ELIMINAR USUARIO EN LA DB
    case 'deleteUser':
        $userController->deleteUser($params[1]);
    break;


    default:
        echo "404 page not found";
    break;
}