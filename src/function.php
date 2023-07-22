<?php
function base_name(){
    return __DIR__;
}
function includeFiles($dir){
    $base=base_name();
    return include("{$base}/./{$dir}");
}

function dd($var){
    var_dump($var);
    die();
}