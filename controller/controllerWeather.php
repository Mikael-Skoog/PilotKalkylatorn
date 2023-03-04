<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/data/weatherApi.php';

$api = new WeatherApi("esgg");
$api->setData();
$metar = $api->metar;