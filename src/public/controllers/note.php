<?php

$id=$_GET['id'];
require("DataBase.php");
$conf=require("config.php");


$db=new DataBase($conf['database'],"admin","secret");
$note=$db->query("select * from notes where user_id=:userId and id=:id",
                ["userId"=>userId(),"id"=>$id]
)->findOrFail();
if($note['user_id']!==userId()){
    abort(Response::FORBIDDEN);
}
require "views/note.view.php";

