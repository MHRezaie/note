<?php
use Core\DataBase;
use Core\App;


$page="یادداشت";
authorize(userId()!==null);

$db=App::resolve(DataBase::class);

$notes=$db->query("select * from notes where user_id=:userId",["userId"=>userId()])->get();

view("notes/index.view.php",[
    "notes"=>$notes,
    "page"=>$page
]);


