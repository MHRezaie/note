<?php

namespace Http\Forms;

use Core\Validator;
use Core\ValidationException;

class LoginForm extends \Http\Forms\Form{
    public function __construct($attributes){
        $this->attributes=$attributes;

        if(!Validator::string($attributes['firstName'],1,32))
            $this->error("تعداد حروف نام غیر مجاز است.");

        if(!Validator::string($attributes['lastName'],3,32))
            $this->error("تعداد حروف نام‌خانوادگی غیر مجاز است.");

        if(!Validator::email($attributes['email']))
            $this->error("ایمیل غیر مجاز است.");

        if(!Validator::string($attributes['password'],6,256))
            $this->error("طول رمز‌عبور حداقل ۶ حرف می‌باشد.")

        if($attributes['password']!==$attributes['reapetPassword'])
            $this->error("رمز عبور با تکرار آن یکسان نمی‌باشد.");

    }
}