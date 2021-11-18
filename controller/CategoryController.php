<?php
require_once "model/CategoryModel.php";
require_once "view/CategoryView.php";
require_once "helpers/AuthHelper.php";

class CategoryController{
    private $model;
    private $view;
    private $authHelper;

    public function __construct(){
        $this->model = new CategoryModel();
        $this->view = new CategoryView();
        $this->authHelper = new AuthHelper();
    }

    function showCategories(){
        $categories = $this->model->getCategories();
        $this->view->renderCategories($categories);
    }

    function showCategory($id){
        $category = $this->model->getCategory($id);
        $this->view->renderCategory($category);
    }

    function showCategoriesAsAdmin(){
        $this->authHelper->checkLoggedIn();
        $categories = $this->model->getCategories();
        $this->view->renderCategories($categories);
    }

    function showEditCategory($id){
        $this->authHelper->checkLoggedIn();
        $category = $this->model->getCategory($id);
        $this->view->renderEditCategory($category);
    }

    function getCategories(){
        $categories = $this->model->getCategories();
        return $categories;
    }

    function getCategory($id_category){
        $category = $this->model->getCategory($id_category);
        return $category;
    }

    function addCategory(){
        $this->authHelper->checkLoggedIn();
        if(isset($_POST['nombre'])){
            $this->model->addCategory($_POST['nombre']);
            header("Location: ".BASE_URL."adminCategories");
        }
    }

    function updateCategoryToDB($id_categoria){
        $this->authHelper->checkLoggedIn();
        if(isset($_POST['nombre'])){
            $this->model->updateCategoryToDB($id_categoria, $_POST['nombre']);
            header("Location: ".BASE_URL."adminCategories");
        }
    }

    function deleteCategory($id_category){
        $this->authHelper->checkLoggedIn();
        $this->model->deleteCategory($id_category);
        header("Location: ".BASE_URL."adminCategories");
    }
}