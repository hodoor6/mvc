<?php

//Урок 104 Задача 1 Скопируйте код моего класса Controller и разместите его в файле /core/Controller.php.
namespace Core;

class Controller
{
    protected $layout = 'default';

    protected function render($view, $data) {
        return new Page($this->layout, $this->title, $view, $data);
    }
}