<?php

$str = "Раданцев Андрей Владимирович";

echo "$str <br/>";

$str_arr = explode(" ", $str);
$i = -1;
$count = count($str_arr);

while (++$i < $count) {
    if ($i == 0) {
        echo "$str_arr[$i]~";
    } elseif ($i == ($count-1)) {
        echo $str_arr[$i];
    } else {
        echo "$str_arr[$i]~";
    }
}
