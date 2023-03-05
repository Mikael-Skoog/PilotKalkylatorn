<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/app/load.php');

if(isset($_GET['station'])) {
    $api = new WeatherApi($_GET['station']);
} else {
    $api = new WeatherApi('esgg');
}

$api->setData();
$metar = $api->metar;

$content = [
    'title' => 'Väder',
    'metar' => $metar,
    'stations' => STATIONS
];

view('weather', $content);
