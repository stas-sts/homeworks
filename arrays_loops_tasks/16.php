<?php
/**
 * Created by PhpStorm.
 * User: study
 * Date: 17.05.2017
 * Time: 1:49
 */
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $e) {
    echo $e;
    if (($e % 3) == 0) {
        echo '<br>';
    }
    else {
        echo ', ';
    }
}