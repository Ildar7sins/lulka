<?php

require_once 'autoload.php';


$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$pathParts = explode('/', $path);

$ctrl = !empty($pathParts[1]) ? ucfirst($pathParts[1]) :'Index';
$act = !empty($pathParts[2]) ? ucfirst($pathParts[2]) :'All';

$controllerClassName = 'App\\Controllers\\' . $ctrl;
$method = 'action' . $act;
//var_dump($controllerClassName); die;
//if ( !class_exists($controllerClassName) || !method_exists($controllerClassName, $method) ) {
 //	$view = new View;
	//$view->display('Error.php');
	//die;
 //}
 
try {
	$controller = new $controllerClassName;
	$controller->$method();
} catch (Exception $e) {
	$view = new View;
	$view->display('Error.php');
}



