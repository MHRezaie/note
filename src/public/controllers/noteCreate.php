<?php
require("DataBase.php");
$errors=[];
$noteBody="";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $noteBody=trim($_POST['noteBody']);
    $conf=require("config.php");
    $db=new DataBase($conf["database"],'admin','secret');
    $min=1;$max=1023;
    if(!Validator::string($noteBody,$min,$max)){
        $errors[]="طول متن باید در محدوده {$min} تا {$max} کاراکتر باشد.";
    }
    if(!$errors){
        $db->query("insert into notes(body,user_id) values (:body, :user_id)",
            [
                "body"=>htmlspecialchars($noteBody),
                "user_id"=>userId()
            ]
        );
        header('location: /notes');
    }
}


require "views/noteCreate.view.php";

