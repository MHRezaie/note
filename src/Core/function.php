<?php
use Core\Response;
function base_path($path){
    return BASE_PATH.$path;
}
function view($path,$attr=[]){
    extract($attr);
    require base_path('views/'.$path);
}
function uri(){
    return $_SERVER["REQUEST_URI"];
}

function dd($var){
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die();
}
function isActive($navLink){
    if(url_path()===$navLink)
        return "active";
}
function url_path(){
    return parse_url(uri())["path"];
}
function userId(){
    return 1;
}
function authorize($condition,$status=Response::FORBIDDEN){
    if(!$condition){
        abort($status);
    }
}