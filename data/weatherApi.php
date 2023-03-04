<?php
class WeatherApi {
    public $station;
    private $url;
    private $token;
    public $metarData;
    public $metar = [];

    function __construct($station) {
        $this->station = $station;
        $this->url = "https://avwx.rest/api/metar/" . $station;
        $this->token = "M8TG0ddgm4rkx5Gsrh_Reh1M151g9HGzNZqjSD2CXVk";
        $this->callApi();
    }

    function callApi() {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
            
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: " . $this->token
        ));
            
        $response = curl_exec($ch);
            
        $this->metarData = json_decode($response, TRUE);
        curl_close($ch);
    }

    function setData() {
        $this->metar["altimeter"] = $this->metarData["altimeter"]["value"] . " " . $this->metarData["units"]["altimeter"];
        $this->metar["visibility"] = $this->metarData["visibility"]["value"] . " " . $this->metarData["units"]["visibility"];
        $this->metar["wind_direction"] = $this->metarData["wind_direction"]["value"] . "°";
        $this->metar["wind_speed"] = $this->metarData["wind_speed"]["value"] . " " . $this->metarData["units"]["wind_speed"];
        $this->metar["temperature"] = $this->metarData["temperature"]["value"] . " °" . $this->metarData["units"]["temperature"];
        $this->metar["dewpoint"] = $this->metarData["dewpoint"]["value"] . " °" . $this->metarData["units"]["temperature"];

        if(isset($this->metarData["wind_gust"]["value"])) {
            $this->metar["wind_gust"] = $this->metarData["wind_gust"]["value"] . " " . $this->metarData["units"]["wind_speed"];
        } else {
            $this->metar["wind_gust"] = "0 " . $this->metarData["units"]["wind_speed"];
        }

        if(isset($this->metarData["wind_variable_direction"])) {
            $this->metar["wind_variable_direction"] = $this->metarData["wind_variable_direction"][0]["value"] . "° / " . 
            $this->metarData["wind_variable_direction"][1]["value"] . "°";
        } else {
            $this->metar["wind_variable_direction"] = "0°";
        }
        
    }
}