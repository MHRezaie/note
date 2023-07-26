<?php

$id=$_GET['id'];
require("DataBase.php");
$conf=require("config.php");


$db=new DataBase($conf['database'],"admin","secret");
$note=$db->query("select * from notes where user_id=:userId and id=:id",
                ["userId"=>userId(),"id"=>$id]
)->findOrFail();

authorize($note['user_id']===userId());
require "views/note.view.php";

