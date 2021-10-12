<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

require_once "actions.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if(!empty($_GET['action']))
    $action = $_GET['action'];
else
    $action = 'home';

$params = explode('/', $action);
switch ($params[0]) {
    case 'home':
        showHome();
        break;

    case 'products':
        showProducts();
        break;

    case 'product':
        showProduct($params[1]);
        break;

    case 'categories':
        //showCategories();
        break;

    case 'category':
        showProducts($params[1]);
        break;
    default:

    case 'admin':
        switch($params[1]){
            case 'products':
                showProductsAdmin();
            break;

            case 'category':
                //$productController->showProductsAdmin();
            break;

            case 'deleteProduct':
                deleteProduct($params[2]);
            break;

            case 'addProduct':
                addProduct($params[2], $params[3], $params[4], $params[5]);
            break;

            case 'updateProduct':
                updateProduct($params[2], $params[3], $params[4], $params[5], $params[6]);
            break;
        }
        break;

    echo "404 page not found";
    break;
}
?>