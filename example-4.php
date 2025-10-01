<?php

echo '--- Analisando diferenças ---' . PHP_EOL;

$bimestre1 = [
    'ana' => 10,
    'joao' => 8,
    'luana' => 7
];

$bimestre2 = [
    'ana' => 9,
    'joao' => 8,
];

echo '--- Analizando somente as chaves ---' . PHP_EOL;
var_dump(array_diff_key($bimestre1, $bimestre2));

echo '--- Analizando chaves e valores ---' . PHP_EOL;
var_dump(array_diff_assoc($bimestre1, $bimestre2));
