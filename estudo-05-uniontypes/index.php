<?php
// FORMA NOVA, UNIONTYPES PARA CADA TIPO DE PARÂMETROS DOS MÉTODOS
class Pessoa {

    private $dados = [];

    public function dados(int|string $dados) {
        array_push($this->dados, $dados);
        return $this;
    }

    public function getDados(){
        print_r($this);
    }

}

$dado = new Pessoa();
$dado->dados(100)->getDados();
$dado->dados('Fillipi')->getDados();
// valor booleano não passará pelos critérios do uniontypes, dará erro.
$dado->dados(false)->getDados();

// FORMA ANTIGA
class Person {

    private $dados = [];

    public function dado(?string $dados): ?self {
        array_push($this->dados, $dados);
        return $this;
    }

    public function getDados(){
        print_r($this);
    }

}

$dado = new Person();
$dado->dado()->getDados();