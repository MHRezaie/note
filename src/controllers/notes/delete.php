<?php

use Core\DataBase;

$id=trim($_POST["id"]);
$conf=require base_path("config.php");
$db=new DataBase($conf["database"],'admin','secret');

$db->query("DELETE FROM notes where id=:id",
    [
        "id"=>$id
    ]
);

header('location: /notes');
die();