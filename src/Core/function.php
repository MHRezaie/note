<?php
use Core\Response;
use Core\DataBase;
use Core\App;

function login($arr){
    $db=App::resolve(DataBase::class);
    $user=$db->query("select * from users where email=:email",[
        'email'=>$arr['email']
    ])->find();
    $_SESSION['user']['email']=$arr['email'];
    $_SESSION['user']['id']=$user['id'];
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