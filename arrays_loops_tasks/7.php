<?php
/**
 * Created by PhpStorm.
 * User: study
 * Date: 16.05.2017
 * Time: 20:31
 */
$arr = array (2, 5, 9, 15, 0, 4);
foreach ($arr as $value) {
    if  ($value > 3 and $value < 10)
        echo $value . '<br>';
}