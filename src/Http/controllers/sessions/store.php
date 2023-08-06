<?php


use Core\Validator;
use Core\DataBase;
use Core\App;

$email=trim($_POST['email']);
$password=trim($_POST['password']);

$errors=[];
if(!Validator::email($email)){
    $errors[]="ایمیل نامعتبر است.";
}

if(!Validator::string($password,6,256)){
    $errors[]="طول مجاز رمزعبور رعایت نشده‌است(حداقل ۶ حرف).";
}

if($errors){
    return view('sessions/create.view.php',[
        'errors'=>$errors
    ]);
}


$db=App::resolve(DataBase::class);

$user=$db->query("select * from users where email=:email",[
    'email'=>$email
])->find();
if($user){
    
    if(password_verify($password,$user['password'])){
        login([ 
            'email'=>$email
        ]);
        header('Location: /');
        exit();
    }
}

return view('sessions/create.view.php',[
    'errors'=>[
        'ایمیل یا رمز عبور اشتباه است.'
        ]
]);


