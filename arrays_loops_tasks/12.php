<?php
/**
 * Created by PhpStorm.
 * User: study
 * Date: 16.05.2017
 * Time: 20:57
 */
$n = 1000;
$num = 0;
while ($n > 50) {
    $n = $n / 2;
    $num++;
}
echo $num;
echo '<br>';
echo $n;