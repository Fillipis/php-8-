<?php
// FORMA NOVA DE DECLARAR AS PROPRIEDADES NO CONSTRUTOR

class Usuario
{
    public function __construct(
        private string $nome, 
        private int $idade = 0
    ){}

    public function getUsuario(){
        if($this->idade > 0 && $this->idade < 100){
            return [
                'nome' => $this->nome,
                'idade' => $this->idade
            ];
        }
        return [
            'nome' => $this->nome
        ];
    }

}

$usuarios = new Usuario('Fillipi Santos', '100');
$usuario = $usuarios->getUsuario();
print_r($usuario);

// FORMA ANTIGA
class User
{

    private string $nome;
    private int $ano_nascimento;

    public function __construct($nome, $ano_nascimento){
        $this->nome = $nome;
        $this->ano_nascimento = $ano_nascimento;
    }

    public function getUser(){
        return [
            'nome' => $this->nome,
            'ano_nascimento' => $this->ano_nascimento,
        ];
    }

}

$users = new User('Fillipi', 1988);
$user = $users->getUser();

print_r($user);
