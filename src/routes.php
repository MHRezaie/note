<?php 
// return [
//     "/"=>"controllers/index.php",
//     "/about"=>"controllers/about.php",
//     "/contact"=>"controllers/contact.php",
//     "/notes"=>"controllers/notes/index.php",
//     "/notes/create"=>"controllers/notes/create.php",
//     "/note"=>"controllers/notes/note.php"
// ];


$router->get("/","controllers/index.php");
$router->get("/about","controllers/about.php");
$router->get("/contact","controllers/contact.php");

$router->get("/notes","controllers/notes/index.php")->only('Auth');
$router->get("/notes/create","controllers/notes/create.php")->only('Auth');
$router->post("/notes","controllers/notes/store.php");

$router->get("/note","controllers/notes/note.php")->only('Auth');
$router->patch("/note","controllers/notes/update.php");
$router->delete("/note","controllers/notes/delete.php");

$router->get("/register","controllers/registration/create.php")->only('Guest');
$router->post("/register","controllers/registration/store.php");

$router->get("/sessions","controllers/sessions/create.php")->only('Guest');
$router->post("/sessions","controllers/sessions/store.php");
$router->delete("/sessions","controllers/sessions/destroy.php");

//     "/about"=>"controllers/about.php",
//     "/contact"=>"controllers/contact.php",
//     "/notes"=>"controllers/notes/index.php",