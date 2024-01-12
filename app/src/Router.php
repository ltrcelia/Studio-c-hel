<?php 

class Router {
/** @var array */ 
    private $routes;

    public function setRoutes(array $route) {
        $this->routes[] = $route;
        return $this;
    }

    public function getRoute() {
        return $this->routes;
    }
    
}