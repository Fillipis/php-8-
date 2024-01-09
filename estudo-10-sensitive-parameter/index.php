<?php

// Imagine abaixo, um cenário de realização de pagamentos [cartao de crédito]

function payment(
    string|int $creditcard_number,
    string $creditcard_expire,
    float $amount
){ throw new Exception('erro'); }

// Simulando um pagamento

try{
    payment('5555 4444 3333 1111', '08/28', 122.75);
}catch(\Throwable $th){
    $erro = $th->getTrace();
    // print_r($erro);
}

/*
    output:::
Array
(
    [0] => Array
        (
            [file] => C:\php\php-8-3-0\applications\php-8-more\estudo-10-sensitive-parameter\index.php
            [line] => 14
            [function] => payment
            [args] => Array
                (
                    [0] => 5555 4444 3333 1111
                    [1] => 08/28
                    [2] => 122.75
                )

        )

)
*/

// SENSITIVEPAR Imagine abaixo, um cenário de realização de pagamentos [cartao de crédito]

function pay(
    #[SensitiveParameter] string|int $creditcard_number,
    #[SensitiveParameter] string $creditcard_expire,
    float $amount
){ throw new Exception('erro'); }

// Simulando um pagamento

try{
    pay(5222777733331111, '11/30', 2568.25);
}catch(\Throwable $th){
    $erro = $th->getTrace();
    print_r($erro);
}

/*
    output:::
Array
(
    [0] => Array
        (
            [file] => C:\php\php-8-3-0\applications\php-8-more\estudo-10-sensitive-parameter\index.php
            [line] => 52
            [function] => pay
            [args] => Array
                (
                    [0] => SensitiveParameterValue Object
                        (
                        )

                    [1] => SensitiveParameterValue Object
                        (
                        )

                    [2] => 25.75
                )

        )

)
*/