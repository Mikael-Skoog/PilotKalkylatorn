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
        $data = [
            'title' => 'Startsida',
            'view' => 'home'];

        $this->view('layout', $data);
    }

    public function contact()
    {
        $weather = new WeatherApi('esgg');

        $data = [
            'title' => 'Kontakt',
            'view' => 'contact',
            'metar' => $weather->metarData];

        $this->view('layout', $data);
    }
}
