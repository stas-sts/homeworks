<?php
$a = 5;
$b = 0;
$operator = '/';
if ($operator == '+') {
    $c = $a + $b; echo "Cумма = $c";
} elseif ($operator == '-') {
    $d = $a - $b; echo "Разность = $d";
} elseif ($operator == '*') {
    $e = $a * $b;  echo "Произведение = $e";
} elseif ($operator == '/' and $b != 0) {
    $f = $a / $b; echo "Деление = $f";
} elseif ($operator == '%') {
    $g = $a % $b; echo "Остаток от деления = $g";
} else {
    echo "Неизвестный параметр или вы пытаетесь произвести деление на 0";
}