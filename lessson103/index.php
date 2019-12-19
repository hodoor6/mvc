<?php
// Урок 101 задание 1 Создайте файл index.php и добавьте в него указанные строки.
namespace Core;

error_reporting(E_ALL);
ini_set('display_errors', 'on');

// Урок 101 задание 3 Реализуйте функцию автозагрузки. Проверьте ее работу.
spl_autoload_register(function($class) {
   $ds = DIRECTORY_SEPARATOR;
   $filename = str_replace('\\',  $ds, $class ) . '.php';
   require($filename);
});
use Core\Router;
// Прочитываем массив из файла с роутами в переменную:
$routes = require $_SERVER['DOCUMENT_ROOT'] . '/project/config/routes.php';

// Урок 101 задание 2 Получите массив с роутами в файле index.php.
var_dump($routes);

var_dump($test = new Router);
var_dump($test->getTrack($routes, $_SERVER['REQUEST_URI']));
//$track = ( new Router ) -> getTrack($routes, $_SERVER['REQUEST_URI']);
?>

