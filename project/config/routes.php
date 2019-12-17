<?php
//namespace Core;
//spl_autoload_register(function($class) {
//    $ds = DIRECTORY_SEPARATOR;
//    $filename = str_replace('\\',  $ds, $class ) . '.php';
//    require($filename);
//});

use Core\Route;

return [ new Route('/test/:var1/:var2/', 'test', 'index')

];

