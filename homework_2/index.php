<?php

require('functions.php');

echo "<h3>Задание номер 1</h3>";

echo task1(['Зима', 'скоро', 'будет', 'здесь!'], true);

echo "<h3>Задание номер 2</h3>";

task2([5,4,3,2,1], '-');

echo "<h3>Задание номер 3</h3>";

task3('*', 1, 2, 3, 4);

echo "<h3>Задание номер 4</h3>";

task4(5, 3);

echo "<h3>Задание номер 5</h3>";

output_russian(task5('12'));

echo "<h3>Задание номер 6</h3>";

task6();

echo "<h3>Задание номер 7</h3>";

task7();

echo "<h3>Задание номер 8</h3>";

task8('RX packets:950381 errors:0 dropped:0 overruns:0 frame:0 :).');

echo "<h3>Задание номер 9</h3>";

task9('test.txt');

echo "<h3>Задание номер 10</h3>";

task10('anothertest.txt', 'Hello, again');
