<?php

// NOVA FORMA DE MERGE ENTRE ARRAYS
// A CONOTAÇÃO [...$array01, ...$array2, ...$etc]
// OBS.: A PARTIR DA VER.8.1 NÃO DARÁ ERRO DE SINTAXE

$people = array(
    'name' => 'Fillipi',
    'age' => 35,
    'sex' => 'Male'
);

$years = array(
    2022,
    2023,
    2024
);

$merge = array(...$people, ...$years);

print_r($merge);

/* :::output:::
    Array
    (
        [name] => Fillipi
        [age] => 35
        [sex] => Male
        [0] => 2022
        [1] => 2023
        [2] => 2024
    )
    :::output::: */

// FORMA ANTIGA
$people = array(
    'name' => 'Fillipi',
    'age' => 35,
    'sex' => 'Male'
);

$years = array(
    2022,
    2023,
    2024
);

// $result_merge = array_merge($people, $years);

// print_r($result_merge);

/* :::output:::
    Array
    (
        [name] => Fillipi
        [age] => 35
        [sex] => Male
        [0] => 2022
        [1] => 2023
        [2] => 2024
    )
    :::output::: */

?>