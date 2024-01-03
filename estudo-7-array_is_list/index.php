<?php

// NOVA FORMA DE VALIDAÇÃO TRUE OR FALSE, CASO OS VALORES DO ARRAY NÃO PULE VALORES CRESCENTES DE NÚMEROS

$years = array(
    0 => 1,
    1 => 2,
    2 => 3
);

$is_list = array_is_list($years);

// print_r($is_list);

/* :::output:::
    1 (true)
:::output::: */

$anos = array(
    '1' => 1,
    2 => 2,
    3 => 3
);

$is_other_list = array_is_list($anos);

print_r($is_other_list);

/* :::output:::
    0/null (false)
:::output::: */

?>