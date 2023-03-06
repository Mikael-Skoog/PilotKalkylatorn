<?php
/*
* Author: Mikael Skoog
* Created: 2023-03-06
* Last updated: 2023-03-06
*/

class _404 extends Controller
{
    public function index()
    {
        $content = [
            'title' => '404',
            'view' => '404'];
        $this->view('layout', $content);
    }
}