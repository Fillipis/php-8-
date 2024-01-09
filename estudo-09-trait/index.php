<?php

trait Log {
    const USER = '@fillipidev';

    public function logMessage($message) {
        echo 'Log: ' . $message;
    }
}

class User {
    use Log;

    public function createUser() {
        // Código para criar um usuário
        $this->logMessage('Novo usuário criado: ');
    }
}

class Product {
    use Log;

    public function createProduct() {
        // Código para criar um produto
        $this->logMessage('Novo produto criado: ');
    }
}

$user = new User();
// acessando método e constante de Trait
echo $user->createUser('Satoro Gojo') . $user::USER;

// $user = new Product('Whisky');
// echo $user->createUser('Satoro Gojo') . $user::USER;