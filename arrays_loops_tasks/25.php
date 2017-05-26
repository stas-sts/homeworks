<?php
/**
 * Created by PhpStorm.
 * User: study
 * Date: 25.05.2017
 * Time: 17:10
 */
$a = array();
for ($x=0;$x<=1;$x++) {
    $a[] = rand();
}
var_dump($a);
echo '<br>';

echo "Минимальное значение: " .min($a) .'<br>';
echo "Максимальное значение: " .max($a) .'<br>';

echo '<br>';
$b = array_reverse($a);
print_r($b);