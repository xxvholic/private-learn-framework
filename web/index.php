<?php
 
require_once __DIR__.'/../vendor/autoload.php';
 
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();
$routes = include __DIR__.'/../src/app.php';
$container = include __DIR__.'/../src/container.php';

$response = $container->get('framework')->handle($request);
$response->send();