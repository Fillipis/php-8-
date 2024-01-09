<?php
// FORMA NOVA DE DECLARAÇÃO -> "NAMED ARGUMENTS"
// A ORDEM NÃO INFLUENCIA NA EXECUÇÃO DO MÉTODO, PORÉM, SE OPTAR POR USAR ESSA FORMA, TEM QUE AJUSTAR EM TODO O CÓDIGO.

class Usuario
{

    public function infoUsuario(string $nome, string $perfil){
        if($perfil == 'Admin'){
            return [
                'nome' => $nome,
                'perfil' => $perfil
            ];
        }
        return [
            'nome' => $nome
        ];
    }

}

$usuarios = new Usuario();
$usuario = $usuarios->infoUsuario(perfil:'Admin', nome:'Fillipi Santos');

print_r($usuario);



// FORMA ANTIGA
class User
{

    public function infoUser(string $name, string $perfil){
        if($perfil == 'Admin'){
            return [
                'name' => $name,
                'perfil' => $perfil
            ];
        }
        return [
            'name' => $name
        ];
    }

}

$users = new User();
$user = $users->infoUser('Fillipi', '');

print_r($user);
