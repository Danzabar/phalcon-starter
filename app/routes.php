<?php use \Phalcon\Mvc\Router;

$router = new Router(false);

/**
 *  You can define routes in this file the router gets 
 *  loaded back into the dependency injection after you define routes.
 *
 *
 */
$router->addGet('/', 'Home::show');
$router->addGet('/response', 'Home::response');


return $router;
