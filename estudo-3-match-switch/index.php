<?php
// NOVA FUNÇÃO -> "MATCH"
// AMBAS OPÇÕES ACEITAM: ARRAYS E FUNCTIONS

$nome = 'Luana';

$myMatch = match($nome){
    'Fillipi' => 'Meu nome é Fillipi. ',
    'Luana' => 'Meu nome é Luana. ',
    default => 'Informe seu nome ou o de sua namorada ... '
};

echo $myMatch;

// FUNÇÃO ANTIGA -> "SWITCH"

$mamifero = 'Leopardo';

switch ($mamifero) {
    case 'Cachorro':
        echo 'Você tem um(a) cachorrinho(a) ';
        break;
    case 'Gato':
        echo 'Você tem um(a) gatinho(a) ';
        break;
    case 'Hamster':
        echo 'Você tem um(a) hamsterzinho(a) ';
        break;
    default:
        echo 'Informe um(a) animal mamífero ... ';
}
