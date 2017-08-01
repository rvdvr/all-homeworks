<?php

function task1($array, $bool = false)
{
    if ($bool != true) {
        foreach ($array as $value) {
            echo "<p> $value </p>";
        }
    } else {
        foreach ($array as $value) {
            $string_val[] = $value;
        }
        return implode(' ', $string_val);
    }
}

function task2($arr, $calc)
{
    echo implode($calc, $arr).' = ';
    $count = 0;
    foreach ($arr as $k => $item) {
        if ($k > 0) {
            switch ($calc) {
                case '-':
                    $count -= $item;
                    break;
                case '+':
                    $count += $item;
                    break;
                case '*':
                    $count *= $item;
                    break;
                case '/':
                    $count /= $item;
                    break;
            }
        } else {
            $count = $item;
        }
    }
    echo $count;
}

function task3($str)
{
    if (is_string($str)) {
        if (in_array($str, array('-', '+', '/', '*'))) {
            $arr = func_get_args();
            $z = $arr[0];
            array_shift($arr);
            task2($arr, $z);
        } else {
            echo 'Первый аргумент не является знаком: - + / *';
            return;
        }
    } else {
        echo 'Первый аргумент не строка';
        return;
    }
}

function task4($a, $b)
{
    if (is_integer($a) && is_integer($b)) {
        echo '<table border="1" style="border-spacing: 0">';
        for ($tr = 1; $tr <= $a; $tr++) {
            echo '<tr>';
            for ($td = 1; $td <= $b; $td++) {
                echo '<td style="padding: 5px; text-align: center;">' . $tr*$td . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'Ошибка! Не целые числа';
    }
}

function task5($strLine)
{
    $strLine = mb_strtolower($strLine);
    $strReverse = mb_strrev($strLine);
    if ($strLine === $strReverse) {
        return true;
    } else {
        return false;
    }
}

function mb_strrev($str)
{
    $reverseString = '';
    for ($i = 0; $i < mb_strlen($str); $i++) {
        $reverseString .= mb_substr($str, mb_strlen($str) - $i - 1, 1);
    }
    return $reverseString;
}

function output_russian($bool)
{
    if ($bool == true) {
        echo '<p> Строка является полиндромом </p>';
    } else {
        echo '<p> Строка не является полиндромом </p>';
    }
}

function task6()
{
    echo 'Текущая дата ' . date('d.m.Y H:i') . '<br/>';
    $result = mktime(0, 0, 00, 02, 24, 2016);
    echo 'Преобразованная дата: ' . date('d.m.Y H:i:s', $result);
}

function task7()
{
    $string_del = 'Карл у Клары украл Кораллы';
    $string_replace = 'Две бутылки лимонада';
    $pattern_del = '/К/';
    $pattern_replace = '/Две/';
    $result_del = preg_replace($pattern_del, '', $string_del);
    $result_replace = preg_replace($pattern_replace, 'Три', $string_replace);
    echo "$result_del <br/>";
    echo $result_replace;
}

function smile()
{
    echo '<br>
░░░█████░░░░░░░░░░░░░░░░░░░░░░░░<br>
░░█▒▒▒▒▒█░░░░░░░░ ████████████████<br>
░░█▒▒▒▒▒▒█░░░░░░███▒▒▒▒▒▒▒▒▒▒▒▒▒████<br>
░░░█▒▒▒▒▒ █░░░░ ██▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒██<br>
░░░░█▒▒▒▒█ ░░░██▒▒▒▒▒██ ▒▒▒▒▒▒██ ▒▒▒▒▒██<br>
░░░░░█▒▒▒█░░░█▒▒▒▒▒▒████▒▒▒▒████▒▒▒▒▒▒█<br>
░░░█████████████▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒██<br>
░░░█▒▒▒▒▒▒▒▒▒▒▒▒█▒▒▒▒▒▒▒▒▒█▒▒▒▒▒▒▒▒▒▒▒██<br>
░██▒▒▒▒▒▒▒▒▒▒▒▒▒█▒▒▒██▒▒▒▒▒▒▒▒▒▒██▒▒▒▒██<br>
██▒▒▒███████████▒▒▒▒▒██▒▒▒▒▒▒█▒██▒▒▒▒▒██<br>
█▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒█▒▒▒▒▒▒████████▒▒▒▒▒▒▒█<br>
██▒▒▒▒▒▒▒▒▒▒▒▒▒▒█▒▒▒▒▒▒▒▒▒▒▒▒▒██▒▒▒▒▒██<br>
░█▒▒▒███████████ ▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒▒▒██<br>
░██▒▒▒▒▒▒▒▒▒▒████▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒██<br>
░░████████████░░░█████████████████<br>';
}

function task8($string)
{
    $pattern = '/packets:(.*?) errors:/';
    preg_match_all($pattern, $string, $array);
    $search_smile = preg_match('/:\)/', $string);
    $str_value = implode($array[0]);
    $search = ['packets:', ' errors:'];
    $num_value = str_replace($search, '', $str_value);
    if ($search_smile == 1) {
        smile();
    } elseif ($num_value > 1000) {
        echo 'Сеть есть!';
    }
}

function task9($file_name)
{
    $path = './' . $file_name;
    $file_content = file_get_contents($path);
    echo $file_content;
}

function task10($file_name, $text)
{
    file_put_contents($file_name, $text);
    echo 'Файл создан!';
}
