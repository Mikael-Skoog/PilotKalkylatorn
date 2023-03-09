
<div class="card weather-card mx-auto b-t" style="width: 22rem">
    <div class="card-header b-p t-s fw-bold">
        METAR
    </div>
    <ul class="list-group list-group-flush b-t">
        <li class="list-group-item b-t">
            <form action="" method="GET">
                <div class="form-floating b-t">
                    <select class="form-select t-s b-t" id="floatingSelect" name="station" aria-label="Floating label select example" onchange="this.form.submit()">
                        <option class="b-t" selected><?= $data['metar']['station']; ?></option>
                        <?php foreach (STATIONS as $station) {
                            echo '<option class="b-t" value="'.$station.'">'.$station.'</option>';
                        } ?>
                    </select>
                    <label class="t-p" for="floatingSelect">Station</label>
                </div>
            </form>
        </li>
        <li class="list-group-item b-t">
            <span class="t-p">Metar:</span>
            <br>
            <span class="t-s" style="font-size: 0.8rem"><?= $data['metar']['sanitized']; ?></span>
        </li>
        <li class="list-group-item b-t">
            <span class="t-p">Utfädad:</span>
            <br>
            <span class="t-s"><?= utcTimeToLocalTime($data['metar']['time']['dt']); ?></span>
        </li>
        <li class="list-group-item b-t">
            <span class="t-p">QNH:</span>
            <br>
            <span class="t-s"><?= $data['metar']['altimeter']['value']; ?> hpa</span>
        </li>
        <li class="list-group-item b-t">
            <span class="t-p">Vindriktning:</span>
            <br>
            <span class="t-s"><?= $data['metar']['wind_direction']['value']; ?>°</span>
        </li>

        <?php if($data['metar']['wind_variable_direction']): ?>
            <li class="list-group-item b-t">
                <span class="t-p">Vindvariation:</span>
                <br>
                <span class="t-s"><?= $data['metar']['wind_variable_direction'][0]['value'] ?? '0'; ?>° / <?= $data['metar']['wind_variable_direction'][1]['value'] ?? '0'; ?>°</span>
            </li>
        <?php endif; ?>

        <li class="list-group-item b-t">
            <span class="t-p">Vindhastighet:</span>
            <br>
            <span class="t-s"><?= $data['metar']['wind_speed']['value']; ?> kt</span>
        </li>

        <?php if($data['metar']['wind_gust']): ?>
        <li class="list-group-item b-t">
            <span class="t-p">Vindby:</span>
            <br>
            <span class="t-s"><?= $data['metar']['wind_gust']['value'] ?? '0'; ?> kt</span>
        </li>
        <?php endif; ?>

        <li class="list-group-item b-t">
            <span class="t-p">Sikt:</span>
            <br>
            <span class="t-s"><?= $data['metar']['visibility']['value']; ?> m</span>
        </li>
        <li class="list-group-item b-t">
            <span class="t-p">Moln:</span>
            <br>
            <span class="t-s">
                <?php
                if($data['metar']['clouds'])
                {
                    foreach ($data['metar']['clouds'] as $cloud) {
                        echo $cloud['repr'].' ';
                    }
                } else {
                    echo 'CAVOK';
                }
                ?>
            </span>
        </li>

        <?php if($data['metar']['wx_codes']): ?>
            <li class="list-group-item b-t">
                <span class="t-p">Väder:</span>
                <br>
                <span class="t-s">
                <?php
                    foreach ($data['metar']['wx_codes'] as $wx) {
                        echo $wx['repr'].' ';
                    }
                ?>
            </span>
            </li>
        <?php endif; ?>

        <?php if($data['metar']['temperature']): ?>
        <li class="list-group-item b-t">
            <span class="t-p">Temperatur:</span>
            <br>
            <span class="t-s"><?= $data['metar']['temperature']['value'] ?? 'Ingen data'; ?>°C</span>
        </li>
        <?php endif; ?>

        <?php if($data['metar']['dewpoint']): ?>
        <li class="list-group-item b-t">
            <span class="t-p">Daggpunkt:</span>
            <br>
            <span class="t-s"><?= $data['metar']['dewpoint']['value'] ?? 'Ingen data'; ?>°C</span>
        </li>
        <?php endif; ?>

        <?php if($data['metar']['relative_humidity']): ?>
        <li class="list-group-item b-t">
            <span class="t-p">Luftfuktighet:</span>
            <br>
            <span class="t-s"><?= round($data['metar']['relative_humidity'] * 100) ?? 'Ingen data'; ?>%</span>
        </li>
        <?php endif; ?>

        <?php if($data['metar']['pressure_altitude']): ?>
            <li class="list-group-item b-t">
                <span class="t-p">Tryckhöjd:</span>
                <br>
                <span class="t-s"><?= $data['metar']['pressure_altitude'] ?? 'Ingen data'; ?> ft</span>
            </li>
        <?php endif; ?>

        <?php if($data['metar']['density_altitude']): ?>
            <li class="list-group-item b-t">
                <span class="t-p">Densitetshöjd:</span>
                <br>
                <span class="t-s"><?= $data['metar']['density_altitude'] ?? 'Ingen data'; ?> ft</span>
            </li>
        <?php endif; ?>
    </ul>
    <div class="card-header b-p t-s fw-bold">
        TAF
    </div>
    <ul class="list-group list-group-flush b-t">
        <?php foreach ($data['taf']['forecast'] as $taf): ?>
            <li class="list-group-item b-t">
                <span class="t-s" style="font-size: 0.8rem"><?= $taf['sanitized']; ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
</div>