<?php
/**
 * Created by PhpStorm.
 * User: study
 * Date: 12.05.2017
 * Time: 19:30
 */
$arr = array ('Коля' => 200, 'Вася' => 300, 'Петя' => 400);
foreach ($arr as $key => $value) {
    echo "$key - зарплата $value долларов" .'<br>';
}