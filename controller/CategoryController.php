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
}