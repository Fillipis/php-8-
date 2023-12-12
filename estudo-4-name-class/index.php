<?php
// NOVA FORMA DE CAPTURAR O NOME DA CLASSE PELO OBJETO

// MESMO COM NAMESPACE
namespace model;

class Anime {

    private $data = [];

}

$objeto = new Anime;
echo $objeto::class . ' ';

// FORMA ANTIGA
class Pessoa {

    private $data = [];

}

echo Pessoa::class . ' ';