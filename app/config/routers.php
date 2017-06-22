<?php
$router = new \Phalcon\Mvc\Router();

$router->add('confirm/:params', array(
    'controller' => 'confirm',
    'action'     => 'index',
    'params'     => 1,
));
$router->add('/([a-z]+)', array(
    'controller' => 'section',
    'action'     => 'view',
    'category'   => 1,
    'type'     => 2
));
$router->add('/([a-z]+)/(hot|fresh)', array(
    'controller' => 'section',
    'action'     => 'view',
    'category'   => 1,
    'type'     => 2
));
$router->add('/u/([a-z]+)', array(
    'controller' => 'user',
    'action'     => 'profile',
    'params'     => 1,
));

$router->add('/(fresh|hot|trend)', array(
    'controller' => '1',
    'action'     => 'index',
));
$router->add('/news',array(
    'controller' =>"index",
    'action' => "news",
));
$router->add('/admin/:controller/:action/:params', array(
	'namespace' => 'Oivl\Controllers\Admin',
	'controller' => 1,
	'action' => 2,
	'params' => 3,
));
$router->add('/admin/:controller', array(
	'namespace' => 'Oivl\Controllers\Admin',
	'controller' => 1
));
$router->add('/admin/',array(
    'namespace' => 'Oivl\Controllers\Admin',
    'controller' => 'index',
    'action' => 'index'
));
return $router;
