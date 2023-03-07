<?php

class Controller
{
    protected function view($name, $data = [], $model = ''): void
    {
        $filename = '../app/views/'.$name.'.view.php';
        $data = $data;
        $model = $model;

        if(file_exists($filename))
        {
            require $filename;
        } else {
            require '../app/views/404.view.php';
        }
    }
}