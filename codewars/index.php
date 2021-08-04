<?php

$array = [];
$i = 1;
foreach (range(0,4) as $y) {
    $j = 1;
    foreach (range(0,4) as $x) {
        $array[$y][$x] = "$i:$j";
        $j++;
    }
    $i++;
}
echo '<pre>';
print_r($array);
echo '<br><br><br>';
foreach ($array as $row) {
    echo '[ ';
    foreach ($row as $col) {
        echo $col . ' ';
    }
    echo ']<br>';
}