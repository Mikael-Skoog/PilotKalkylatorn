<?php
/*
* Author: Mikael Skoog
* Created: 2023-03-06
* Last updated: 2023-03-06
*/

class Router
{
    private string $controller = 'Home';
    private string $method = 'index';

    function __construct()
    {
        $this->loadController();
    }

    private function splitUrl(): array
    {
        $url = $_GET['url'] ?? 'home';

        return explode("/", $url);
    }

    private function loadController(): void
    {
        $url = $this->splitUrl();
        $filename = '../app/controllers/'.ucfirst($url[0]).'.php';

        if(file_exists($filename) && count($url) < 3)
        {
            require $filename;
            $this->controller = ucfirst($url[0]);
            if(!empty($url[1]))
            {
                $this->method = lcfirst($url[1]);
            }
        } else {
            $filename = '../app/controllers/_404.php';
            require $filename;
            $this->controller = '_404';
        }

        $control = new $this->controller;
        try {
            call_user_func_array([$control, $this->method], []);
        } catch (TypeError) {
            require_once '../app/controllers/_404.php';
            $control = new _404;
            call_user_func_array([$control, 'index'], []);
        }

    }
}