<?php

use Core\Validator;
use Core\DataBase;
use Core\App;

$errors=[];



$noteBody=trim($_POST['noteBody']);
$id=trim($_POST["id"]);

$db=App::resolve(DataBase::class);

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



