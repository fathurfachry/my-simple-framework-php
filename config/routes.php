<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;



$routes = new RouteCollection();
$routes->add('hello', new Route('/hello', ['_controller' => 'ModernFramework\Controller\HelloController::hello',]));

$routes->add('greeting', new Route('/greeting/{nama}', ['nama' => 'Surya', '_controller' => 'ModernFramework\Controller\HelloController::greet']));
$routes->add('landing', new Route('/{nama}' , ['nama' => 'Surya', '_controller' => 'ModernFramework\Controller\HelloController::landing']));
