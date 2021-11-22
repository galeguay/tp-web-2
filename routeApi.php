<?php
require_once('Router.php');
require_once('api/ApiController.php');
require_once('api/CommentsApiController.php');

// CONSTANTES DEL RUTEO
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$router = new Router();

//RUTAS
$router->addRoute("/comments/:ID",  "GET",     "CommentsApiController",  "getComments");
$router->addRoute("/comments/:ID",  "DELETE",  "CommentsApiController",  "deleteComment");
$router->addRoute("/comments",      "POST",    "CommentsApiController",  "addComment");

//RUN
$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);
