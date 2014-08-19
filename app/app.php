<?php
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\YamlFileLoader;
 
$locator = new FileLocator(array(__DIR__ . '/config'));
$loader = new YamlFileLoader($locator);
$collection = $loader->load('routing.yml');
return $collection;