<?php
require_once "view/ProductView.php";
require_once "model/ProductModel.php";

class ProductController{

    private $model;
    private $view;

    public function __construct(){
        $this->model = new ProductModel();
        $this->view = new ProductView();
    }

    function showProducts($categories, $id_category = null){
        if ($id_category == null){
            $products = $this->model->getProducts();
        }else{
            $products = $this->model->getProductsCategory($id_category);
        }
        $this->view->renderProducts($products, false, $categories);
    }
/*
    function showProductsByCategory($id_category){
    
    }*/

    function showProduct($id_product){
        $product = $this->model->getProduct($id_product);
        $this->view->renderProduct($product);
    }


    //METODOS COMO ADMIN
    function showProductsAdmin($categories, $id_category = null){
        //CHEQUEAR LOGUEO COMO ADMIN
        if ($id_category == null){
            $products = $this->model->getProducts();
        }else{
            $products = $this->model->getProductsCategory($id_category);
        }
        $this->view->renderProducts($products, true, $categories);
    }

    function addProduct($nombre, $descripcion, $contenido, $categoria){
        $this->model->addProductToDB($nombre, $descripcion, $contenido, $categoria);
    }

    function deleteProduct($id_producto){
        $this->model->deleteProductFromDB($id_producto);
    }

    function editProduct(){
        //$product = $this->model->getProduct($id);
        //$this->view->renderEditProduct($product);

        //$product = mao
        if(isset($_POST['nombre'])){
            echo $_POST['nombre']." ".$_POST['descripcion']." ".$_POST['contenido']." ".$_POST['id_categoria'];
        }
    }

    function updateProduct($nombre, $descripcion, $contenido, $categoria, $id_producto){
        $this->model->updateProduct($nombre, $descripcion, $contenido, $categoria, $id_producto);
    }

    function showEditProduct($id_product, $categories){
        $product = $this->model->getProduct($id_product);
        $this->view->renderEditProduct($product, $categories);

    }

}