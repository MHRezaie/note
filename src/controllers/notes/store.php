<?php

use Core\Validator;
use Core\DataBase;

$errors=[];
$noteBody="";


$noteBody=trim($_POST['noteBody']);
$conf=require base_path("config.php");
$db=new DataBase($conf["database"],'admin','secret');
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

