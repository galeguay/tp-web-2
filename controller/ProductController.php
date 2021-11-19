<?php
require_once "view/ProductView.php";
require_once "model/ProductModel.php";
require_once "helpers/AuthHelper.php";

class ProductController{

    private $model;
    private $view;
    private $authHelper;

    public function __construct(){
        $this->model = new ProductModel();
        $this->view = new ProductView();
        $this->authHelper = new AuthHelper();
    }

    function showProducts($categories){
        $products = $this->model->getProducts();
        $this->view->renderProducts($products, $categories);
    }
/*
    function showProductsAsAdmin($categories){
        $this->authHelper->checkLoggedIn();
        $products = $this->model->getProducts();
        $this->view->renderProducts($products, $categories);
    }
*/
    function showProductsByCategory($id_category, $categories){
        $products = $this->model->getProductsCategory($id_category);
        $this->view->renderProducts($products, $categories);
    }

    function showProduct($id_product){
        $product = $this->model->getProduct($id_product);
        $this->view->renderProduct($product);
    }

    function showEditProduct($id_product, $categories){
        $product = $this->model->getProduct($id_product);
        $this->view->renderEditProduct($product, $categories);
    }

    function addProduct(){
        $this->authHelper->checkLoggedIn();
        if(isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['contenido']) && isset($_POST['id_categoria'])){
            $this->model->addProductToDB($_POST['nombre'], $_POST['descripcion'], $_POST['contenido'], $_POST['id_categoria']);
            header("Location: ".BASE_URL."products");
        }
    }

    function deleteProduct($id_producto){
        $this->authHelper->checkLoggedIn();
        $this->model->deleteProductFromDB($id_producto);
        header("Location: ".BASE_URL."products");
    }

    function updateProduct($id_producto){
        $this->authHelper->checkLoggedIn();
        if(isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['contenido']) && isset($_POST['id_categoria'])){
            $this->model->updateProduct($_POST['nombre'], $_POST['descripcion'], $_POST['contenido'], $_POST['id_categoria'], $id_producto);
            header("Location: ".BASE_URL."products");
        }
    }

}
