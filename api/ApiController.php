<?php
require_once "model/CommentModel.php";
require_once "api/ApiView.php";

class ApiController{
    private $model;
    private $view;
    private $data;


    public function __construct(){
        $this->model = new CommentModel();
        $this->view = new ApiView();
    }


    private function getData() {
        return json_decode($this->data);
    }

    public function getComments($params = null){
        $idProduct = $params[':ID'];
        $comments = $this->model->getComments($idProduct);
        $this->view->response($comments, 200);
    }

    public function getComment($params = null){
        $idComment = $params[':ID'];
        $comment = $this->model->getComment($idComment);
        $this->view->response($comment, 200);
    }

    public function deleteComment($params = null){
        $idComment = $params[':ID'];
        $this->model->deleteComment($idComment);
    }

    public function addComment($params = null){
        $data = $this->getData();
        $id = $this->model->addComment($data->contenido, $data->puntaje);
        $comment = $this->model->getComment($id);
        if ($comment)
            $this->view->response($comment, 200);
        else
            $this->view->response("La tarea no fue creada", 500);
    }

    public function updateTask($params = null) {
        $id = $params[':ID'];
        $data = $this->getData();
        $comment = $this->model->getComment($id);
        if ($comment) {
            $this->model->updateComment($id, $data->contenido, $data->puntaje);
            $this->view->response("El comentario fue modificado con exito.", 200);
        } else
            $this->view->response("El comentario con id={$id} no existe", 404);
    }
}