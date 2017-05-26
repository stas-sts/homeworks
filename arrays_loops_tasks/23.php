<?php
/**
 * Created by PhpStorm.
 * User: study
 * Date: 25.05.2017
 * Time: 15:35
 */
$a = 123456;
if (is_numeric($a)) {
    $arr = str_split($a);
    echo array_sum($arr);
} else {
        echo "Не число!";
}