<?php

class Validator{
    public static function string($str,$min=1,$max=INF){
        $len=strlen(trim($str));
        return $len>=$min && $len<=$max;
    }

    public static function email($email){
        return filter_var($email,FILTER_VALIDATE_EMAIL);
    }
}