<?php
class WeatherApi {
    public string $station;
    private string $url;
    private string $token;
    public array $metarData;
    public array $metar = [];

    function __construct($station) {
        $this->station = $station;
        $this->url = "https://avwx.rest/api/metar/" . $station;
        $this->token = "M8TG0ddgm4rkx5Gsrh_Reh1M151g9HGzNZqjSD2CXVk";
        $this->callApi();
    }

    function callApi(): void {
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

    function setData(): void {
        $this->metar["altimeter"] = $this->metarData["altimeter"]["value"] . " " . $this->metarData["units"]["altimeter"];
        $this->metar["visibility"] = $this->metarData["visibility"]["value"] . " " . $this->metarData["units"]["visibility"];
        $this->metar["wind_direction"] = $this->metarData["wind_direction"]["value"] . "°";
        $this->metar["wind_speed"] = $this->metarData["wind_speed"]["value"] . " " . $this->metarData["units"]["wind_speed"];
        $this->metar["temperature"] = $this->metarData["temperature"]["value"] . " °" . $this->metarData["units"]["temperature"];
        $this->metar["dewpoint"] = $this->metarData["dewpoint"]["value"] . " °" . $this->metarData["units"]["temperature"];
        $this->metar["density_altitude"] = $this->metarData["density_altitude"] . " " . $this->metarData["units"]["altitude"];
        $this->metar["pressure_altitude"] = $this->metarData["pressure_altitude"] . " " . $this->metarData["units"]["altitude"];
        $this->metar["time"] = $this->GmtTimeToLocalTime($this->metarData["time"]["dt"]);
        $this->metar["relative_humidity"] = round($this->metarData["relative_humidity"] * 100) . "%";
        $this->metar["station"] = $this->metarData["station"];
        $this->metar["sanitized"] = $this->metarData["sanitized"];


        if(!empty($this->metarData["wind_gust"]["value"])) {
            $this->metar["wind_gust"] = $this->metarData["wind_gust"]["value"] . " " . $this->metarData["units"]["wind_speed"];
        } else {
            $this->metar["wind_gust"] = "0 " . $this->metarData["units"]["wind_speed"];
        }

        if(!empty($this->metarData["wind_variable_direction"])) {
            $this->metar["wind_variable_direction"] = $this->metarData["wind_variable_direction"][0]["value"] . "° / " . 
            $this->metarData["wind_variable_direction"][1]["value"] . "°";
        } else {
            $this->metar["wind_variable_direction"] = "0°";
        }

        if(!empty($this->metarData["clouds"])) {
            for ($i = 0; $i < count($this->metarData["clouds"]); $i++) {
                $this->metar["clouds"][$i] = $this->metarData["clouds"][$i]["repr"];
            }
        } else {
            $this->metar["clouds"][0] = "CAVOK";
        }
    }
    function GmtTimeToLocalTime($time): string {
        date_default_timezone_set('UTC');
        $new_date = new DateTime($time);
        $new_date->setTimeZone(new DateTimeZone('Europe/Stockholm'));
        return $new_date->format("y-m-d H:i");
    }
}