<?php

use Core\DataBase;
use Core\App;
$id=$_GET['id'];

$db=App::resolve(DataBase::class);

$note=$db->query("select * from notes where user_id=:userId and id=:id",
                ["userId"=>userId(),"id"=>$id]
)->findOrFail();

authorize($note['user_id']===userId());
view("notes/note.view.php",[
    "note"=>$note,
    "errors"=>[]
]);

