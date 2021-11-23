<?php
require_once "model/CommentsModel.php";
require_once "api/ApiController.php";

class CommentsApiController extends ApiController{


    public function __construct(){
        parent::__construct();
        $this->model = new CommentsModel();
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
        $result = $this->model->deleteComment($idComment);
        if($result > 0)
            return $this->view->response("El comentario se eliminó correctamente" , 200);
        else
            return $this->view->response("El comentario no se eliminó", 404);
    }

    public function addComment($params = null){
        $data = $this->getData();
        $id = $this->model->addComment($data->contenido, $data->puntaje, $data->id_producto);
        if ($id != 0)
            $this->view->response("El comentario se agregó con id = $id", 200);
        else
            $this->view->response("El comentario no se agregó", 500);
    }

}