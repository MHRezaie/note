<?php
$page="یادداشت";
authorize(userId()!==null);
require("DataBase.php");
$conf=require("config.php");

$db=new DataBase($conf['database'],"admin","secret");

$notes=$db->query("select * from notes where user_id=:userId",["userId"=>userId()])->findAll();

require "views/notes.view.php";


