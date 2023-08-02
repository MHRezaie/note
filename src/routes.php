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

$router->get("/notes","controllers/notes/index.php");
$router->get("/notes/create","controllers/notes/create.php");
$router->post("/notes","controllers/notes/store.php");

$router->get("/note","controllers/notes/note.php");
$router->patch("/note","controllers/notes/update.php");
$router->delete("/note","controllers/notes/delete.php");

$router->get("/register","controllers/registration/create.php");
$router->post("/register","controllers/registration/store.php");

$router->get("/sessions","controllers/sessions/create.php");
$router->post("/sessions","controllers/sessions/store.php");
//     "/about"=>"controllers/about.php",
//     "/contact"=>"controllers/contact.php",
//     "/notes"=>"controllers/notes/index.php",