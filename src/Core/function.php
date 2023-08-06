<?php
use Core\Response;
use Core\DataBase;
use Core\App;

function logout(){
    $_SESSION=[];
    session_destroy();
    $params=session_get_cookie_params();

    setcookie('PHPSESSID', '', time()-3600, $params['path'], $params['domain'], 
    $params['secure'], $params['httponly']);
}
function redirect($path){
    header("Location: {$path}");
    exit();
}
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
    return $_SESSION['user']['id'];
}
function authorize($condition,$status=Response::FORBIDDEN){
    if(!$condition){
        abort($status);
    }
}