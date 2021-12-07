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
        $filtroEstrellas = "";
        $orderBy = "";
        $typeOrderAsc = false;
        if (isset($_GET["estrellas"]) && !empty($_GET["estrellas"])){ //chequea si se estableció el filtro de cantidad de estrellas
            $filtroEstrellas = $_GET["estrellas"];
        }
        if (isset($_GET["orderBy"]) && !empty($_GET["orderBy"])){ //chequea si se estableció el criterio de orden
            $orderBy = $_GET["orderBy"];
        }
        if (isset($_GET["typeOrder"]) && !empty($_GET["typeOrder"])){ //chequea si se estableció si es ascendente o descendente el orden
            $typeOrder = $_GET["typeOrder"];
        }
        $comments = $this->model->getCommentsFromDB($idProduct, $orderBy, $typeOrder, $filtroEstrellas);
        $this->view->response($comments, 200);
    }

    public function getComment($params = null){
        $idComment = $params[':ID'];
        $comment = $this->model->getCommentFromDB($idComment);
        $this->view->response($comment, 200);
    }

    public function deleteComment($params = null){
        $idComment = $params[':ID'];
        if($this->model->getCommentFromDB($idComment)){
        $result = $this->model->deleteComment($idComment);
            if($result > 0){
                return $this->view->response("El comentario se eliminó correctamente" , 200);
            }else{
                return $this->view->response("El comentario no se eliminó", 404);
            }
        }else return $this->view->response("El comentario que intenta eliminar no existe", 404);
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