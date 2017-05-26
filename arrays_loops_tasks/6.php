<?php
/**
 * Created by PhpStorm.
 * User: study
 * Date: 12.05.2017
 * Time: 19:33
 */
$arr = array ('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');
$en = array ();
$ru = array ();
foreach ($arr as $key => $value) {
    $en[] = $key;
    $ru[] = $value;
}
print_r($en);
echo '<br>';
print_r($ru);