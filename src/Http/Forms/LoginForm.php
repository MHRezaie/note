<?php

namespace Http\Forms;

use Core\Validator;
use Core\ValidationException;

class LoginForm{
    public $attributes;
    protected $errors=[];
    public function __construct($attributes){
        $this->attributes=$attributes;
        if(!Validator::email($attributes['email'])){
            $this->error("ایمیل نامعتبر است.");
        }
        if(!Validator::string($attributes['password'],6,256)){
            $this->error("طول مجاز رمزعبور رعایت نشده‌است(حداقل ۶ حرف).");
        }
    }
    public static function validate($attributes){
        $instance=new static($attributes);
        return $instance->failed()?$instance->throw():$instance;
    }
    public function throw(){
        ValidationException::throw($this->errors(),$this->attributes());
    }
    public function failed(){
        return count($this->errors());
    }
    public function error($error){
        $this->errors[]=$error;
        return $this;
    }
    public function errors(){
        return $this->errors;
    }
    public function attributes(){
        return $this->attributes;
    }
}