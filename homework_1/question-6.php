<?php

$bmw['bmw'] = ['model' => 'X5', 'speed' => '120', 'doors' => '5', 'year' => '2015'];
$toyota['toyota'] = ['model' => 'corolla', 'speed' => '100', 'doors' => '4', 'year' => '2017'];
$opel['opel'] = ['model' => 'astra', 'speed' => '90', 'doors' => '3', 'year' => '2016'];

$car = $opel + $toyota + $bmw;

foreach ($car as $key => $array) {
    echo "CAR $key <br/>";
    foreach ($array as $value) {
        echo "$value ";
    }
    echo "<br/>";
}
