<?php
/**
 * Created by PhpStorm.
 * User: study
 * Date: 18.05.2017
 * Time: 18:11
 */
$arr = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
$month = 'May';
foreach ($arr as $item) {
    if ($item == $month) {
        echo '<b>'.$item.'</b>' . '<br>';
    }
    else {
        echo $item . '<br>';
    }
}
