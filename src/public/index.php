<?php

use Core\Route;
use Core\Session;
use Core\ValidationException;

const BASE_PATH=__DIR__."/../";
require BASE_PATH.'Core/function.php';

spl_autoload_register(function($class){
    // if(str_contains($class,'Middleware') )
    //     dd($class);
    $class=str_replace('\\',DIRECTORY_SEPARATOR,$class);
    require base_path("{$class}.php");
});

require base_path('bootstrap.php');
session_start();

$router=new Route();
$routes=include base_path('routes.php');

$uri=parse_url(uri())["path"];
$method=$_POST['_method']?? $_SERVER['REQUEST_METHOD'];

try {
    $router->route($uri,$method);
} catch (ValidationException $exception) {
    Session::flash("errors",
        $exception->errors()
    );
    Session::flash("old",
        $exception->old()
    );
    redirect($router->previousUrl());
}

Session::unflash();


