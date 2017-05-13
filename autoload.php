<?php

define('DS', DIRECTORY_SEPARATOR);
define('BP', dirname(__FILE__));

spl_autoload_register(function ($className) {

    if (class_exists($className)) {
        return;
    }

    $classFile = str_replace('\\', DS, $className) . '.php';
    $classFile = BP . DS . $classFile;

    include $classFile;
});