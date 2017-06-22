<?php

try {
    define('APP_PATH', realpath('../app'));
    define('PUBLIC_PATH', realpath('./'));
    define('BASE_PATH',realpath('../'));
    require_once BASE_PATH . '/vendor/autoload.php';
    $config = new \Phalcon\Config\Adapter\Ini(APP_PATH . '/config/config.ini');
    $domain = "";
    if (preg_match('/([a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $_SERVER['SERVER_NAME'], $regs)) {
        $domain = $regs[1];
        if (file_exists(APP_PATH . '/config/config.' . $domain . '.ini')) {
            $domainConfig = new \Phalcon\Config\Adapter\Ini(APP_PATH . '/config/config.' . $domain . '.ini');
            $config->merge($domainConfig);
        }
    } else {
            $domainConfig = new \Phalcon\Config\Adapter\Ini(APP_PATH . '/config/config.localhost.ini');
            $config->merge($domainConfig);
    }
    require APP_PATH . '/config/loader.php';
    require APP_PATH . '/config/services.php';

    $application = new \Phalcon\Mvc\Application($di);
    $application->useImplicitView(false);
    echo $application->handle()->getContent();

} catch (\Exception $e) {
    if($config->application->debug == true) {
        echo "<table class='xdebug-error xe-fatal-error' dir='ltr' border='1' cellspacing='0' cellpadding='1'>";
        echo $e->xdebug_message;
        echo "</table></font>";
    } else {
        @redirect($config->application->baseUri);
    }
}
