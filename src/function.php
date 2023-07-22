<?php
function base_name(){
    return __DIR__;
}
function includeFiles($dir){
    $base=base_name();
    return include("{$base}/./{$dir}");
}

function dd($var){
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die();
}