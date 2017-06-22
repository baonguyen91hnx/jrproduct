<?php

$loader = new \Phalcon\Loader();
/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(array(
    APP_PATH.'/controllers/',
    APP_PATH.'/models/'
))->register();

$loader->registerNamespaces(array(
    'Oivl\Controllers' => APP_PATH.'/controllers/',
    'Hashids' => APP_PATH.'/library/Hashids/',
    'UploadHandle' => APP_PATH.'/library/Upload/',
    'ReCaptcha' => APP_PATH.'/library/ReCaptcha/',
    'Mail' => APP_PATH.'/library/Mail/',
    'timeAgos' => APP_PATH.'/library/humantimediff/'
))->register();
