<?php

$path=parse_url(uri())["path"];

$routes=[
    "/"=>"controllers/index.php",
    "/about"=>"controllers/about.php",
    "/contact"=>"controllers/contact.php"
];


function routeToController($uri,$routes){
    if(array_key_exists($uri,$routes)){
        require $routes[$uri];
    }else{
        abort();
    }
}

function abort($code=404){
    http_response_code($code);
    require "views/{$code}.php";
}
routeToController($path,$routes);