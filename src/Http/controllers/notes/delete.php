<?php

use Core\DataBase;
use Core\App;
$id=trim($_POST["id"]);

$db=App::resolve(DataBase::class);

$db->query("DELETE FROM notes where id=:id",
    [
        "id"=>$id
    ]
);

header('location: /notes');
die();