<?php 

require "src/Router.php";

$x = new Router();
$x->setRoutes(['Accueil', 'index.php', '/accueil'])
  ->setRoutes(['Réalisations', 'index.php#carousel', '/realisations'])
  ->setRoutes(['Services', 'services.php', '/services'])
  ->setRoutes(['Studio', 'studio.php', '/studio'])
  ->setRoutes(['Contact', 'contact.php', '/contact']);