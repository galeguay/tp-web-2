<?php
class CategoryView{
    private $smarty;
    private $authHelper;


    function __construct(){
        $this->smarty = new Smarty();
        $this->authHelper = new AuthHelper();
    }


    //RENDERIZA PAGINA DE LISTA DE CATEGORIAS
    function renderCategories($categories){
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('userRol', $this->authHelper->getRol());
        $this->smarty->assign('userEmail', $this->authHelper->getUserEmail());
        $this->smarty->display('templates/listCategories.tpl');
    }

    //RENDERIZA PAGINA DE LISTA DE CATEGORIAS PARA ADMINISTRADORES
    function renderEditCategory($category){
        $this->smarty->assign('category', $category);
        $this->smarty->assign('userRol', $this->authHelper->getRol());
        $this->smarty->assign('userEmail', $this->authHelper->getUserEmail());
        $this->smarty->display('templates/editCategory.tpl');
    }

    function renderCategory($category){
        $this->smarty->assign('category', $category);
        $this->smarty->assign('userRol', $this->authHelper->getRol());
        $this->smarty->assign('userEmail', $this->authHelper->getUserEmail());
        $this->smarty->display('templates/category.tpl');
    }
}
