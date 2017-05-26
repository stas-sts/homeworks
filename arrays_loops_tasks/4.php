<?php
/**
 * Created by PhpStorm.
 * User: study
 * Date: 12.05.2017
 * Time: 19:24
 */
$arr = array ('green' => 'зеленый', 'red' => 'красный','blue' => 'голубой');
foreach ($arr as $key => $value) {
    echo $key .'<br>';
}
echo '<br>';
foreach ($arr as $value) {
    echo $value .'<br>';
}