<?php

const STATIONS = ['ESCF', 'ESCM', 'ESDF', 'ESGG', 'ESGJ', 'ESGT', 'ESGP', 'ESIA',
    'ESIB', 'ESKM', 'ESKN', 'ESKS', 'ESMK', 'ESMQ', 'ESMS', 'ESMT', 'ESMX', 'ESND',
    'ESNG', 'ESNK', 'ESNL', 'ESNN', 'ESNO', 'ESNQ', 'ESNS', 'ESNU', 'ESNV', 'ESNX',
    'ESNZ', 'ESOE', 'ESOK', 'ESOH', 'ESOW', 'ESPA', 'ESPE', 'ESSA', 'ESSB', 'ESSD',
    'ESSL', 'ESSP', 'ESST', 'ESSV', 'ESTA', 'ESTL', 'ESUP', 'ESUT'];

if($_SERVER['SERVER_NAME'] == 'localhost')
{
    # Folders
    define('ROOT', 'http://localhost:8888/public');

    # Databas
    define('DBHOST', 'localhost');
    define('DBNAME', 'pilotkalkylatorn');
    define('DBUSER', 'root');
    define('DBPASS', 'root');

    # API Tokens
    define('WATOKEN', 'M8TG0ddgm4rkx5Gsrh_Reh1M151g9HGzNZqjSD2CXVk');
} else {

    # Folders
    define('ROOT', 'https://pilotkalkylatorn.se');

    # Database
    define('DBHOST', 'localhost');
    define('DBNAME', 'pilotkalkylatorn');
    define('DBUSER', 'root');
    define('DBPASS', 'root');

    # API Tokens
    define('WATOKEN', 'M8TG0ddgm4rkx5Gsrh_Reh1M151g9HGzNZqjSD2CXVk');
}
