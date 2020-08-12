<?php
require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/controllers/Web.php";

use CoffeeCode\Router\Router;

define("BASE", "https://www.localhost/e-commerce");
$router = new Router (BASE);

$router->namespace("controllers");

$router->group(null);
$router->get("/", "Web:home");

$router->group("contato");
$router->get("/", "Web:contact");

$router->group("ooops");
$router->get("/{errcode}", "Web:error");

$router->dispatch();

if($router->error()) {
    $router->redirect("/ooops/{$router->error()}");
}