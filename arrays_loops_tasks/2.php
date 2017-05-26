<?php
/**
 * Created by PhpStorm.
 * User: study
 * Date: 12.05.2017
 * Time: 18:31
 */
$arr = array (1,20,15,17,24,35);
$result = 0;
foreach ($arr as $a) {
    $result += $a;
}
echo $result;