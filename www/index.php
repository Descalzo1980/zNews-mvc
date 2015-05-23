<?php

//$content = file_get_contents(__DIR__ . '/test.json');
//$obj = json_decode($content);
//echo $obj->foo;
//die;
//var_dump($_SERVER['REQUEST_URI']);
//var_dump($_GET);

$obj = new stdClass();
$obj->title = 'Война и мир';
$obj->text = 'Long long text';
echo json_encode($obj);

die;
require_once __DIR__ . '/autoload.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$pathParts = explode('/', $path);
//var_dump($pathParts);
//die;

$ctrl = !empty($pathParts[3]) ? ucfirst($pathParts[3]) : 'News';
$act = !empty($pathParts[4]) ? ucfirst($pathParts[4]) : 'All';


$controllerClassName = 'Application\\Controllers\\' . $ctrl;



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
