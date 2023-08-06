<?php

use Core\Validator;
use Core\DataBase;
use Core\App;

$errors=[];
$noteBody="";


$noteBody=trim($_POST['noteBody']);

$db=App::resolve(DataBase::class);

$min=1;$max=1023;
if(!Validator::string($noteBody,$min,$max)){
    $errors[]="طول متن باید در محدوده {$min} تا {$max} کاراکتر باشد.";
}
if(!empty($errors)){
   return view("notes/create.view.php",[
        "errors"=>$errors,
        "noteBody"=>$noteBody
    ]);
}
$db->query("insert into notes(body,user_id) values (:body, :user_id)",
    [
        "body"=>htmlspecialchars($noteBody),
        "user_id"=>userId()
    ]
);
header('location: /notes');
die();

