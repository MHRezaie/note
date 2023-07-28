<?php
require("DataBase.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $noteBody=$_POST["noteBody"];
    $conf=require("config.php");
    $db=new DataBase($conf["database"],'admin','secret');
    if(isset($noteBody)){
        $db->query("insert into notes(body,user_id) values (:body, :user_id)",
            [
                "body"=>$noteBody,
                "user_id"=>userId()
            ]
        );
    }
    header('location: /notes');
}


require "views/noteCreate.view.php";

