<?php
/**
 * Created by PhpStorm.
 * User: study
 * Date: 18.05.2017
 * Time: 18:19
 */
$arr = array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');
foreach ($arr as $item) {
    if ($item == 'Sat' or $item == 'Sun') {
        echo '<b>'.$item.'</b>' . '<br>';
    }
    else {
        echo $item . '<br>';
    }
}