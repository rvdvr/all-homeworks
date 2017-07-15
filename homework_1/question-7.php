<?php

$rows = 10;
$cols = 10;

echo '<table border="1" style="border-spacing: 0">';

for ($tr = 1; $tr <= $rows; $tr++) {
    echo '<tr>';
    for ($td = 1; $td <= $cols; $td++) {
        if (($tr%2) == 0 && ($td%2) == 0) {
            echo '<td style="padding: 5px; text-align: center;">'. "(" . $tr*$td . ")" .'</td>';
        } elseif (($tr%2) == 1 && ($td%2) == 1) {
            echo '<td style="padding: 5px; text-align: center;">'. "[" . $tr*$td . "]" .'</td>';
        } else {
            echo '<td style="padding: 5px; text-align: center;">' . $tr*$td . '</td>';
        }
    }
    echo '</tr>';
}

echo '</table>';
