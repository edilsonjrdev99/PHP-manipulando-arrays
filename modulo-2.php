<?php

echo '--- Exemplo de ordenação de array ---' . PHP_EOL;

$arrayDisorderly = [
    'Um',
    'Oito',
    'Três',
    'Quatro'
];

$arrayDisorderlyNumber = [
    1,
    8,
    3,
    4
];

$orderedArray = $arrayDisorderly;
echo 'Array com valores em string são ordenados em ordem alfabética' . PHP_EOL;
sort($orderedArray);

$orderedArrayNumber = $arrayDisorderlyNumber;
echo 'Arrays com valores int são ordenados na ordem numérica' . PHP_EOL;
sort($orderedArray);

print_r($orderedArray);
print_r($orderedArrayNumber);

echo '** Alerta ** a função sort recebe no primeiro parâmetro uma referência!' . PHP_EOL;

echo '--- Odenação de arrays com critérios ---' . PHP_EOL;

$arrayStudents = [
    [
        'name' => 'Maria',
        'value' => 9,
    ],
    [
        'name' => 'Carlos',
        'value' => 6,
    ],
    [
        'name' => 'João de Barro',
        'value' => 8,
    ],
];

print_r($arrayStudents);

function orderStudents(array $value1, array $value2): int
{
    return $value2['value'] <=> $value1['value'];
}

usort($arrayStudents, 'orderStudents');

print_r($arrayStudents);

echo '--- Ordenação do maior para o menor ---' . PHP_EOL;

$students = [
    'Ana' => 9,
    'Joao' => 7,
    'Carlos' => 6,
    'Julia' => 8
];

echo '--- rsort perde as chaves ---' . PHP_EOL;

$arrayDesc = $students;
$arrayAssocDesc = $students;

rsort($arrayDesc);
print_r($arrayDesc);

echo '--- arsort mantém as chaves ---' . PHP_EOL;
arsort($arrayAssocDesc);
print_r($arrayAssocDesc);

echo '--- Ordenando pela chaves ---' . PHP_EOL;

ksort($arrayAssocDesc);
print_r($arrayAssocDesc);

echo '--- Ordenação com critério de chaves ---' . PHP_EOL;

$fruits = [
    [
        'name' => 'Banana',
        'value' => 5,
    ],
    [
        'name' => 'Abacaxi',
        'value' => 4,
    ],
    [
        'name' => 'Abacate',
        'value' => 6,
    ]
];

uksort($fruits, function ($a, $b) use ($fruits) {
    return $fruits[$a]['name'] <=> $fruits[$b]['name'];
});

print_r($fruits);