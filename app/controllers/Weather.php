<?php

class Weather extends Controller
{
    public function index()
    {
        if(isset($_GET['station'])) {
            $station = $_GET['station'];
        } else {
            $station = 'esgg';
        }

        $weather = new WeatherApi($station);

        $data = [
            'title' => 'Väder',
            'view' => 'weather',
            'metar' => $weather->metarData];

        $this->view('layout', $data);
    }
}