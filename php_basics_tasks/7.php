<?php
$age = '5';
if ($age >= 18 and $age <= 59) {
    echo "Вам еще работать и работать";
} elseif ($age > 59) {
    echo "Вам пора на пенсию";
} else
    echo "Вам еще рано работать";