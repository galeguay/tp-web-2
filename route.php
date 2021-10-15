<?php
require_once "controller/ProductController.php";
require_once "controller/CategoryController.php";
require_once "controller/LoginController.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if(!empty($_GET['action']))
    $action = $_GET['action'];
else
    $action = 'home';

$params = explode('/', $action);
$loginController = new LoginController();
$productController = new ProductController();
$categoryController = new CategoryController();

switch ($params[0]) {
    case 'home':
        $categories = $categoryController->getCategories();
        $productController->showProducts($categories);
        break;

    case 'logIn':
        $loginController->showLogIn();
        break;

    case 'verifyLogIn':
        $loginController->verifyLogIn();
        break;

    case 'logOut':
        $loginController->logOut();
        header("Location: ".BASE_URL."home");
        break;


//REDIRIGE A LA PAGINA DE REGISTRO DE USUARIO
case 'register':
    $loginController->showRegister();
    break;
    
    //AGREGA USUARIO A LA BD
    case 'addUser':
        $loginController->addUser();
    break;


    case 'categories':
        $categoryController->showCategories();
        break;

    case 'adminCategories':
        $categoryController->showCategoriesAsAdmin();
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
        $categoryController->updateCategoryToDB($params[1],$_POST['nombre']);
    break;



    case 'products':
        $categories = $categoryController->getCategories();
        $productController->showProducts($categories);
        break;

    case 'product':
        $productController->showProduct($params[1]);
        break;

    case 'adminProducts':
        $categories = $categoryController->getCategories();
        $productController->showProductsAsAdmin($categories);
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



    default:
        echo "404 page not found";
    break;
}