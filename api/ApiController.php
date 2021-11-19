<?php

class ApiController{
    private $model;
    private $view;

    private function getData() {
        return json_decode($this->data);
    }

    public function __construct(){
        $this->model = new CommentModel();
        $this->view = new ApiView();
    }

    public function getComments($params = null){
        $comments = $this->model->getComments();
        $this->view->response($comments, 200);
        $this->viewComment->renderComments($comments);
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