<?php

class WeatherApi
{
    protected string $station;
    protected string $url;
    public array $metarData;
    public array $tafData;


    function __construct($station)
    {
        $this->station = $station;
        $this->url = 'https://avwx.rest/api/';
        $this->getMetar();
        $this->getTaf();
    }

    private function getMetar(): void
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->url.'metar/'.$this->station);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: " . WATOKEN
        ));

        $response = curl_exec($ch);

        $this->metarData = json_decode($response, TRUE);
        curl_close($ch);
    }

    private function getTaf(): void
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->url.'taf/'.$this->station);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: " . WATOKEN
        ));

        $response = curl_exec($ch);

        $this->tafData = json_decode($response, TRUE);
        curl_close($ch);
    }
}