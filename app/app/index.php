<?php 

require "src/Router.php";

$x = new Router();
$x->setRoutes(['Contact', 'contact.php', '/contact'])
  ->setRoutes(['Accueil', 'index.php', '/accueil']);

var_dump($_SERVER);