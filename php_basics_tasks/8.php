<?php
$age = 'sadasd';
if ($age >= 18 and $age <= 59) {
    echo "Вам еще работать и работать";
} elseif ($age > 59) {
    echo "Вам пора на пенсию";
} elseif ($age >= 0 and $age <= 17) {
    echo "Вам еще рано работать";
} elseif (is_string($age) and $age < 0)
    echo "Неизвестный возраст";