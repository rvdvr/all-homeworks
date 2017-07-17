<?php

$str = "Раданцев Андрей Владимирович";

echo "$str <br/>";

$str_arr = explode(" ", $str);
$str_arr_reverse = array_reverse($str_arr);
$i = -1;
$count = count($str_arr_reverse);

while (++$i < $count) {
    if ($i == 0) {
        echo "$str_arr_reverse[$i]~";
    } elseif ($i == ($count-1)) {
        echo $str_arr_reverse[$i];
    } else {
        echo "$str_arr_reverse[$i]~";
    }
}
