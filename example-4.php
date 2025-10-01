<?php

echo '--- Analisando diferenças ---' . PHP_EOL;

$bimestre1 = [
    'ana' => 10,
    'joao' => 8,
    'luana' => 7,
    'bruno' => 6,
];

$bimestre2 = [
    'ana' => 9,
    'joao' => 8,
    'luana' => 7,
];

$studentsDiff = array_diff_key($bimestre1, $bimestre2);
$studentsNotPresents = array_keys($studentsDiff);
$studentsValueNotPresents = array_values($studentsDiff);

// Arrays precisam ter o mesmo tamanho
$arrayValuesAndStudents = array_combine($studentsValueNotPresents, $studentsNotPresents);

echo '--- Analizando somente as chaves ---' . PHP_EOL;
print_r(array_diff_key($bimestre1, $bimestre2));

echo '--- Analizando chaves e valores ---' . PHP_EOL;
print_r(array_diff_assoc($bimestre1, $bimestre2));

echo '--- Os alunos que faltaram na prova no segundo bimestre ---' . PHP_EOL;
print_r($studentsNotPresents);

echo '--- Nota anterior dos alunos que faltaram na prova no segundo bimestre ---' . PHP_EOL;
print_r($studentsValueNotPresents);

echo '--- Array com chave do valor de notas e valor nome de alutos ---' . PHP_EOL;
print_r($arrayValuesAndStudents);
print_r(array_flip(array_diff_key($bimestre1, $bimestre2)));

echo '--- União de arrays ---' . PHP_EOL;

$oldStudents = [
    'primeiro' => 'ana',
    1 => 'joao',
    2 => 'luana',
    '3' => 'bruno',
    'outraEscola' => 'lucas'
];

$newStudents = [
    'primeiro' => 'luis',
    1 => 'luiz',
    2 => 'cecilia',
    '3' => 'yara',
    'intercambio' => 'hernandes'
];

// Quando o índice for string e igual, ele mantem o último, string numérica tem o mesmo padrão de chaves numéricas
$totalStudents = array_merge($oldStudents, $newStudents);
$totalStudentsOperatorPlus = $oldStudents + $newStudents;
$totalStudentsUnpacking = [...$oldStudents, ...$newStudents];

echo '--- Total de alunos ---' . PHP_EOL;
print_r($totalStudents);
print_r($totalStudentsOperatorPlus);
print_r($totalStudentsUnpacking);