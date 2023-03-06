<?php

class Controller
{
    protected function view($name, $content = []): void
    {
        $filename = '../app/views/'.$name.'.view.php';
        $data = $content;

        if(file_exists($filename))
        {
            require $filename;
        } else {
            require '../app/views/404.view.php';
        }
    }
}