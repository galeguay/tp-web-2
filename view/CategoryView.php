<?php
class CategoryView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    //RENDERIZA PAGINA DE LISTA DE CATEGORIAS
    function renderCategories($categories, $isAdmin){
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('isAdmin', $isAdmin);
        $this->smarty->display('templates/listCategories.tpl');
    }

    function renderEditCategory($category){
        $this->smarty->assign('category', $category);
        $this->smarty->display('templates/editCategory.tpl');
    }

    function renderCategory($category){
        $this->smarty->assign('category', $category);
        $this->smarty->display('templates/category.tpl');
    }
}
