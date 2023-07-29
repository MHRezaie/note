<?php
use Core\DataBase;
$page="یادداشت";
authorize(userId()!==null);
$conf=require base_path("config.php");

$db=new DataBase($conf['database'],"admin","secret");

$notes=$db->query("select * from notes where user_id=:userId",["userId"=>userId()])->get();

view("notes/index.view.php",[
    "notes"=>$notes,
    "page"=>$page
]);


