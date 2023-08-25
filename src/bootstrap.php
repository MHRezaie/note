<?php

use Core\Container;
use Core\App;
use Core\DataBase;


$container=new Container();



$container->bind('Core\DataBase',function(){
    $conf=require base_path("config.php");
    return new DataBase($conf['database'],"admin","secret");
});

App::setContainer($container);
