<?php
echo '<table cellspacing="10"><tr>';
for ($i=1;$i<=10;$i++) {
    echo "<td>";
    for ($z=1;$z<=10;$z++) {
        echo $i.'*'.$z.'='.($i*$z).'<br>';
}
echo "</td>";
}
echo '</tr></table>';