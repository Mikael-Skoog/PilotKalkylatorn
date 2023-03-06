<?php
/*
* Author: Mikael Skoog
* Created: 2023-03-06
* Last updated: 2023-03-06
*/

class Home extends Controller
{
    public function index()
    {
        $content = [
            'title' => 'Startsida',
            'view' => 'home'];

        $this->view('layout', $content);
    }

    public function contact()
    {
        $content = [
            'title' => 'Kontakt',
            'view' => 'contact'];

        $this->view('layout', $content);
    }
}

$home = new Home;