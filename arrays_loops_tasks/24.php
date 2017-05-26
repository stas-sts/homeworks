<?php
/**
 * Created by PhpStorm.
 * User: study
 * Date: 25.05.2017
 * Time: 15:50
 */
$str = 12334351237; // число
$a = 3; // найти эту цифру в числе
$y = 0;
$arr = str_split($str);
foreach ($arr as $num) {
    if ($num == $a) {
        $y++;
    }
}
echo "Цифра $a встречается $y раз(-а)!";