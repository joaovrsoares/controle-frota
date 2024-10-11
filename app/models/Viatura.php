<?php
class Viatura {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo; // Armazena a conexão PDO para uso posterior
    }
}