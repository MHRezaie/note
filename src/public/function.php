<?php
function base_name(){
    return __DIR__;
}
function includeFiles($dir){
    $base=base_name();
    return include("{$base}{$dir}");
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