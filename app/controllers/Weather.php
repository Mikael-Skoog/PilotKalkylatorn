<?php

class Weather extends Controller
{
    public function index()
    {
        if(isset($_GET['station'])) {
            $station = $_GET['station'];
            setcookie("metarStation", $_GET['station'], time() + (86400 * 30), "/");
        } else {
            if(isset($_COOKIE["metarStation"])) {
                $station = $_COOKIE["metarStation"];
            } else {
                $station = 'esgg';
            }
        }

        $weather = new WeatherApi($station);

        $data = [
            'title' => 'Väder',
            'view' => 'weather',
            'metar' => $weather->metarData,
            'taf' => $weather->tafData];

        $this->view('layout', $data);
    }
}