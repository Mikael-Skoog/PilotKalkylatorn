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
                    <td class="metar-column-right">
                        <form action="" method="GET">
                            <select name="station" onchange="this.form.submit()">
                                <option value=""><?= $content['metar']["station"] ?></option>
                                <?php foreach ($content['stations'] as $station): ?>
                                <option value="<?= $station ?>"><?= $station ?></option>
                                <?php endforeach; ?>
                            </select>
                        </form>
                    </td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Utfärdad:</p></td>
                    <td class="metar-column-right"><p><?= $content['metar']["time"] ?></p></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>QNH:</p></td>
                    <td class="metar-column-right"><p><?= $content['metar']["altimeter"] ?></p></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Vindriktning:</p></td>
                    <td class="metar-column-right"><p><?= $content['metar']["wind_direction"] ?></p></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Vindvariation:</p></td>
                    <td class="metar-column-right"><p><?= $content['metar']["wind_variable_direction"] ?></p></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Vindhastighet:</p></td>
                    <td class="metar-column-right"><p><?= $content['metar']["wind_speed"] ?></p></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Vindby:</p></td>
                    <td class="metar-column-right"><p><?= $content['metar']["wind_gust"] ?></p></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Sikt:</p></td>
                    <td class="metar-column-right"><p><?= $content['metar']["visibility"] ?></p></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Moln:</p></td>
                    <td class="metar-column-right"><p>
                        <?php
                        foreach ($content['metar']["clouds"] as $cloud) {
                            echo $cloud . " ";
                        }
                        ?></p>
                    </td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Temperatur:</p></td>
                    <td class="metar-column-right"><p><?= $content['metar']["temperature"] ?></p></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Daggpunkt:</p></td>
                    <td class="metar-column-right"><p><?= $content['metar']["dewpoint"] ?></p></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Luftfuktighet:</p></td>
                    <td class="metar-column-right"><p><?= $content['metar']["relative_humidity"] ?></p></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Tryckhöjd:</p></td>
                    <td class="metar-column-right"><p><?= $content['metar']["pressure_altitude"] ?></p></td>
                </tr>
                <tr class="metar-row">
                    <td class="metar-column-left"><p>Densitetshöjd:</p></td>
                    <td class="metar-column-right"><p><?= $content['metar']["density_altitude"] ?></p></td>
                </tr>
            </table>
        </div>
        <div class="weather-card-footer">
            <hr>
            <p><?= $content['metar']["sanitized"] ?></p>
        </div>
    </div>
</div>
