<?php

$id=$_GET['id'];
$conf=require base_path("config.php");


$db=new DataBase($conf['database'],"admin","secret");
$note=$db->query("select * from notes where user_id=:userId and id=:id",
                ["userId"=>userId(),"id"=>$id]
)->findOrFail();

authorize($note['user_id']===userId());
view("notes/note.view.php",[
    "note"=>$note
]);

