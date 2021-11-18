<?php
require_once 'libs/smarty/Smarty.class.php';

class ProductView{
    private $smarty;
    private $authHelper;


    function __construct(){
        $this->smarty = new Smarty();
        $this->authHelper = new AuthHelper();
    }


    //RENDERIZA PAGINA DE LISTA DE PRODUCTOS
    function renderProducts($products, $categories = null){
        $this->smarty->assign('products', $products);
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('userRol', $this->authHelper->getRol());
        $this->smarty->assign('userEmail', $this->authHelper->getUserEmail());
        $this->smarty->display('templates/listProducts.tpl');
    }

    //RENDERIZA PAGINA DE DETALLES DE PRODUCTOS
    function renderProduct($product){
        $this->smarty->assign('product', $product);
        $this->smarty->assign('userRol', $this->authHelper->getRol());
        $this->smarty->assign('userEmail', $this->authHelper->getUserEmail());
        //$this->smarty->assign('comment', $comment);
        $this->smarty->display('templates/product.tpl');
    }

    function renderEditProduct($product, $categories){
        $this->smarty->assign('product', $product);
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('userRol', $this->authHelper->getRol());
        $this->smarty->assign('userEmail', $this->authHelper->getUserEmail());
        $this->smarty->display('templates/editProduct.tpl');
    }
}