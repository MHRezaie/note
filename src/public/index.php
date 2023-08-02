<?php

use Core\Route;

const BASE_PATH=__DIR__."/../";
require BASE_PATH.'Core/function.php';

spl_autoload_register(function($class){
    $class=str_replace('\\',DIRECTORY_SEPARATOR,$class);
    require base_path("{$class}.php");
});

require base_path('bootstrap.php');
session_start();


$router=new Route();
$routes=include base_path('routes.php');

$uri=parse_url(uri())["path"];
$method=$_POST['_method']?? $_SERVER['REQUEST_METHOD'];

$router->route($uri,$method);

