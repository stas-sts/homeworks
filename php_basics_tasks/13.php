<?php
$s = 100; // distance in km
$t = 2; // time in hours
$speed1 = $s / $t; // km/h
$speed2 = ($s * 1000) / ($t * 7200);

echo "Скорость $speed1 км/ч";
echo "<br>";
echo "Скорость $speed2 м/сек";