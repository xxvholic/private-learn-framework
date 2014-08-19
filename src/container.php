<?php
use Symfony\Component\DependencyInjection;
use Symfony\Component\DependencyInjection\Reference;
 
$container = new DependencyInjection\ContainerBuilder();
$container->register('context', 'Symfony\Component\Routing\RequestContext');
$container->register('matcher', 'Symfony\Component\Routing\Matcher\UrlMatcher')->setArguments(array($routes, new Reference('context')));
$container->register('resolver', 'Symfony\Component\HttpKernel\Controller\ControllerResolver');

$container->register('listener.router', 'Symfony\Component\HttpKernel\EventListener\RouterListener')->setArguments(array(new Reference('matcher')));
$container->register('listener.response', 'Symfony\Component\HttpKernel\EventListener\ResponseListener')->setArguments(array('UTF-8'));
$container->register('listener.exception', 'Symfony\Component\HttpKernel\EventListener\ExceptionListener')->setArguments(array('Calendar\\Controller\\ErrorController::exceptionAction'));

$container->register('listener.exception', 'Simplex\StringResponseListener');

$container->register('dispatcher', 'Symfony\Component\EventDispatcher\EventDispatcher')->addMethodCall('addSubscriber', array(new Reference('listener.router')))->addMethodCall('addSubscriber', array(new Reference('listener.response')))->addMethodCall('addSubscriber', array(new Reference('listener.exception')));
$container->register('framework', 'Simplex\Framework')->setArguments(array(new Reference('dispatcher'), new Reference('resolver')));
 
return $container;