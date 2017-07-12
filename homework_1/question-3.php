<?php

define('NAME', 'Андрей');

if (defined('NAME')) {
    echo 'GOOD <br/>';
} else {
    echo 'BAD  <br/>';
}
define('NAME', 'Lobster');
echo NAME;
