<?php
/**
 * Created by PhpStorm.
 * User: study
 * Date: 17.05.2017
 * Time: 1:49
 */
$arr = array(4, 2, 5, 19, 13, 0, 10);
foreach ($arr as $e) {
    if ($e == 2 or $e == 3 or $e == 4) {
        echo 'Есть!' . "<br>";
    }
        else {
            echo 'Нет!' . "<br>";
        }
    }