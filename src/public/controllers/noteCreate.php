<?php
require("DataBase.php");
$errors=[];
$noteBody="";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $noteBody=$_POST['noteBody'];
    $conf=require("config.php");
    $db=new DataBase($conf["database"],'admin','secret');
    
    if(isset($noteBody)){
        $errors[]="متن نمی‌تواند خالی باشد.";
    }
    if(strlen($noteBody)>1023){
        $errors[]="طول متن بیشتر از حد مجاز(۱۰۲۳ کاراکتر) است.";
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

