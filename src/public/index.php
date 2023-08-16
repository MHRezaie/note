<?php

use Core\Route;
use Core\Session;
use Core\ValidationException;

const BASE_PATH=__DIR__."/../";
require BASE_PATH.'Core/function.php';


require base_path('/vendor/autoload.php');

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
    return redirect($router->previousUrl());
}

Session::unflash();


