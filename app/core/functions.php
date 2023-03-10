<?php
/*
* Author: Mikael Skoog
* Created: 2023-03-06
* Last updated: 2023-03-06
*/

function show($array): void
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function utcTimeToLocalTime($time): string
{
    date_default_timezone_set('UTC');
    $new_date = new DateTime($time);
    $new_date->setTimeZone(new DateTimeZone('Europe/Stockholm'));
    return $new_date->format("y-m-d H:i");
}