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

    function showProducts($id_category = null){
        if ($id_category == null){
            $products = $this->model->getProducts();
        }else{
            $products = $this->model->getProductsCategory($id_category);
        }
        $this->view->renderProducts($products, false);
    }

    function showProductsAdmin($id_category = null){
        //CHEQUEAR LOGUEO COMO ADMIN
        if ($id_category == null){
            $products = $this->model->getProducts();
        }else{
            $products = $this->model->getProductsCategory($id_category);
        }
        $this->view->renderProducts($products,true);
    }

    function showProduct($id_product){
        $product = $this->model->getProduct($id_product);
        $this->view->renderProduct($product);
    }

    function deleteProduct($id_producto){
        $this->model->deleteProduct($id_producto);
    }
}