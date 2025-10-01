<?php

echo '--- Adicionando e removendo itens do array ---' . PHP_EOL;

$fruits = [
    'banana',
    'abacaxi',
    'ameixa',
    'jabuticaba',
    'goiaba'
];

array_push($fruits, ...['mamão', 'maçã']);
$fruits[] = 'cacau';
array_pop($fruits);
array_unshift($fruits, 'açaí');
array_shift($fruits);

list($firstFruit, $secondFruit) = $fruits;
[$firstFruitArray, $secondFruitArray] = $fruits;

print_r($fruits);
echo "A primeira fruta é $firstFruit e a segunda é $secondFruit" . PHP_EOL;
echo "A primeira fruta é $firstFruitArray e a segunda é $secondFruitArray - ([first, second])" . PHP_EOL;

echo '--- Mesmo exemplo mas com array associativo ---' . PHP_EOL;

$cart = [
    'food' => 'Arroz',
    'fruit' => 'Ameixa',
    'drink' => 'Suco de limão'
];

['food' => $foodName, 'fruit' => $fruit, 'drink' => $drink] = $cart;

echo "Comida: $foodName, fruta: $fruit, drink: $drink" . PHP_EOL;

echo '--- Criando variáveis com base em array ---' . PHP_EOL;

$studentsNotes = [
    'ana' => 10,
    'joao' => 8
];

// Importante, use somente se confia no array, não é recomendado usar em arrays que são manipulados por usuário por exemplos
extract($studentsNotes);
$newArrayStudentsNotesVariables = compact('ana', 'joao');

echo "A nota de ana foi $ana e de joão foi $joao" . PHP_EOL;
print_r($newArrayStudentsNotesVariables);

echo '--- Reduzindo um array a um item ---' . PHP_EOL;

$strings = ['PHP', 'é', 'legal'];

// iterações
// 1 - $carry  = "" e $item = "PHP"
// 2 - $carry = "PHP" e $item = "é"
// 3 - $carry = "PHP é" e $item = "legal"
// PHP é legal
$newString = array_reduce($strings, function ($carry, $item) {
    return "$carry $item";
}, "");

echo $newString . PHP_EOL;
