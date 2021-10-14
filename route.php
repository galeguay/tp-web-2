<?php
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

            case 'categories':
                showCategories();
            break;



        }
        break;

    //AGREGA EL PRODUCTO A LA BD
    case 'addProduct':
        addProduct();
    break;

    //ELIMINA EL PRODUCTO DE LA BD
    case 'deleteProduct':
        deleteProduct($params[1]);
    break;

    //CARGA EL HTML PARA EDITAR EL PRODUCTO SELECCIONADO
    case 'editProduct':
        editProduct($params[1]);
    break;

    //ACTUALIZA LOS CAMPOS DEL PRODUCTO EN LA BD
    case 'updateProduct':
        updateProduct($params[1]);
    break;

    echo "404 page not found";
    break;
}
?>