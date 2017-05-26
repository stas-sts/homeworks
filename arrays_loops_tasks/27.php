<?php
$row = 5;
$cols = 6;
$colors = array('red','yellow','blue','gray','maroon','brown','green');

echo "<table>";
for($i = 0;$i < $row;$i++) {
    echo "<tr>";
    for ($j = 0; $j < $cols; $j++) {
        $table[$i][$j] = rand();
        echo "<td style='background-color:{$colors[rand(0,6)]}'>  ".$table[$i][$j]."</td>";
    }
    echo "</tr>";
}
echo "</table>";