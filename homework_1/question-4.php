<?php

$age = 23;

if ($age>=18 && $age<= 65) {
    echo 'Вам еще работать и работать';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию';
} elseif ($age <= 17 && $age >= 1) {
    echo 'Вам еще рано работать';
} else {
    echo 'Неизвестный возраст';
}