<?php

function utcTimeToLocalTime($time): string {
    date_default_timezone_set('UTC');
    $new_date = new DateTime($time);
    $new_date->setTimeZone(new DateTimeZone('Europe/Stockholm'));
    return $new_date->format("y-m-d H:i");
}
