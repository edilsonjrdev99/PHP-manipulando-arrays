<?php

$array = [
    1 => 'Um',
    false => 'Dois',
    2.1 => 'Tres',
];

foreach ($array as $key => $value) {
    echo "chave $key - valor $value" . PHP_EOL;
}
