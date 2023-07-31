<?php

use Core\Validator;
use Core\DataBase;

$errors=[];



$noteBody=trim($_POST['noteBody']);
$id=trim($_POST["id"]);

$conf=require base_path("config.php");
$db=new DataBase($conf["database"],'admin','secret');
$min=1;$max=1023;
if(!Validator::string($noteBody,$min,$max)){
    $errors[]="طول متن باید در محدوده {$min} تا {$max} کاراکتر باشد.";
}
if(!empty($errors)){
   return view("notes/note.view.php",[
        "errors"=>$errors,
        "note"=>[
            "body"=>$noteBody,
            "id"=>$id
            ]
    ]);
}
$db->query("UPDATE notes SET body=:noteBody where id=:id",
    [
        "noteBody"=>htmlspecialchars($noteBody),
        "id"=>$id
    ]
);

header('location: /notes');
die();



