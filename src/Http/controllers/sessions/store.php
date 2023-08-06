<?php

use Http\Forms\LoginForm;
use Core\Authenticator;

$email=trim($_POST['email']);
$password=trim($_POST['password']);

$errors=[];

$form=new LoginForm();

if(!$form->validate($email,$password)){
    return view('sessions/create.view.php',[
        'errors'=>$form->errors()
    ]);
}

$auth=new Authenticator();
if($auth->attempt($email,$password)){
    redirect("/");
}
$form->error("ایمیل یا رمز عبور اشتباه است.");

return view('sessions/create.view.php',[
    'errors'=>$form->errors()
]);


