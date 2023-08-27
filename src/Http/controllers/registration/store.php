<?php

use Core\DataBase;
use Core\App;
use Core\Validator;
use Core\Authenticator;

$errors=[];
$firstName=trim($_POST['firstName']);
$lastName=trim($_POST['lastName']);
$email=trim($_POST['email']);
$password=trim($_POST['password']);
$reapetPassword=trim($_POST['passwordRepeat']);

if(!Validator::string($firstName,1,32))
    $errors[]="تعداد حروف نام غیر مجاز است.";
if(!Validator::string($lastName,3,32))
    $errors[]="تعداد حروف نام‌خانوادگی غیر مجاز است.";
if(!Validator::email($email))
    $errors[]="ایمیل غیر مجاز است.";
if(!Validator::string($password,6,256))
    $errors[]="طول رمز‌عبور حداقل ۶ حرف می‌باشد.";
if($password!==$reapetPassword)
    $errors[]="رمز عبور با تکرار آن یکسان نمی‌باشد.";

$db=App::resolve(DataBase::class);

$user=$db->query("select * from users where email=:email",[
    'email'=>$email
    ])->find();
if($user)
    $errors[]="ایمیل تکراری می‌باشد.";
if(!empty($errors)){
    return view('registration/create.view.php',[
        'errors'=>$errors
    ]);
}

$db->query("insert into users(FirstName,LastName,email,password)
    values(:firstName,:lastName,:email,:password)",[
        'firstName'=>htmlspecialchars($firstName),
        'lastName'=>htmlspecialchars($lastName),
        'email'=>htmlspecialchars($email),
        'password'=>password_hash($password,PASSWORD_BCRYPT)
    ]);
$auth=new Authenticator();
$user=$db->query("select id,email from users where email=:email",[
    'email'=>$email
])->find();
$auth->login($user);

redirect("/");
