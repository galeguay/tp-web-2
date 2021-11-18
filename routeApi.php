<?php
require_once('Router.php');
require_once('ApiController.php');

// CONSTANTES DEL RUTEO
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$router = new Router();

//RUTAS
/*$router->addRoute("/comment",      "GET",     "ApiController",  "getComment");
$router->addRoute("/comment/:ID",  "GET",     "ApiController",  "getComment");
$router->addRoute("/comment/:ID",  "DELETE",  "ApiController",  "deleteComment");
$router->addRoute("/comment",      "POST",    "ApiController",  "addComment");
$router->addRoute("/comment/:ID",  "PUT",     "ApiController",  "updateComment");*/

//RUN
$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 
