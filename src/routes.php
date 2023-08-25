<?php 
// return [
//     "/"=>"index.php",
//     "/about"=>"about.php",
//     "/contact"=>"contact.php",
//     "/notes"=>"notes/index.php",
//     "/notes/create"=>"notes/create.php",
//     "/note"=>"notes/note.php"
// ];


$router->get("/","index.php");
$router->get("/about","about.php");
$router->get("/contact","contact.php");

$router->get("/notes","notes/index.php")->only('Auth');
$router->get("/notes/create","notes/create.php")->only('Auth');
$router->post("/notes","notes/store.php");

$router->get("/note","notes/note.php")->only('Auth');
$router->patch("/note","notes/update.php");
$router->delete("/note","notes/delete.php");

$router->get("/register","registration/create.php")->only('Guest');
$router->post("/register","registration/store.php");

$router->get("/sessions","sessions/create.php")->only('Guest');
$router->post("/sessions","sessions/store.php");
$router->delete("/sessions","sessions/destroy.php");

//     "/about"=>"about.php",
//     "/contact"=>"contact.php",
//     "/notes"=>"notes/index.php",