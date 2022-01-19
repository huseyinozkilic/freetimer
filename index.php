<?php

require 'vendor/autoload.php';

use Buki\Router\Router;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$templates = new League\Plates\Engine('Template');

$router = new Router;

$router->get('/', 'HomeController@home');
$router->post('/calculate', 'HomeController@calculate');
$router->post('/basket', 'HomeController@basket');

$router->run();
