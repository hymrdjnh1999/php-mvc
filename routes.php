<?php
$controllers = array(
    'pages' => ['home', 'error','register','logout'],
    'users'=>['update','details','logout']
);
if (!array_key_exists($controller, $controllers)|| !in_array($action, $controllers[$controller])) {
    $controller = 'pages';
    $action = 'error';
    echo 'test';
}

include_once('controllers/' . $controller . '_controller.php');
$ctrclass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $ctrclass;
$controller->$action();
?>