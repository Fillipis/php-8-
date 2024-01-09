<?php

// NOVA FORMA ONDE TODAS AS PROPRIEDADES SERÃO READONLY

readonly class Usuario {

    public string $name;
    public int $age;

    public function __construct(string $name, int $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(){
        return $this->name;
    }

    public function setName(string $name){
        // atribuir um outro name, não será possível: error
        $this->name = $name;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge(int $age){
        // atribuir um outro name, não será possível: error
        $this->age = $age;
    }

}

$user = new Usuario('Fillipi', 35);
// ao tentar setar dará erro:
echo $user->setName('Fillipi Santos');
echo $user->setAge(25);
echo $user->getName();
echo $user->getAge();

// FORMA ANTIGA

// class User {

//     public readonly string $name;

//     public function __construct(string $name){
//         $this->name = $name;
//     }

//     public function getName(){
//         return $this->name;
//     }

//     public function setName(string $name){
//         // atribuir um outro name, não será possível: error
//         $this->name = $name;
//     }

// }

// $user = new User('Fillipi');
// // ao tentar setar dará erro:
// echo $user->setName('Fillipi Santos');
// echo $user->getName();
