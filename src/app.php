<?php
#
# use yaml
#

use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\YamlFileLoader;
 
$locator = new FileLocator(array(__DIR__ . '/../app/config'));
$loader = new YamlFileLoader($locator);
$collection = $loader->load('routing.yml');
return $collection;




#
# use php
#

// use Symfony\Component\Routing;
// use Symfony\Component\HttpFoundation\Response;
 
// $routes = new Routing\RouteCollection();
// $routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', array(
//     'year' => null,
//     '_controller' => 'Controller\\LeapYearController::indexAction'

// )));
 
// return $routes;