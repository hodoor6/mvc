<?php
// Урок 101 задание 2 Получите массив с роутами в файле index.php.
use Core\Route;

return [ new Route('/test/:var1/:var2/', 'test', 'index')

];

