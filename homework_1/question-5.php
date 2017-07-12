<?php

$day = 24;

$age = 15;

switch ($age) {
    case $age>=18 && $age<= 65:
        echo 'Вам еще работать и работать';
        break;
    case $age > 65:
        echo 'Вам пора на пенсию';
        break;
    case $age <= 17 && $age >= 1:
        echo 'Вам еще рано работать';
        break;
    default:
        echo 'Неизвестный возраст';
        break;