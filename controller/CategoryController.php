<?php
require_once "model/CategoryModel.php";
require_once "view/CategoryView.php";

class CategoryController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new CategoryModel();
        $this->view = new CategoryView();
    }

    function showCategories(){
        $categories = $this->model->getCategories();
        $this->view->renderCategories($categories, false);
    }

    function showCategoriesAsAdmin(){
        $categories = $this->model->getCategories();
        $this->view->renderCategories($categories, true);
    }

    function getCategories(){
        $categories = $this->model->getCategories();
        return $categories;
    }

    function showEditCategory($id){
        $category = $this->model->getCategory($id);
        $this->view->renderEditCategory($category);
    }

    function getCategory($id_category){
        $category = $this->model->getCategory($id_category);
        return $category;
    }

    function updateCategoryToDB($id_categoria){
        if(isset($_POST['nombre'])){
            $this->model->updateCategoryToDB($id_categoria, $_POST['nombre']);
            $this->showCategoriesAsAdmin();
        }
    }
}