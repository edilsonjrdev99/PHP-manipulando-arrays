<?php

echo '--- Verificação de arrays tipo lista ---' . PHP_EOL;

$arrayNumeric = [
    0 => 'Um',
    1 => 'Dois',
    2 => 'Tres',
    3 => 'Quatro',
    4 => 'Cinco',
];

$arrayNotNumeric = [
    1 => 'Um',
    2 => 'Dois',
    3 => 'Tres',
    4 => 'Quatro',
    5 => 'Cinco',
];

$arrayNumericIsList = array_is_list($arrayNumeric) ? 'Sim' : 'Não';
$arrayNotNumericIsList = array_is_list($arrayNotNumeric) ? 'Sim' : 'Não';

echo "ArrayNumeric é um array de lista? $arrayNumericIsList" . PHP_EOL;
echo "ArrayNotNumeric é um array de lista? $arrayNotNumericIsList" . PHP_EOL;

echo '--- Verificação de chaves ---' . PHP_EOL;

$students = [
    'ana' => 10,
    'joao' => 8,
    'luana' => null
];

$studentCompletedTest = array_key_exists('luana', $students) ? 'O aluno fez o teste' : 'O aluno não fez o teste';
$studentCompletedTestValidator = isset($students['luana']) ? 'O aluno fez o teste' : 'O aluno não fez o teste';
$maxNote = in_array(10, $students, true) ? 'Alguém tirou nota máxima' : 'Ninguém tirou nota máxima';
$studentMaxNote = array_search(10, $students, true);

echo $studentCompletedTest . PHP_EOL;
echo $studentCompletedTestValidator . PHP_EOL;
echo $maxNote . " $studentMaxNote" . PHP_EOL;