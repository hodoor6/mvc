<?php
// Урок 101 задание 1Создайте файл index.php и добавьте в него указанные строки.
namespace Core;

error_reporting(E_ALL);
ini_set('display_errors', 'on');

// Урок 101 задание 3 Реализуйте функцию автозагрузки. Проверьте ее работу.
spl_autoload_register(function($class) {
   $ds = DIRECTORY_SEPARATOR;
   $filename = str_replace('\\',  $ds, $class ) . '.php';
   require($filename);
});

// Прочитываем массив из файла с роутами в переменную:
$routes = require $_SERVER['DOCUMENT_ROOT'] . '/project/config/routes.php';

// Урок 101 задание 2 Получите массив с роутами в файле index.php.
var_dump($routes);
?>

