<?php

namespace Http\Forms;

use Core\Validator;
use Core\ValidationException;

class Form{
    public $attributes;
    protected $errors=[];
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