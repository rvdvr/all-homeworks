<?php

define('NAME', 'Андрей');

if (defined('NAME')) {
    echo 'GOOD <br/>';
} else {
    echo 'BAD  <br/>';
}

echo NAME;

define('NAME', 'Lobster');
