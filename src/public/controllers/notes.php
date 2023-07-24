<?php
$page="یادداشت";
$userId=1;

require("DataBase.php");
$conf=require("config.php");

$db=new DataBase($conf['database'],"admin","secret");

$notes=$db->query("select * from notes where user_id=:userId",["userId"=>$userId])->fetchAll();

require "views/notes.view.php";


