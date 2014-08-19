<?php
/*
require_once __DIR__.'/vendor/symfony/class-loader/Symfony/Component/ClassLoader/UniversalClassLoader.php';
 
use Symfony\Component\ClassLoader\UniversalClassLoader;
 
$loader = new UniversalClassLoader();
$loader->register();
*/
 
use Symfony\Component\ClassLoader\Psr4ClassLoader;
 
require_once __DIR__ . '/../vendor/symfony/class-loader/Symfony/Component/ClassLoader/Psr4ClassLoader.php';

$loader = new Psr4ClassLoader();
$loader->addPrefix('Symfony\\Component\\HttpFoundation\\', __DIR__ . '/../vendor/symfony/http-foundation/Symfony/Component/HttpFoundation');
$loader->register();