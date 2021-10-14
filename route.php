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
$categoriesController = new CategoryController();

switch ($params[0]) {
    case 'home':
        $categories = $categoriesController->getCategories();
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

    case 'products':
        $categories = $categoriesController->getCategories();
        $productController->showProducts($categories);
        break;

    case 'product':
        $productController->showProduct($params[1]);
        break;

    case 'adminProducts':
        $categories = $categoriesController->getCategories();
        $productController->showProductsAsAdmin($categories);
        break;

    case 'categories':
        $categoryController->showCategories();
        break;

    case 'adminCategories':
        $categoriesController->showCategoriesAsAdmin();
        $categoryController->showCategoriesAsAdmin();
        break;
/*
//AGREGA EL USUARIO A LA BD
case 'addUser':
    addUser();
    break;
*/
/*
    case 'category':
        showProducts($params[1]);
        break;
/*
//REDIRIGE A LA PAGINA DE REGISTRO DE USUARIO
case 'register':
    $userController->showRegister();
    break;
*/



//AGREGA LA CATEGORIA A LA BD
    case 'addCategory':
        $categoryController->addCategory($params[1]);
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
        $categories = $categoriesController->getCategories();
        $productController->showEditProduct($params[1], $categories);
    break;

    //ACTUALIZA LOS CAMPOS DEL PRODUCTO EN LA BD
    case 'updateProduct':
        $productController->updateProduct($params[1]);
    break;

    case 'notLogin':
        echo "No estas loguedo";
    break;


    default:
        echo "404 page not found";
    break;
}

/*
    //AGREGA USUARIO A LA BD
    function addUser(){
        if(isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['pass'])){
        
            $passHash = password_hash($_POST['pass'], PASSWORD_BCRYPT);
            $userController->addUser($_POST['nombre'], $_POST['email'], $passHash);
        }
    }
*/