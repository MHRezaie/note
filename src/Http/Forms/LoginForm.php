<?php

namespace Http\Forms;

use Core\Validator;
use Core\ValidationException;

class LoginForm extends \Http\Forms\Form{
    public function __construct($attributes){
        $this->attributes=$attributes;
        if(!Validator::email($attributes['email'])){
            $this->error("ایمیل نامعتبر است.");
        }
        if(!Validator::string($attributes['password'],6,256)){
            $this->error("طول مجاز رمزعبور رعایت نشده‌است(حداقل ۶ حرف).");
        }
    }
}