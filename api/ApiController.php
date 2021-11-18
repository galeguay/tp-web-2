<?php

class ApiController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new CommentModel();
        $this->view = new ApiView();
    }

    public function getComments($params = null){
        $comments = $this->model->getComments();
        $this->view->response($comments, 200);
        $this->viewComment->renderComments($comments);
    }




}