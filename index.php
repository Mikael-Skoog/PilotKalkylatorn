<?php
 require_once($_SERVER['DOCUMENT_ROOT'] . '/app/load.php');

 $content = [
     'title' => 'Startsida'
 ];

 view('index', $content);
