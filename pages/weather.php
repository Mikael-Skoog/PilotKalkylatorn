<?php
 include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/head.php';
 include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/navbar.php';
 include_once $_SERVER['DOCUMENT_ROOT'] . '/controller/controllerWeather.php';
 ?>

<h1>Väder</h1>
<?php 

echo("<br>");
echo($metar["altimeter"]);
echo("<br>");
echo($metar["visibility"]);
echo("<br>");
echo($metar["wind_direction"]);
echo("<br>");
echo($metar["wind_speed"]);
echo("<br>");
echo($metar["wind_gust"]);
echo("<br>");
echo($metar["wind_variable_direction"]);
echo("<br>");
echo($metar["temperature"]);
echo("<br>");
echo($metar["dewpoint"]);
echo("<br>");


echo('<pre>');
print_r($api->metarData); 
echo('</pre>');




?>


 <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/foot.php'; ?>