<?php

class Calculate extends Controller
{
    public function convert()
    {
        $data = [
            'title' => 'Konvertera',
            'view' => 'convert'];

        $this->view('layout', $data);
    }
}