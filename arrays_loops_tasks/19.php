<?php
/**
 * Created by PhpStorm.
 * User: study
 * Date: 18.05.2017
 * Time: 18:11
 */
$arr = array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');
$day = 'Thu';
foreach ($arr as $item) {
    if ($item == $day) {
        echo '<i>'.$item.'</i>' . '<br>';
    }
    else {
        echo $item . '<br>';
    }
}
