<?php

$di = new \Phalcon\DI\FactoryDefault();
$di->set('config', $config);
$di->set('router', function () {
    return require APP_PATH . '/config/routers.php';
});

$di->set('url', function () use ($config) {
    $url = new \Phalcon\Mvc\Url();
    $url->setBaseUri($config->application->baseUri);
    $url->setStaticBaseUri($config->application->staticBaseUri);
    return $url;
},true);

$di->set('view', function () use ($config) {
    $view = new \Phalcon\Mvc\View();
    $view->setViewsDir(APP_PATH . '/views/');
    $view->registerEngines(array(
        '.volt' => function ($view, $di) use ($config) {
            $volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di);
            $volt->setOptions(array(
                'compiledPath' => APP_PATH . '/cache/volt/',
                'compiledSeparator' => '_',
                'stat'              => true,
                'compileAlways'     => true
            ));
            return $volt;
        }
    ));
    return $view;
},true);

$di->set('db', function () use ($config) {
    $dbclass = '\\Phalcon\\Db\\Adapter\\Pdo\\' . $config->database->adapter;
    return new $dbclass(array(
        "host"     => $config->database->host,
        "username" => $config->database->username,
        "password" => $config->database->password,
        "dbname"   => $config->database->name,
    ));
});

$di->set('hasher', function () use ($config) {
    return new \Hashids\Hashids($config->security->salt,7);
});

$di->set('session', function () {
    $session = new \Phalcon\Session\Adapter\Files();
    $session->start();
    return $session;
});

$di->set('modelsCache', function() {

    //Cache data for one day by default
    $frontCache = new \Phalcon\Cache\Frontend\Data(array(
        "lifetime" => 86400
    ));

    //Memcached connection settings
    $cache = new Phalcon\Cache\Backend\File($frontCache, array(
        "cacheDir" => "../app/cache/"
    ));
    return $cache;
});
$di->set('flash', function () {
    $flash = new \Phalcon\Flash\Session(array(
        'error'   => 'alert alert-danger',
        'success' => 'alert alert-success',
        'notice'  => 'alert alert-info',
        'warning' => 'alert alert-warning',
    ));
    return $flash;
});
