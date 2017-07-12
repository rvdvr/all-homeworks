<?php

$car['bmw'] = ['model' => 'X5', 'speed' => '120', 'doors' => '5', 'year' => '2015'];
$car['toyota'] = ['model' => 'corolla', 'speed' => '100', 'doors' => '4', 'year' => '2017'];
$car['opel'] = ['model' => 'astra', 'speed' => '90', 'doors' => '3', 'year' => '2016'];

foreach ($car as $key => $array) {
    echo "CAR $key <br/>";
    foreach ($array as $value) {
        echo "$value ";
    }
    echo "<br/>";
}
