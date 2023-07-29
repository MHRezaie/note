<?php

$path=parse_url(uri())["path"];
$routes=require base_path("routes.php");
function routeToController($uri,$routes){
    if(array_key_exists($uri,$routes)){
        require $routes[$uri];
    }else{
        abort();
    }
}

function abort($code=404){
    http_response_code($code);
    require base_path("views/{$code}.php");
    die();
}
routeToController($path,$routes);