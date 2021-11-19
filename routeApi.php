<?php
require_once('Router.php');
require_once('api/ApiController.php');

// CONSTANTES DEL RUTEO
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$router = new Router();

//RUTAS
$router->addRoute("/comments/:ID",  "GET",     "ApiController",  "getComments");
$router->addRoute("/comments/:ID",  "DELETE",  "ApiController",  "deleteComment");
$router->addRoute("/comments",      "POST",    "ApiController",  "addComment");
$router->addRoute("/comments/:ID",  "PUT",     "ApiController",  "updateComment");

//RUN
$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);
