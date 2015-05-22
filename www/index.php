<?php

//var_dump($_SERVER['REQUEST_URI']);
//var_dump($_GET);
//die;
require_once __DIR__ . '/autoload.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$pathParts = explode('/', $path);
var_dump($pathParts);
die;

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';

$controllerClassName = $ctrl . 'Controller';



try {
    $controller = new $controllerClassName();
    $method = 'action' . $act;
    $controller->$method();

} catch (Exception $e ){
    $view = new View();
    $view->error = $e->getMessage();
    $view->display('error.php');
    die('Что то пошло не так: ' . $e->getMessage());
}
