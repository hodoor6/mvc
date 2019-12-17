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
?>

