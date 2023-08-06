<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm{
    protected $errors=[];
    public function validate($email,$password){
        if(!Validator::email($email)){
            $this->error("ایمیل نامعتبر است.");
        }
        if(!Validator::string($password,6,256)){
            $this->error("طول مجاز رمزعبور رعایت نشده‌است(حداقل ۶ حرف).");
        }
        return empty($this->errors());
    }
    public function error($error){
        $this->errors[]=$error;
    }
    public function errors(){
        return $this->errors;
    }
}