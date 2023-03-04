<?php
$title = "Väder";
 include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/head.php';
 include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/navbar.php';
 include_once $_SERVER['DOCUMENT_ROOT'] . '/controller/controllerWeather.php';
 ?>

<div class="weather">
    <div class="weather-card">
        <div class="weather-card-header">
            <h2>METAR</h2>
            <hr>
        </div>
        <div class="weather-card-body">
            <table class="metar-table">
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Station:</p></td>
                    <td class="metar-column-right"><?= $metar["station"] ?></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Utfärdad:</p></td>
                    <td class="metar-column-right"><?= $metar["time"] ?></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>QNH:</p></td>
                    <td class="metar-column-right"><?= $metar["altimeter"] ?></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Vindriktning:</p></td>
                    <td class="metar-column-right"><?= $metar["wind_direction"] ?></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Vindvariation:</p></td>
                    <td class="metar-column-right"><?= $metar["wind_variable_direction"] ?></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Vindhastighet:</p></td>
                    <td class="metar-column-right"><?= $metar["wind_speed"] ?></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Vindby:</p></td>
                    <td class="metar-column-right"><?= $metar["wind_gust"] ?></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Sikt:</p></td>
                    <td class="metar-column-right"><?= $metar["visibility"] ?></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Moln:</p></td>
                    <td class="metar-column-right">
                        <?php
                        foreach ($metar["clouds"] as $cloud) {
                            echo $cloud . " ";
                        }
                        ?>
                    </td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Temperatur:</p></td>
                    <td class="metar-column-right"><?= $metar["temperature"] ?></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Daggpunkt:</p></td>
                    <td class="metar-column-right"><?= $metar["dewpoint"] ?></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Luftfuktighet:</p></td>
                    <td class="metar-column-right"><?= $metar["relative_humidity"] ?></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Tryckhöjd:</p></td>
                    <td class="metar-column-right"><?= $metar["pressure_altitude"] ?></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Densitetshöjd:</p></td>
                    <td class="metar-column-right"><?= $metar["density_altitude"] ?></td>
                </tr>
            </table>
        </div>
        <div class="weather-card-footer">
            <hr>
            <p><?= $metar["sanitized"] ?></p>
        </div>
    </div>
</div>


 <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/foot.php'; ?>