<?php

namespace Core;

class Session{
    
    public static function put($key,$val){
        $_SESSION[$key]=$val;
    }
    public static function flash($key,$val){
        $_SESSION['_flash'][$key]=$val;
    }
    public static function get($key,$default=null){
        return $_SESSION['_flash'][$key] ?? $_SESSION[$key] ?? $default;
    }
    public static function has($key){
        return (bool)static::get($key);
    }
    public static function unflash(){
        unset($_SESSION['_flash']);
    }
    public static function flush(){
        $_SESSION=[];
    }
    public static function destroy(){
        static::flush();
        session_destroy();
        $params=session_get_cookie_params();
        setcookie('PHPSESSID', '', time()-3600, $params['path'], $params['domain'], 
        $params['secure'], $params['httponly']);
    }
}