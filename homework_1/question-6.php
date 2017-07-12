<?php

//$bmw[] = 'model';
//$bmw[] = 'speed';
//$bmw[] = 'doors';
//$bmw[] = 'year';

//$bmw['model'] = 'X5';
//$bmw['speed'] = '120';
//$bmw['doors'] = '5';
//$bmw['year'] = '2015';
//
//$toyota['model'] = 'corolla';
//$toyota['speed'] = '100';
//$toyota['doors'] = '4';
//$toyota['year'] = '2017';
//
//$opel['model'] = 'astra';
//$opel['speed'] = '90';
//$opel['doors'] = '3';
//$opel['year'] = '2016';


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
