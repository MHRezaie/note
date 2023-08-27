<?php

use Http\Forms\LoginForm;
use Core\Authenticator;
use Core\Session;

$email=trim($_POST['email']);
$password=trim($_POST['password']);

$errors=[];


$form=LoginForm::validate([
    'email'=>$email,
    'password'=>$password
]);

$logedin=(new Authenticator())->attempt($email,$password);

if(!$logedin){
    $form->error("ایمیل یا رمز عبور اشتباه است.")->throw();    
}

redirect("/");



